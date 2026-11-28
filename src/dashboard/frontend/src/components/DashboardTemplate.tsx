import { useEffect, useState, type ReactNode } from 'react'
import type { User } from '../types/dashboard'
import { Icon } from './Icon'
import { getDashboardPublicLinks, type DashboardPublicLinks } from '../lib/publicConfig'

type Props = {
  user: User | null
  active: string
  children: ReactNode
  onHome: () => void
  onLogout: () => void
  onTriviaLibrary: () => void
  onSuperadminStatus: () => void
  onSuperadminLogs: () => void
  onSuperadminTrivia: () => void
  showHeader?: boolean
}

export function DashboardTemplate({ user, active, children, onHome, onLogout, onTriviaLibrary, onSuperadminStatus, onSuperadminLogs, onSuperadminTrivia, showHeader = true }: Props) {
  const [superadminMenuOpen, setSuperadminMenuOpen] = useState(false)
  const [publicLinks, setPublicLinks] = useState<DashboardPublicLinks>({ bot_invite: null, support_invite: null })

  useEffect(() => {
    let active = true
    getDashboardPublicLinks()
      .then(links => { if (active) setPublicLinks(links) })
      .catch(error => console.warn('Could not load dashboard invite links.', error))
    return () => { active = false }
  }, [])
  return <div className="app-shell">
    {showHeader && <header className="topbar">
      <a className="brand" href="/home" onClick={event => { event.preventDefault(); onHome() }}>
        <span className="brand-mark"><Icon name="discord" size={23}/></span>
        <span>guild<span className="brand-soft">desk</span><small>SERVER CONTROL CENTER</small></span>
      </a>
      <nav className="top-nav">
        <button className={active === 'home' ? 'nav-link active' : 'nav-link'} onClick={onHome}><Icon name="grid" size={17}/> My servers</button>
        {user && <button className={active === 'trivia-library' ? 'nav-link active' : 'nav-link'} onClick={onTriviaLibrary}>Trivia library</button>}
        {user?.is_superadmin && <div className="superadmin-nav">
          <button type="button" className={`nav-link superadmin-trigger ${active.startsWith('superadmin-') ? 'active' : ''}`} aria-haspopup="menu" aria-expanded={superadminMenuOpen} onClick={() => setSuperadminMenuOpen(open => !open)}>
            <Icon name="shield" size={17}/> Superadmin <span className="menu-caret"/>
          </button>
          {superadminMenuOpen && <div className="superadmin-dropdown" role="menu">
            <button type="button" role="menuitem" className={active === 'superadmin-status' ? 'selected' : ''} onClick={() => { setSuperadminMenuOpen(false); onSuperadminStatus() }}>Process status</button>
            <button type="button" role="menuitem" className={active === 'superadmin-logs' ? 'selected' : ''} onClick={() => { setSuperadminMenuOpen(false); onSuperadminLogs() }}>Bot logs</button>
            <button type="button" role="menuitem" className={active === 'superadmin-trivia' ? 'selected' : ''} onClick={() => { setSuperadminMenuOpen(false); onSuperadminTrivia() }}>Trivia review</button>
          </div>}
        </div>}
      </nav>
      <div className="profile-area">{user ? <><span className="profile-name">{user.username}</span><span className="avatar">{user.avatar ? <img src={`https://cdn.discordapp.com/avatars/${user.id}/${user.avatar}.png?size=64`} alt=""/> : user.username.slice(0, 1).toUpperCase()}</span><button className="quiet-button" onClick={onLogout}>Sign out</button></> : <span className="secure-label"><Icon name="lock" size={14}/> Secure login</span>}</div>
    </header>}
    <main className="page-content">{children}</main>
    <footer className="footer"><span>Guilddesk <span className="footer-dot">.</span> v{__DASHBOARD_VERSION__}</span><nav className="footer-legal" aria-label="Information"><a href="/privacy-policy">Privacy Policy</a><a href="/terms-of-service">Terms of Service</a>{publicLinks.bot_invite && <a href={publicLinks.bot_invite} target="_blank" rel="noreferrer">Invite bot</a>}{publicLinks.support_invite && <a href={publicLinks.support_invite} target="_blank" rel="noreferrer">Support server</a>}</nav><span className="footer-right">Your server, your settings.</span></footer>
  </div>
}
