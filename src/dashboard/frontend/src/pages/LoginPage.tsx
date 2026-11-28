import { Icon } from '../components/Icon'

export function LoginPage({ error }: { error: string }) {
  return <section className="login-layout">
    <div className="login-copy">
      <div className="eyebrow"><span className="eyebrow-line"/>THE CONTROL ROOM FOR YOUR COMMUNITY</div>
      <h1>Your server.<br/><span>Under control.</span></h1>
      <p className="login-description">Manage the settings that keep your community running, all in one calm place.</p>
      <div className="feature-list">
        <div><span className="feature-icon"><Icon name="shield"/></span><span><b>Made for admins</b><small>Only server managers can make changes.</small></span></div>
        <div><span className="feature-icon"><Icon name="spark"/></span><span><b>Changes take effect fast</b><small>Your bot picks up saved settings right away.</small></span></div>
      </div>
    </div>
    <div className="login-card">
      <div className="login-card-icon"><Icon name="discord" size={27}/></div>
      <span className="eyebrow">WELCOME TO GUILDDESK</span>
      <h2>Sign in to continue</h2>
      <p>Use your Discord account to manage the servers where you have admin access.</p>
      {error && <div className="alert error" role="alert">{error}</div>}
      <a className="discord-button" href="/api/auth/discord"><Icon name="discord" size={20}/> Continue with Discord <Icon name="arrow" size={17}/></a>
      <div className="trust-note"><Icon name="lock" size={14}/> We never ask for your Discord password</div>
      <nav className="login-legal-links" aria-label="Legal information"><a href="/privacy-policy">Privacy Policy</a><a href="/terms-of-service">Terms of Service</a></nav>
    </div>
    <div className="login-stamp"><span>01</span><i/> PRIVATE BY DESIGN</div>
  </section>
}
