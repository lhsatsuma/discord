import type { ReactNode } from 'react'
import type { User } from '../types/dashboard'
import { Icon } from './Icon'

type Props = {
  user: User | null
  active: string
  children: ReactNode
  onHome: () => void
  onLogout: () => void
  showHeader?: boolean
}

export function DashboardTemplate({ user, active, children, onHome, onLogout, showHeader = true }: Props) {
  return <div className="app-shell">
    {showHeader && <header className="topbar">
      <a className="brand" href="/home" onClick={event => { event.preventDefault(); onHome() }}>
        <span className="brand-mark"><Icon name="discord" size={23}/></span>
        <span>guild<span className="brand-soft">desk</span><small>SERVER CONTROL CENTER</small></span>
      </a>
      <nav className="top-nav"><button className={active === 'home' ? 'nav-link active' : 'nav-link'} onClick={onHome}><Icon name="grid" size={17}/> My servers</button></nav>
      <div className="profile-area">{user ? <><span className="profile-name">{user.username}</span><span className="avatar">{user.avatar ? <img src={`https://cdn.discordapp.com/avatars/${user.id}/${user.avatar}.png?size=64`} alt=""/> : user.username.slice(0, 1).toUpperCase()}</span><button className="quiet-button" onClick={onLogout}>Sign out</button></> : <span className="secure-label"><Icon name="lock" size={14}/> Secure login</span>}</div>
    </header>}
    <main className="page-content">{children}</main>
    <footer className="footer"><span>Guilddesk <span className="footer-dot">·</span> Server management</span><span className="footer-status"><i/> All systems operational</span><span className="footer-right">Your server, your settings.</span></footer>
  </div>
}
