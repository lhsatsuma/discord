import { useCallback, useEffect, useLayoutEffect, useRef, useState } from 'react'
import './App.css'
import { DashboardTemplate } from './components/DashboardTemplate'
import { ApiError, api } from './lib/api'
import { CallbackPage } from './pages/CallbackPage'
import { HomePage } from './pages/HomePage'
import { LoginPage } from './pages/LoginPage'
import { ServerOverviewPage } from './pages/ServerOverviewPage'
import { AutoModerationPage } from './pages/settings/AutoModerationPage'
import { ChannelRulesPage } from './pages/settings/ChannelRulesPage'
import { MemeSettingsPage } from './pages/settings/MemeSettingsPage'
import { VoiceUpdatesPage } from './pages/settings/VoiceUpdatesPage'
import { WelcomeMessagePage } from './pages/settings/WelcomeMessagePage'
import { blankConfig, type Channel, type Config, type Page, type Server, type SettingGroup, type User } from './types/dashboard'

const TOKEN_KEY = 'guilddesk.jwt'
const PROFILE_KEY = 'guilddesk.user'

function readStoredUser(): User | null {
  const serialized = sessionStorage.getItem(PROFILE_KEY)
  if (!serialized) return null
  try {
    const user = JSON.parse(serialized) as Partial<User>
    return typeof user.id === 'string' && typeof user.username === 'string'
      ? { id: user.id, username: user.username, avatar: typeof user.avatar === 'string' ? user.avatar : null }
      : null
  } catch {
    sessionStorage.removeItem(PROFILE_KEY)
    return null
  }
}

function App() {
  const [path, setPath] = useState(window.location.pathname)
  const [token, setToken] = useState(() => sessionStorage.getItem(TOKEN_KEY) || '')
  const [user, setUser] = useState<User | null>(() => readStoredUser())
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
  const loadedServersToken = useRef('')
  const loadedConfigServerId = useRef('')
  const serverRoute = path.match(/^\/servers\/(\d+)(?:\/(autoban|memes|channels|voice|welcome))?\/?$/)
  const legacyServerRoute = path.match(/^\/servers\/config\/(\d+)\/?$/)
  const serverId = serverRoute?.[1] || legacyServerRoute?.[1] || ''
  const page: Page = path === '/auth/callback' ? 'callback'
    : path === '/home' ? 'home'
      : serverRoute ? (serverRoute[2] as SettingGroup | undefined) || 'server'
        : 'login'

  const navigate = useCallback((to: string) => {
    window.history.pushState({}, '', to)
    setPath(to)
    if (!to.startsWith('/servers/')) setLoading(false)
    setError('')
    setNotice('')
  }, [])

  const expireSession = useCallback(() => {
    sessionStorage.removeItem(TOKEN_KEY)
    sessionStorage.removeItem(PROFILE_KEY)
    loadedServersToken.current = ''
    loadedConfigServerId.current = ''
    setToken('')
    setUser(null)
    setServers([])
    window.history.replaceState({}, '', '/login')
    setPath('/login')
    setError('Your session expired. Please sign in with Discord again.')
  }, [])

  useEffect(() => {
    const pop = () => setPath(window.location.pathname)
    window.addEventListener('popstate', pop)
    return () => window.removeEventListener('popstate', pop)
  }, [])

  useLayoutEffect(() => {
    // Discord must be able to return to this public route to finish OAuth login.
    if (path === '/auth/callback') return

    if (legacyServerRoute) {
      window.history.replaceState({}, '', `/servers/${legacyServerRoute[1]}`)
      setPath(`/servers/${legacyServerRoute[1]}`)
      return
    }

    if (path === '/login') {
      if (token) {
        window.history.replaceState({}, '', '/home')
        setPath('/home')
      }
      return
    }

    if (!token) {
      sessionStorage.removeItem(TOKEN_KEY)
      sessionStorage.removeItem(PROFILE_KEY)
      window.history.replaceState({}, '', '/login')
      setPath('/login')
      setError('Sign in with Discord to access the dashboard.')
      setUser(null)
      setServers([])
      setServer(null)
    }
  }, [path, token])

  useEffect(() => {
    if (path !== '/auth/callback' || callbackProcessed.current) return
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
      sessionStorage.removeItem(PROFILE_KEY)
      setUser(null)
      window.history.replaceState({}, '', '/home')
      queueMicrotask(() => { setToken(receivedToken); setPath('/home') })
      return
    }

    if (authorizationCode && authorizationState) {
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
        return response.json() as Promise<{ token: string; user: User }>
      }).then(result => {
        sessionStorage.setItem(TOKEN_KEY, result.token)
        sessionStorage.setItem(PROFILE_KEY, JSON.stringify(result.user))
        setUser(result.user)
        window.history.replaceState({}, '', '/home')
        setToken(result.token)
        setPath('/home')
      }).catch(reason => {
        console.warn('Discord login callback failed.', reason)
        setError(reason instanceof Error ? reason.message : 'Discord login could not be completed. Please try again.')
        window.history.replaceState({}, '', '/login')
        setPath('/login')
      })
      return
    }

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
  }, [path])

  useEffect(() => {
    const oauthError = new URLSearchParams(window.location.search).get('error')
    if (!oauthError) return
    const messages: Record<string, string> = {
      oauth_state: 'Your login session expired. Please try again.',
      oauth_denied: 'Discord authorization was cancelled.',
      oauth_failed: 'Discord could not complete the login. Please try again.',
      oauth_unavailable: 'Discord login is not configured yet.',
    }
    window.history.replaceState({}, '', '/login')
    queueMicrotask(() => { setError(messages[oauthError] || 'Login failed. Please try again.'); setPath('/login') })
  }, [path])

  useEffect(() => {
    if (!token || user) return
    let active = true
    api<{ user: User }>('/me', token)
      .then(profile => {
        if (active) {
          sessionStorage.setItem(PROFILE_KEY, JSON.stringify(profile.user))
          setUser(profile.user)
        }
      })
      .catch(reason => {
        if (!active) return
        console.error('Could not load the dashboard profile.', reason)
        if (reason instanceof ApiError && reason.status === 401) {
          expireSession()
        } else {
          setError(reason instanceof Error ? reason.message : 'Could not connect to the dashboard.')
        }
      })
    return () => { active = false }
  }, [token, user, expireSession])

  useEffect(() => {
    if (page !== 'home' || !token || loadedServersToken.current === token) return
    let active = true
    queueMicrotask(() => { if (active) setLoading(true) })
    api<{ servers: Server[] }>('/servers', token)
      .then(result => {
        if (active) {
          setServers(result.servers)
          loadedServersToken.current = token
        }
      })
      .catch(reason => {
        if (!active) return
        console.error('Could not load configured servers.', reason)
        if (reason instanceof ApiError && reason.status === 401) expireSession()
        else setError(reason instanceof Error ? reason.message : 'Could not load your servers.')
      })
      .finally(() => { if (active) setLoading(false) })
    return () => { active = false }
  }, [page, token, expireSession])

  useEffect(() => {
    if (!serverRoute || !token || !serverId) return
    if (loadedConfigServerId.current === serverId) return
    let active = true
    queueMicrotask(() => { if (active) setLoading(true) })
    api<{ server: Server; config: Config; channels: Channel[] }>(`/servers/${serverId}/config`, token)
      .then(result => {
        if (active) {
          setServer(result.server)
          setConfig(result.config)
          setSubredditText(result.config.subreddits_memes.join(', '))
          setChannels(result.channels)
          loadedConfigServerId.current = serverId
        }
      })
      .catch(reason => {
        if (active) {
          console.error('Could not load server settings.', reason)
          if (reason instanceof ApiError && reason.status === 401) expireSession()
          else setError(reason instanceof Error ? reason.message : 'Could not load server settings.')
        }
      })
      .finally(() => { if (active) setLoading(false) })
    return () => { active = false }
  }, [page, token, serverId, path, expireSession])

  const logout = async () => {
    try { if (token) await api('/logout', token, { method: 'POST' }) }
    catch (reason) { console.warn('Could not end dashboard session cleanly.', reason) }
    sessionStorage.removeItem(TOKEN_KEY)
    sessionStorage.removeItem(PROFILE_KEY)
    loadedServersToken.current = ''
    loadedConfigServerId.current = ''
    setToken('')
    setUser(null)
    setServers([])
    navigate('/login')
  }

  const save = async () => {
    if (!token || !serverId) return
    setSaving(true)
    setError('')
    setSaveError('')
    setNotice('')
    try {
      const subreddits = subredditText.split(/[\r\n,]/).map(value => value.trim().replace(/^\/?r\//i, '')).filter(Boolean)
      const availableChannelIds = new Set(channels.map(channel => channel.id))
      const adminChannels = config.admin_channels.filter(id => availableChannelIds.has(id))
      const forbiddenChannels = config.forbidden_channels.filter(id => availableChannelIds.has(id))
      await api(`/servers/${serverId}/config`, token, {
        method: 'PUT',
        body: JSON.stringify({ ...config, subreddits_memes: subreddits, admin_channels: adminChannels, forbidden_channels: forbiddenChannels }),
      })
      setConfig(current => ({ ...current, admin_channels: adminChannels, forbidden_channels: forbiddenChannels }))
      setNotice('Your server settings have been saved.')
    } catch (reason) {
      console.warn('Could not save server settings.', reason)
      const message = reason instanceof Error ? reason.message : 'Could not save settings.'
      setError(message)
      setSaveError(message)
    } finally {
      setSaving(false)
    }
  }

  const setValue = <K extends keyof Config>(key: K, value: Config[K]) => {
    setNotice('')
    setSaveError('')
    setConfig(current => ({ ...current, [key]: value }))
  }

  const openServer = (selectedServer: Server) => {
    setServer(selectedServer)
    navigate(`/servers/${selectedServer.id}`)
  }

  const openGroup = (group: SettingGroup) => navigate(`/servers/${serverId}/${group}`)
  const settingsProps = {
    server, config, loading, saving, error, saveError, notice,
    onBack: () => navigate(`/servers/${serverId}`), onDismissError: () => setError(''),
    onConfigChange: setValue, onSave: save,
  }

  if (page === 'callback') return <CallbackPage/>

  return <DashboardTemplate
    user={user}
    active={page}
    showHeader={page !== 'login'}
    onHome={() => navigate(token ? '/home' : '/login')}
    onLogout={logout}
  >
    {page === 'login' && <LoginPage error={!token ? error : ''}/>}
    {page === 'home' && <HomePage
      user={user}
      servers={servers}
      loading={loading}
      error={error}
      onDismissError={() => setError('')}
      onOpenServer={openServer}
    />}
    {page === 'server' && (loading
      ? <div className="loading-state"><span className="spinner"/> Loading server settings…</div>
      : <ServerOverviewPage server={server} error={error} onDismissError={() => setError('')} onBack={() => navigate('/home')} onOpenGroup={openGroup}/>)}
    {page === 'autoban' && <AutoModerationPage {...settingsProps}/>}
    {page === 'memes' && <MemeSettingsPage {...settingsProps} subredditText={subredditText} onSubredditTextChange={value => { setSubredditText(value); setNotice(''); setSaveError('') }}/>}
    {page === 'channels' && <ChannelRulesPage {...settingsProps} channels={channels}/>}
    {page === 'voice' && <VoiceUpdatesPage {...settingsProps}/>}
    {page === 'welcome' && <WelcomeMessagePage {...settingsProps} channels={channels}/>}
  </DashboardTemplate>
}

export default App
