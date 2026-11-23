import { useState, type ReactNode } from 'react'
import type { User } from '../types/dashboard'
import { Icon } from './Icon'

type Props = {
  user: User | null
  active: string
  children: ReactNode
  onHome: () => void
  onLogout: () => void
  onSuperadminStatus: () => void
  onSuperadminLogs: () => void
  showHeader?: boolean
}

export function DashboardTemplate({ user, active, children, onHome, onLogout, onSuperadminStatus, onSuperadminLogs, showHeader = true }: Props) {
  const [superadminMenuOpen, setSuperadminMenuOpen] = useState(false)
  return <div className="app-shell">
    {showHeader && <header className="topbar">
      <a className="brand" href="/home" onClick={event => { event.preventDefault(); onHome() }}>
        <span className="brand-mark"><Icon name="discord" size={23}/></span>
        <span>guild<span className="brand-soft">desk</span><small>SERVER CONTROL CENTER</small></span>
      </a>
      <nav className="top-nav">
        <button className={active === 'home' ? 'nav-link active' : 'nav-link'} onClick={onHome}><Icon name="grid" size={17}/> My servers</button>
        {user?.is_superadmin && <div className="superadmin-nav">
          <button type="button" className={`nav-link superadmin-trigger ${active.startsWith('superadmin-') ? 'active' : ''}`} aria-haspopup="menu" aria-expanded={superadminMenuOpen} onClick={() => setSuperadminMenuOpen(open => !open)}>
            <Icon name="shield" size={17}/> Superadmin <span className="menu-caret"/>
          </button>
          {superadminMenuOpen && <div className="superadmin-dropdown" role="menu">
            <button type="button" role="menuitem" className={active === 'superadmin-status' ? 'selected' : ''} onClick={() => { setSuperadminMenuOpen(false); onSuperadminStatus() }}>Process status</button>
            <button type="button" role="menuitem" className={active === 'superadmin-logs' ? 'selected' : ''} onClick={() => { setSuperadminMenuOpen(false); onSuperadminLogs() }}>Bot logs</button>
          </div>}
        </div>}
      </nav>
      <div className="profile-area">{user ? <><span className="profile-name">{user.username}</span><span className="avatar">{user.avatar ? <img src={`https://cdn.discordapp.com/avatars/${user.id}/${user.avatar}.png?size=64`} alt=""/> : user.username.slice(0, 1).toUpperCase()}</span><button className="quiet-button" onClick={onLogout}>Sign out</button></> : <span className="secure-label"><Icon name="lock" size={14}/> Secure login</span>}</div>
    </header>}
    <main className="page-content">{children}</main>
    <footer className="footer"><span>Guilddesk <span className="footer-dot">·</span> Server management <span className="footer-dot">·</span> v{__DASHBOARD_VERSION__}</span><span className="footer-status"><i/> All systems operational</span><span className="footer-right">Your server, your settings.</span></footer>
  </div>
}
