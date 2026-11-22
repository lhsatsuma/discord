import { useCallback, useEffect, useMemo, useRef, useState, type ReactNode } from 'react'
import './App.css'

// Use same-origin paths so the browser never needs the Laravel API's origin.
const API = ''
const TOKEN_KEY = 'guilddesk.jwt'

type User = { id: string; username: string; avatar: string | null }
type Server = { id: string; name: string; icon: string | null }
type Config = {
  reddit_odd_memes: number
  subreddits_memes: string[]
  autoban_del_period: number
  autoban_punishment: 'ban' | 'mute'
  autoban_mute_days: number
  send_voice_update: boolean
  welcome_message_active: boolean
  welcome_channel_id: string | null
  welcome_message: string
}
type Channel = { id: string; name: string }
type Page = 'login' | 'home' | 'config' | 'callback'

const blankConfig: Config = {
  reddit_odd_memes: 5, subreddits_memes: [], autoban_del_period: 60,
  autoban_punishment: 'ban', autoban_mute_days: 7, send_voice_update: false,
  welcome_message_active: false, welcome_channel_id: null, welcome_message: '',
}

async function api<T>(path: string, token: string, init?: RequestInit): Promise<T> {
  const response = await fetch(`${API}/api${path}`, {
    ...init,
    headers: { 'Content-Type': 'application/json', Authorization: `Bearer ${token}`, ...init?.headers },
  })
  if (!response.ok) {
    const payload = await response.json().catch(() => ({})) as { message?: string; errors?: Record<string, string[]> }
    const detail = payload.errors ? Object.values(payload.errors).flat()[0] : payload.message
    throw new Error(detail || `Request failed (${response.status})`)
  }
  return response.json() as Promise<T>
}

function Icon({ name, size = 20 }: { name: string; size?: number }) {
  const paths: Record<string, ReactNode> = {
    grid: <><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></>,
    shield: <><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></>,
    spark: <><path d="m12 3 1.9 5.8L20 11l-6.1 2.2L12 19l-2-5.8L4 11l6-2.2L12 3Z"/><path d="m19 14 1 2.5 2.5 1-2.5 1L19 21l-1-2.5-2.5-1 2.5-1L19 14Z"/></>,
    voice: <><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3m-4 0h8"/></>,
    hello: <><path d="M21 11.5a8.4 8.4 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.4 8.4 0 0 1-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.4 8.4 0 0 1 3.8-.9h.5a8.5 8.5 0 0 1 8 8v.5Z"/><path d="M8 12h.01M12 12h.01M16 12h.01"/></>,
    arrow: <><path d="M7 17 17 7M7 7h10v10"/></>,
    back: <><path d="m15 18-6-6 6-6"/><path d="M9 12h12"/></>,
    check: <path d="m5 12 4 4L19 6"/>,
    lock: <><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></>,
    discord: <><path d="M18.9 5a16.5 16.5 0 0 0-4.1-1.3l-.5 1a15.4 15.4 0 0 0-4.6 0l-.5-1A16.5 16.5 0 0 0 5.1 5C2.5 8.9 1.8 12.7 2.2 16.5a16.6 16.6 0 0 0 5 2.5l1.1-1.8-1.7-.8.4-.3a11.8 11.8 0 0 0 10 0l.4.3-1.7.8 1.1 1.8a16.6 16.6 0 0 0 5-2.5c.5-4.4-.8-8.1-3-11.5ZM8.8 14.2c-1 0-1.8-.9-1.8-2s.8-2 1.8-2 1.8.9 1.8 2-.8 2-1.8 2Zm6.4 0c-1 0-1.8-.9-1.8-2s.8-2 1.8-2 1.8.9 1.8 2-.8 2-1.8 2Z"/></>,
  }
  return <svg width={size} height={size} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">{paths[name] || paths.grid}</svg>
}

function DashboardTemplate({ user, active, children, onHome, onLogout, showHeader = true }: {
  user: User | null; active: string; children: ReactNode; onHome: () => void; onLogout: () => void; showHeader?: boolean
}) {
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

function CallbackLoading() {
  return <main className="callback-screen" role="status" aria-live="polite">
    <div className="callback-loading-card">
      <span className="brand-mark"><Icon name="discord" size={25}/></span>
      <span className="callback-spinner" aria-hidden="true"/>
      <h1>Connecting your Discord account</h1>
      <p>Verifying your access and preparing your dashboard…</p>
    </div>
  </main>
}

function App() {
  const [path, setPath] = useState(window.location.pathname)
  const [token, setToken] = useState(() => sessionStorage.getItem(TOKEN_KEY) || '')
  const [user, setUser] = useState<User | null>(null)
  const [servers, setServers] = useState<Server[]>([])
  const [server, setServer] = useState<Server | null>(null)
  const [config, setConfig] = useState<Config>(blankConfig)
  const [subredditText, setSubredditText] = useState('')
  const [channels, setChannels] = useState<Channel[]>([])
  const [loading, setLoading] = useState(false)
  const [saving, setSaving] = useState(false)
  const [error, setError] = useState('')
  const [saveError, setSaveError] = useState('')
  const [notice, setNotice] = useState('')
  const callbackProcessed = useRef(false)
  const page: Page = path === '/auth/callback' ? 'callback' : path.startsWith('/servers/config/') ? 'config' : path === '/home' ? 'home' : 'login'

  const navigate = useCallback((to: string) => {
    window.history.pushState({}, '', to)
    setPath(to)
    if (!to.startsWith('/servers/config/')) setLoading(false)
    setError('')
    setNotice('')
  }, [])

  useEffect(() => {
    const pop = () => setPath(window.location.pathname)
    window.addEventListener('popstate', pop)
    return () => window.removeEventListener('popstate', pop)
  }, [])

  useEffect(() => {
    if (path !== '/auth/callback') return
    if (callbackProcessed.current) return
    callbackProcessed.current = true
    const hash = new URLSearchParams(window.location.hash.slice(1))
    const query = new URLSearchParams(window.location.search)
    const receivedToken = hash.get('token')
    const authorizationCode = query.get('code') || hash.get('code')
    const authorizationState = query.get('state') || hash.get('state')
    const returnedError = query.get('error') || hash.get('error')
    const errorDescription = query.get('error_description') || hash.get('error_description')
    if (receivedToken) {
      sessionStorage.setItem(TOKEN_KEY, receivedToken)
      window.history.replaceState({}, '', '/home')
      queueMicrotask(() => { setToken(receivedToken); setPath('/home') })
    } else if (authorizationCode && authorizationState) {
      window.history.replaceState({}, '', '/auth/callback')
      fetch('/api/auth/exchange', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ code: authorizationCode, state: authorizationState }),
      }).then(async response => {
        if (!response.ok) {
          const payload = await response.json().catch(() => ({})) as { message?: string }
          throw new Error(payload.message || 'Discord login could not be completed.')
        }
        return response.json() as Promise<{ token: string }>
      }).then(result => {
        sessionStorage.setItem(TOKEN_KEY, result.token)
        window.history.replaceState({}, '', '/home')
        setToken(result.token)
        setPath('/home')
      }).catch(reason => {
        console.warn('Discord login callback failed.', reason)
        setError(reason instanceof Error ? reason.message : 'Discord login could not be completed. Please try again.')
        window.history.replaceState({}, '', '/login')
        setPath('/login')
      })
    } else {
      const diagnostic = {
        error: (returnedError || 'missing_oauth_parameters').slice(0, 100),
        error_description: errorDescription?.slice(0, 500) || null,
        has_code: Boolean(authorizationCode),
        has_state: Boolean(authorizationState),
        path: window.location.pathname,
        query_keys: [...query.keys()],
        fragment_keys: [...hash.keys()],
      }
      console.error('Discord OAuth callback did not include a usable authorization code.', diagnostic)
      fetch('/api/auth/callback-failure', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(diagnostic),
      }).catch(reason => console.error('Could not send the OAuth callback diagnostic to Laravel.', reason))
      const callbackMessage = returnedError === 'access_denied'
        ? 'You cancelled Discord authorization.'
        : errorDescription || (returnedError
          ? `Discord returned “${returnedError}”. Check the app’s OAuth settings.`
          : 'The Discord callback arrived without an authorization code or state.')
      window.history.replaceState({}, '', '/login')
      queueMicrotask(() => { setError(callbackMessage); setPath('/login') })
    }
  }, [path])

  useEffect(() => {
    const oauthError = new URLSearchParams(window.location.search).get('error')
    if (oauthError) {
      const messages: Record<string, string> = { oauth_state: 'Your login session expired. Please try again.', oauth_denied: 'Discord authorization was cancelled.', oauth_failed: 'Discord could not complete the login. Please try again.', oauth_unavailable: 'Discord login is not configured yet.' }
      window.history.replaceState({}, '', '/login')
      queueMicrotask(() => { setError(messages[oauthError] || 'Login failed. Please try again.'); setPath('/login') })
    }
  }, [path])

  useEffect(() => {
    if (!token) return
    let active = true
    queueMicrotask(() => { if (active) setLoading(true) })
    Promise.all([api<{ user: User }>('/me', token), api<{ servers: Server[] }>('/servers', token)])
      .then(([profile, result]) => { if (active) { setUser(profile.user); setServers(result.servers) } })
      .catch(reason => { if (active) { console.error('Could not load the dashboard session.', reason); setError(reason instanceof Error ? reason.message : 'Could not connect to the dashboard.'); sessionStorage.removeItem(TOKEN_KEY); setToken(''); setUser(null) } })
      .finally(() => { if (active) setLoading(false) })
    return () => { active = false }
  }, [token])

  const serverId = useMemo(() => path.split('/')[3] || '', [path])
  useEffect(() => {
    if (page !== 'config' || !token || !serverId) return
    let active = true
    queueMicrotask(() => { if (active) setLoading(true) })
    api<{ server: Server; config: Config; channels: Channel[] }>(`/servers/${serverId}/config`, token)
      .then(result => { if (active) { setServer(result.server); setConfig(result.config); setSubredditText(result.config.subreddits_memes.join(', ')); setChannels(result.channels) } })
      .catch(reason => { if (active) { console.error('Could not load server settings.', reason); setError(reason instanceof Error ? reason.message : 'Could not load server settings.') } })
      .finally(() => { if (active) setLoading(false) })
    return () => { active = false }
  }, [page, token, serverId])

  const logout = async () => {
    try { if (token) await api('/logout', token, { method: 'POST' }) } catch (reason) { console.warn('Could not end dashboard session cleanly.', reason) }
    sessionStorage.removeItem(TOKEN_KEY); setToken(''); setUser(null); setServers([]); navigate('/login')
  }

  const save = async () => {
    if (!token || !serverId) return
    setSaving(true); setError(''); setSaveError(''); setNotice('')
    try {
      const subreddits = subredditText.split(/[\r\n,]/).map(value => value.trim().replace(/^\/?r\//i, '')).filter(Boolean)
      await api(`/servers/${serverId}/config`, token, { method: 'PUT', body: JSON.stringify({ ...config, subreddits_memes: subreddits }) })
      setNotice('Your server settings have been saved.')
    } catch (reason) {
      console.warn('Could not save server settings.', reason)
      const message = reason instanceof Error ? reason.message : 'Could not save settings.'
      setError(message)
      setSaveError(message)
    }
    finally { setSaving(false) }
  }

  const setValue = <K extends keyof Config>(key: K, value: Config[K]) => {
    setNotice('')
    setSaveError('')
    setConfig(current => ({ ...current, [key]: value }))
  }
  const openServer = (item: Server) => { setServer(item); setLoading(true); navigate(`/servers/config/${item.id}`) }
  const oauthError = !token ? error : ''

  if (page === 'callback') return <CallbackLoading />

  return <DashboardTemplate user={user} active={page} showHeader={page !== 'login'} onHome={() => navigate(token ? '/home' : '/login')} onLogout={logout}>
    {page === 'login' ? <section className="login-layout">
      <div className="login-copy"><div className="eyebrow"><span className="eyebrow-line"/>THE CONTROL ROOM FOR YOUR COMMUNITY</div><h1>Your server.<br/><span>Under control.</span></h1><p className="login-description">Manage the settings that keep your community running, all in one calm place.</p><div className="feature-list"><div><span className="feature-icon"><Icon name="shield"/></span><span><b>Made for admins</b><small>Only server managers can make changes.</small></span></div><div><span className="feature-icon"><Icon name="spark"/></span><span><b>Changes take effect fast</b><small>Your bot picks up saved settings right away.</small></span></div></div></div>
      <div className="login-card"><div className="login-card-icon"><Icon name="discord" size={27}/></div><span className="eyebrow">WELCOME TO GUILDDESK</span><h2>Sign in to continue</h2><p>Use your Discord account to manage the servers where you have admin access.</p>{oauthError && <div className="alert error">{oauthError}</div>}<a className="discord-button" href="/api/auth/discord"><Icon name="discord" size={20}/> Continue with Discord <Icon name="arrow" size={17}/></a><div className="trust-note"><Icon name="lock" size={14}/> We never ask for your Discord password</div></div>
      <div className="login-stamp"><span>01</span><i/> PRIVATE BY DESIGN</div>
    </section> : <>
      <div className="page-heading"><div><div className="eyebrow"><span className="eyebrow-line"/>{page === 'home' ? 'YOUR WORKSPACE' : 'SERVER CONFIGURATION'}</div><h1>{page === 'home' ? <>Good to see you, <span>{user?.username?.split(' ')[0] || 'admin'}.</span></> : <>{server?.name || 'Server settings'}<span className="heading-period">.</span></>}</h1><p>{page === 'home' ? 'Choose a server to get started with its settings.' : 'Fine tune how your bot looks after this community.'}</p></div>{page === 'config' && <button className="back-button" onClick={() => navigate('/home')}><Icon name="back" size={17}/> All servers</button>}</div>
      {error && <div className="alert error page-alert">{error}<button onClick={() => setError('')} aria-label="Dismiss">×</button></div>}
      {loading ? <div className="loading-state"><span className="spinner"/> Loading your dashboard…</div> : page === 'home' ? <>
        <div className="section-topline"><span className="section-title">Servers you manage <span>{servers.length.toString().padStart(2, '0')}</span></span><span className="section-hint"><Icon name="shield" size={14}/> Verified with Discord</span></div>
        {servers.length ? <div className="server-grid">{servers.map((item, index) => <button className="server-card" key={item.id} onClick={() => openServer(item)}><span className={`server-avatar tint-${index % 5}`}>{item.icon ? <img src={`https://cdn.discordapp.com/icons/${item.id}/${item.icon}.png?size=96`} alt=""/> : item.name.slice(0, 1).toUpperCase()}</span><span className="server-details"><b>{item.name}</b><small>Manage server settings</small></span><span className="server-arrow"><Icon name="arrow" size={17}/></span></button>)}</div> : <div className="empty-state"><span className="empty-icon"><Icon name="grid" size={24}/></span><h3>No configured servers yet</h3><p>Servers where you have Manage Server access and the bot is set up will appear here.</p></div>}
        <div className="permission-note"><Icon name="lock" size={15}/><span>Only servers where Discord confirms your admin access are shown.</span></div>
      </> : <>
        {server && <div className="server-crumb"><span className="crumb-avatar">{server.icon ? <img src={`https://cdn.discordapp.com/icons/${server.id}/${server.icon}.png?size=48`} alt=""/> : server.name.slice(0, 1)}</span><span><small>EDITING SETTINGS FOR</small><b>{server.name}</b></span><span className="verified-chip"><Icon name="check" size={13}/> Admin verified</span></div>}
        <div className="settings-layout"><aside className="settings-aside"><span className="aside-label">CONFIGURATION</span><a className="aside-link selected" href="#autoban"><Icon name="shield" size={17}/> Auto moderation</a><a className="aside-link" href="#memes"><Icon name="spark" size={17}/> Meme settings</a><a className="aside-link" href="#voice"><Icon name="voice" size={17}/> Voice updates</a><a className="aside-link" href="#welcome"><Icon name="hello" size={17}/> Welcome message</a><div className="aside-tip"><span className="tip-mark">i</span><p>Changes are applied to the bot as soon as you save.</p></div></aside>
          <div className="settings-main">
            <section className="settings-card" id="autoban"><div className="card-heading"><span className="card-icon coral"><Icon name="shield"/></span><div><h2>Auto moderation</h2><p>Choose how the bot handles repeated message violations.</p></div><span className="card-number">01</span></div><div className="card-fields"><label className="field"><span>Punishment</span><select value={config.autoban_punishment} onChange={e => setValue('autoban_punishment', e.target.value as Config['autoban_punishment'])}><option value="ban">Permanent ban</option><option value="mute">Timeout</option></select><small>Action taken when a member reaches the threshold.</small></label><div className="field-row"><label className="field"><span>Delete message history</span><div className="input-suffix"><input type="number" min="0" max="10080" value={config.autoban_del_period} onChange={e => setValue('autoban_del_period', Number(e.target.value))}/><em>minutes</em></div><small>How much recent history to remove (0–10,080).</small></label><label className="field"><span>Timeout duration</span><div className="input-suffix"><input type="number" min="1" max="28" value={config.autoban_mute_days} onChange={e => setValue('autoban_mute_days', Number(e.target.value))}/><em>days</em></div><small>Used when punishment is set to timeout.</small></label></div></div></section>
            <section className="settings-card" id="memes"><div className="card-heading"><span className="card-icon violet"><Icon name="spark"/></span><div><h2>Meme settings</h2><p>Set the odds and sources for community memes.</p></div><span className="card-number">02</span></div><div className="card-fields"><label className="field"><span>Meme odds</span><div className="input-suffix compact"><input type="number" min="0" max="10" value={config.reddit_odd_memes} onChange={e => setValue('reddit_odd_memes', Number(e.target.value))}/><em>out of 10</em></div><small>Higher odds mean memes appear more often.</small></label><label className="field"><span>Subreddits</span><textarea rows={3} maxLength={4000} placeholder="memes, wholesomememes, dankmemes" value={subredditText} onChange={e => { setSubredditText(e.target.value); setNotice(''); setSaveError('') }}/><small>Separate subreddit names with commas or new lines. Up to 100 sources.</small></label></div></section>
            <section className="settings-card" id="voice"><div className="card-heading"><span className="card-icon blue"><Icon name="voice"/></span><div><h2>Voice updates</h2><p>Post a message to the admin channel when members join or leave voice.</p></div><span className="card-number">03</span></div><div className="toggle-row"><span><b>Send voice activity updates</b><small>Keep moderators informed about voice channel activity.</small></span><button type="button" role="switch" aria-checked={config.send_voice_update} className={`toggle ${config.send_voice_update ? 'on' : ''}`} onClick={() => setValue('send_voice_update', !config.send_voice_update)}><i/></button></div></section>
            <section className="settings-card" id="welcome"><div className="card-heading"><span className="card-icon green"><Icon name="hello"/></span><div><h2>Welcome message</h2><p>Greet new members with a message in your chosen channel.</p></div><span className="card-number">04</span></div><div className="card-fields"><div className="toggle-row welcome-toggle"><span><b>Enable welcome messages</b><small>Send an automatic greeting when someone joins.</small></span><button type="button" role="switch" aria-checked={config.welcome_message_active} className={`toggle ${config.welcome_message_active ? 'on' : ''}`} onClick={() => setValue('welcome_message_active', !config.welcome_message_active)}><i/></button></div><label className="field"><span>Destination channel</span><select value={config.welcome_channel_id || ''} onChange={e => setValue('welcome_channel_id', e.target.value || null)}><option value="">Choose a text channel</option>{channels.map(channel => <option key={channel.id} value={channel.id}># {channel.name}</option>)}</select></label><label className="field"><span>Message</span><textarea rows={3} maxLength={2000} placeholder={'Welcome, [@user]! We’re glad you’re here.'} value={config.welcome_message} onChange={e => setValue('welcome_message', e.target.value)}/><small>Use <code>[@user]</code> to mention the new member. Maximum 2,000 characters.</small></label></div></section>
            <div className="save-bar"><span><i/> All changes are saved to this server only</span><div className="save-actions">{saveError && <span className="save-feedback save-failed" role="alert">{saveError}</span>}{notice && <span className="save-feedback save-success" role="status"><Icon name="check" size={16}/>{notice}</span>}<button className="save-button" disabled={saving} onClick={save}>{saving ? <><span className="button-spinner"/> Saving…</> : <><Icon name="check" size={17}/> Save changes</>}</button></div></div>
          </div>
        </div>
      </>}
    </>}
  </DashboardTemplate>
}

export default App
