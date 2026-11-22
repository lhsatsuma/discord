import type { Server, User } from '../types/dashboard'
import { ErrorAlert } from '../components/ErrorAlert'
import { Icon } from '../components/Icon'
import { PageHeading } from '../components/PageHeading'

type Props = {
  user: User | null
  servers: Server[]
  loading: boolean
  error: string
  onDismissError: () => void
  onOpenServer: (server: Server) => void
}

export function HomePage({ user, servers, loading, error, onDismissError, onOpenServer }: Props) {
  return <>
    <PageHeading eyebrow="YOUR WORKSPACE" title={<>Good to see you, <span>{user?.username?.split(' ')[0] || 'admin'}.</span></>} description="Choose a server to get started with its settings."/>
    <ErrorAlert message={error} onDismiss={onDismissError} className="page-alert"/>
    {loading ? <div className="loading-state"><span className="spinner"/> Loading your dashboard…</div> : <>
      <div className="section-topline"><span className="section-title">Servers you manage <span>{servers.length.toString().padStart(2, '0')}</span></span><span className="section-hint"><Icon name="shield" size={14}/> Verified with Discord</span></div>
      {servers.length ? <div className="server-grid">{servers.map((server, index) => <button className="server-card" key={server.id} onClick={() => onOpenServer(server)}>
        <span className={`server-avatar tint-${index % 5}`}>{server.icon ? <img src={`https://cdn.discordapp.com/icons/${server.id}/${server.icon}.png?size=96`} alt="" loading="lazy" decoding="async"/> : server.name.slice(0, 1).toUpperCase()}</span>
        <span className="server-details"><b>{server.name}</b><small>Manage server settings</small></span>
        <span className="server-arrow"><Icon name="arrow" size={17}/></span>
      </button>)}</div> : <div className="empty-state"><span className="empty-icon"><Icon name="grid" size={24}/></span><h3>No configured servers yet</h3><p>Servers where you have Manage Server access and the bot is set up will appear here.</p></div>}
      <div className="permission-note"><Icon name="lock" size={15}/><span>Only servers where Discord confirms your admin access are shown.</span></div>
    </>}
  </>
}
