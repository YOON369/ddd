const state = {
  projects: [],
  sessions: [],
  selectedProject: null,
  selectedSession: null,
  cwd: null,
  autoRefresh: true,
  refreshTimer: null,
  lastEventCount: 0,
};

const el = {
  projectList: document.getElementById('project-list'),
  sessionList: document.getElementById('session-list'),
  eventStream: document.getElementById('event-stream'),
  sessionTitle: document.getElementById('session-title'),
  sessionStats: document.getElementById('session-stats'),
  gitStatus: document.getElementById('git-status'),
  gitLog: document.getElementById('git-log'),
  gitCwd: document.getElementById('git-cwd'),
  refreshBtn: document.getElementById('refresh-btn'),
  pickDirBtn: document.getElementById('pick-dir-btn'),
  autoRefresh: document.getElementById('auto-refresh'),
};

function relativeTime(ms) {
  if (!ms) return '활동 없음';
  const diff = Date.now() - ms;
  const s = Math.floor(diff / 1000);
  if (s < 60) return `${s}초 전`;
  const m = Math.floor(s / 60);
  if (m < 60) return `${m}분 전`;
  const h = Math.floor(m / 60);
  if (h < 24) return `${h}시간 전`;
  const d = Math.floor(h / 24);
  return `${d}일 전`;
}

function formatTime(iso) {
  if (!iso) return '';
  const d = new Date(iso);
  if (Number.isNaN(d.getTime())) return '';
  return d.toTimeString().slice(0, 8);
}

function truncatePath(p, len = 36) {
  if (!p) return '';
  if (p.length <= len) return p;
  return '…' + p.slice(-(len - 1));
}

async function loadProjects() {
  state.projects = await window.api.listProjects();
  renderProjects();
}

function renderProjects() {
  el.projectList.innerHTML = '';
  if (state.projects.length === 0) {
    el.projectList.innerHTML = '<li class="muted">~/.claude/projects 없음</li>';
    return;
  }
  for (const p of state.projects) {
    const li = document.createElement('li');
    if (p.id === state.selectedProject) li.classList.add('active');
    const name = document.createElement('div');
    name.textContent = truncatePath(p.path);
    name.title = p.path;
    const meta = document.createElement('div');
    meta.className = 'meta';
    meta.textContent = `${p.sessionCount} 세션 · ${relativeTime(p.lastActivity)}`;
    li.append(name, meta);
    li.addEventListener('click', () => selectProject(p.id));
    el.projectList.appendChild(li);
  }
}

async function selectProject(projectId) {
  state.selectedProject = projectId;
  state.selectedSession = null;
  state.lastEventCount = 0;
  renderProjects();
  el.eventStream.innerHTML =
    '<p class="muted">세션을 선택하세요.</p>';
  el.sessionTitle.textContent = '세션을 선택하세요';
  el.sessionStats.innerHTML = '';
  state.sessions = await window.api.listSessions(projectId);
  renderSessions();
  if (state.sessions.length > 0) {
    selectSession(state.sessions[0].file);
  }
}

function renderSessions() {
  el.sessionList.innerHTML = '';
  if (state.sessions.length === 0) {
    el.sessionList.innerHTML = '<li class="muted">세션 없음</li>';
    return;
  }
  for (const s of state.sessions) {
    const li = document.createElement('li');
    if (s.file === state.selectedSession) li.classList.add('active');
    const name = document.createElement('div');
    name.textContent = s.id.slice(0, 8);
    const meta = document.createElement('div');
    meta.className = 'meta';
    meta.textContent = `${relativeTime(s.mtime)} · ${(s.size / 1024).toFixed(1)} KB`;
    li.append(name, meta);
    li.addEventListener('click', () => selectSession(s.file));
    el.sessionList.appendChild(li);
  }
}

async function selectSession(file) {
  state.selectedSession = file;
  state.lastEventCount = 0;
  renderSessions();
  el.sessionTitle.textContent = file;
  await refreshSession();
}

function classifyEvent(ev) {
  const type = ev.type || ev.role;
  if (type === 'user') return 'user';
  if (type === 'assistant') return 'assistant';
  if (type === 'tool_use' || type === 'tool_result') return 'tool';
  if (type === 'summary') return 'summary';
  return 'system';
}

function extractText(content) {
  if (typeof content === 'string') return content;
  if (!Array.isArray(content)) return JSON.stringify(content, null, 2);
  return content
    .map((c) => {
      if (typeof c === 'string') return c;
      if (c.type === 'text') return c.text;
      if (c.type === 'tool_use') {
        const input = c.input ? JSON.stringify(c.input, null, 2) : '';
        return `[tool_use] ${c.name}\n${input}`;
      }
      if (c.type === 'tool_result') {
        const r =
          typeof c.content === 'string'
            ? c.content
            : Array.isArray(c.content)
              ? c.content.map((x) => (typeof x === 'string' ? x : x.text || '')).join('\n')
              : JSON.stringify(c.content, null, 2);
        return `[tool_result]\n${r}`;
      }
      return JSON.stringify(c, null, 2);
    })
    .join('\n');
}

function renderEvent(ev, idx) {
  const kind = classifyEvent(ev);
  const div = document.createElement('div');
  div.className = `event ${kind}`;

  const head = document.createElement('div');
  head.className = 'head';
  const role = document.createElement('span');
  role.className = 'role';
  role.textContent = ev.type || ev.role || 'event';
  const time = document.createElement('span');
  time.className = 'time';
  time.textContent = formatTime(ev.timestamp);
  head.append(role, time);

  const body = document.createElement('div');
  body.className = 'body';
  let text = '';
  if (ev.message && ev.message.content) {
    text = extractText(ev.message.content);
  } else if (ev.content) {
    text = extractText(ev.content);
  } else if (ev.summary) {
    text = ev.summary;
  } else {
    text = JSON.stringify(ev, null, 2);
  }
  body.textContent = text;

  if (text.length > 600) {
    body.classList.add('truncate');
    const toggle = document.createElement('span');
    toggle.className = 'expand';
    toggle.textContent = '▾ 펼치기';
    toggle.addEventListener('click', () => {
      body.classList.toggle('expanded');
      toggle.textContent = body.classList.contains('expanded') ? '▴ 접기' : '▾ 펼치기';
    });
    div.append(head, body, toggle);
  } else {
    div.append(head, body);
  }

  return div;
}

async function refreshSession() {
  if (!state.selectedProject || !state.selectedSession) return;
  const events = await window.api.readSession(state.selectedProject, state.selectedSession);

  const stickToBottom =
    el.eventStream.scrollHeight - el.eventStream.scrollTop - el.eventStream.clientHeight < 80;

  const stats = countStats(events);
  el.sessionStats.innerHTML = `
    <span class="stat"><strong>${stats.total}</strong> 이벤트</span>
    <span class="stat"><strong>${stats.user}</strong> user</span>
    <span class="stat"><strong>${stats.assistant}</strong> assistant</span>
    <span class="stat"><strong>${stats.tool}</strong> tool</span>
  `;

  if (events.length === state.lastEventCount) return;
  state.lastEventCount = events.length;

  el.eventStream.innerHTML = '';
  for (let i = 0; i < events.length; i++) {
    el.eventStream.appendChild(renderEvent(events[i], i));
  }

  if (stickToBottom) {
    el.eventStream.scrollTop = el.eventStream.scrollHeight;
  }
}

function countStats(events) {
  const s = { total: events.length, user: 0, assistant: 0, tool: 0 };
  for (const ev of events) {
    const k = classifyEvent(ev);
    if (k === 'user') s.user++;
    else if (k === 'assistant') s.assistant++;
    else if (k === 'tool') s.tool++;
  }
  return s;
}

async function refreshGit() {
  if (!state.cwd) return;
  const [status, log] = await Promise.all([
    window.api.gitStatus(state.cwd),
    window.api.gitLog(state.cwd),
  ]);
  el.gitStatus.textContent = status.ok ? status.output || '(깨끗함)' : `오류: ${status.error}`;
  el.gitLog.textContent = log.ok ? log.output : `오류: ${log.error}`;
}

async function refreshAll() {
  await loadProjects();
  if (state.selectedProject) {
    state.sessions = await window.api.listSessions(state.selectedProject);
    renderSessions();
  }
  if (state.selectedSession) await refreshSession();
  if (state.cwd) await refreshGit();
}

function startAutoRefresh() {
  stopAutoRefresh();
  state.refreshTimer = setInterval(refreshAll, 3000);
}

function stopAutoRefresh() {
  if (state.refreshTimer) {
    clearInterval(state.refreshTimer);
    state.refreshTimer = null;
  }
}

el.refreshBtn.addEventListener('click', refreshAll);

el.autoRefresh.addEventListener('change', (e) => {
  state.autoRefresh = e.target.checked;
  if (state.autoRefresh) startAutoRefresh();
  else stopAutoRefresh();
});

el.pickDirBtn.addEventListener('click', async () => {
  const dir = await window.api.pickDirectory();
  if (dir) {
    state.cwd = dir;
    el.gitCwd.textContent = dir;
    await refreshGit();
  }
});

loadProjects().then(() => {
  if (state.projects.length > 0) selectProject(state.projects[0].id);
});
startAutoRefresh();
