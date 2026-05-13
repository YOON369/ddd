const { app, BrowserWindow, ipcMain, dialog } = require('electron');
const path = require('path');
const fs = require('fs');
const os = require('os');
const { execFile } = require('child_process');

const CLAUDE_PROJECTS_DIR = path.join(os.homedir(), '.claude', 'projects');

let mainWindow;

function createWindow() {
  mainWindow = new BrowserWindow({
    width: 1200,
    height: 800,
    minWidth: 900,
    minHeight: 600,
    title: 'Claude Code Dashboard',
    webPreferences: {
      preload: path.join(__dirname, 'preload.js'),
      contextIsolation: true,
      nodeIntegration: false,
      sandbox: true,
    },
  });

  mainWindow.loadFile(path.join(__dirname, 'renderer', 'index.html'));
}

app.whenReady().then(createWindow);

app.on('window-all-closed', () => {
  if (process.platform !== 'darwin') app.quit();
});

app.on('activate', () => {
  if (BrowserWindow.getAllWindows().length === 0) createWindow();
});

function decodeProjectId(id) {
  return id.replace(/^-/, '/').replace(/-/g, '/');
}

ipcMain.handle('list-projects', async () => {
  try {
    const entries = await fs.promises.readdir(CLAUDE_PROJECTS_DIR, { withFileTypes: true });
    const projects = await Promise.all(
      entries
        .filter((e) => e.isDirectory())
        .map(async (e) => {
          const dir = path.join(CLAUDE_PROJECTS_DIR, e.name);
          const files = await fs.promises.readdir(dir).catch(() => []);
          const jsonl = files.filter((f) => f.endsWith('.jsonl'));
          let latest = 0;
          for (const f of jsonl) {
            const st = await fs.promises.stat(path.join(dir, f)).catch(() => null);
            if (st && st.mtimeMs > latest) latest = st.mtimeMs;
          }
          return {
            id: e.name,
            path: decodeProjectId(e.name),
            sessionCount: jsonl.length,
            lastActivity: latest,
          };
        })
    );
    return projects.sort((a, b) => b.lastActivity - a.lastActivity);
  } catch (e) {
    return [];
  }
});

ipcMain.handle('list-sessions', async (_, projectId) => {
  try {
    const dir = path.join(CLAUDE_PROJECTS_DIR, projectId);
    const files = await fs.promises.readdir(dir);
    const sessions = await Promise.all(
      files
        .filter((f) => f.endsWith('.jsonl'))
        .map(async (f) => {
          const fp = path.join(dir, f);
          const stat = await fs.promises.stat(fp);
          return {
            file: f,
            id: f.replace(/\.jsonl$/, ''),
            mtime: stat.mtimeMs,
            size: stat.size,
          };
        })
    );
    return sessions.sort((a, b) => b.mtime - a.mtime);
  } catch (e) {
    return [];
  }
});

ipcMain.handle('read-session', async (_, projectId, sessionFile) => {
  try {
    const filePath = path.join(CLAUDE_PROJECTS_DIR, projectId, sessionFile);
    const content = await fs.promises.readFile(filePath, 'utf8');
    const lines = content.split('\n').filter(Boolean);
    const events = [];
    for (const line of lines) {
      try {
        events.push(JSON.parse(line));
      } catch {
        // skip malformed lines
      }
    }
    return events;
  } catch (e) {
    return [];
  }
});

ipcMain.handle('git-status', async (_, cwd) => {
  return new Promise((resolve) => {
    if (!cwd) return resolve({ ok: false, error: 'no cwd' });
    execFile(
      'git',
      ['status', '--short', '--branch'],
      { cwd, timeout: 5000 },
      (err, stdout, stderr) => {
        if (err) return resolve({ ok: false, error: stderr || err.message });
        resolve({ ok: true, output: stdout });
      }
    );
  });
});

ipcMain.handle('git-log', async (_, cwd) => {
  return new Promise((resolve) => {
    if (!cwd) return resolve({ ok: false, error: 'no cwd' });
    execFile(
      'git',
      ['log', '--oneline', '-10'],
      { cwd, timeout: 5000 },
      (err, stdout, stderr) => {
        if (err) return resolve({ ok: false, error: stderr || err.message });
        resolve({ ok: true, output: stdout });
      }
    );
  });
});

ipcMain.handle('pick-directory', async () => {
  const result = await dialog.showOpenDialog(mainWindow, {
    properties: ['openDirectory'],
  });
  if (result.canceled || result.filePaths.length === 0) return null;
  return result.filePaths[0];
});
