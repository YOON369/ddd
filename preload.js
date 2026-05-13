const { contextBridge, ipcRenderer } = require('electron');

contextBridge.exposeInMainWorld('api', {
  listProjects: () => ipcRenderer.invoke('list-projects'),
  listSessions: (projectId) => ipcRenderer.invoke('list-sessions', projectId),
  readSession: (projectId, sessionFile) =>
    ipcRenderer.invoke('read-session', projectId, sessionFile),
  gitStatus: (cwd) => ipcRenderer.invoke('git-status', cwd),
  gitLog: (cwd) => ipcRenderer.invoke('git-log', cwd),
  pickDirectory: () => ipcRenderer.invoke('pick-directory'),
});
