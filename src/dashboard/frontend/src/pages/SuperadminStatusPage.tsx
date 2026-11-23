import { useCallback, useEffect, useState } from 'react'
import { ErrorAlert } from '../components/ErrorAlert'
import { Icon } from '../components/Icon'
import { PageHeading } from '../components/PageHeading'
import { api } from '../lib/api'

type ProcessStatus = {
  name: 'app' | 'scheduler'
  state: 'online' | 'offline' | 'unknown'
  pid: number | null
  last_heartbeat_at?: string | null
  uptime_seconds?: number | null
  platform?: string | null
  node_version?: string | null
  discord_js_version?: string | null
  app_version?: string | null
  heartbeat_interval?: number | null
}

type StatusResponse = { checked_at: string; processes: { app: ProcessStatus; scheduler: ProcessStatus } }
type Props = { token: string }

function duration(totalSeconds: number | null | undefined) {
  if (totalSeconds == null) return 'Unavailable'
  const days = Math.floor(totalSeconds / 86400)
  const hours = Math.floor((totalSeconds % 86400) / 3600)
  const minutes = Math.floor((totalSeconds % 3600) / 60)
  const seconds = totalSeconds % 60
  return [days ? `${days}d` : '', hours ? `${hours}h` : '', minutes ? `${minutes}m` : '', `${seconds}s`].filter(Boolean).join(' ')
}

export function SuperadminStatusPage({ token }: Props) {
  const [status, setStatus] = useState<StatusResponse | null>(null)
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState('')

  const refresh = useCallback(() => {
    setLoading(true)
    setError('')
    api<StatusResponse>('/superadmin/status', token)
      .then(setStatus)
      .catch(reason => {
        console.error('Could not load bot process status.', reason)
        setError(reason instanceof Error ? reason.message : 'Could not load bot process status.')
      })
      .finally(() => setLoading(false))
  }, [token])

  useEffect(() => { refresh() }, [refresh])

  return <>
    <PageHeading eyebrow="SYSTEM SUPERADMIN" title={<>Process status<span className="heading-period">.</span></>} description="Review the bot application and scheduler processes." action={<button type="button" className="back-button" onClick={refresh}><Icon name="spark" size={16}/> Refresh</button>}/>
    <ErrorAlert message={error} className="page-alert"/>
    {loading && !status ? <div className="loading-state"><span className="spinner"/> Loading process status…</div> : <>
      <div className="section-topline"><span className="section-title">Bot processes</span><span className="section-hint">{status?.checked_at ? `Checked ${new Date(status.checked_at).toLocaleTimeString()}` : ''}</span></div>
      <div className="superadmin-status-grid">{(['app', 'scheduler'] as const).map(name => {
        const process = status?.processes[name]
        return <section className="settings-card process-card" key={name}>
          <div className="process-card-heading"><div><small>DBIKE BOT</small><h2>{name === 'app' ? 'Application' : 'Scheduler'}</h2></div><span className={`process-state ${process?.state || 'unknown'}`}><i/>{process?.state || 'unknown'}</span></div>
          {process ? <div className="process-details">
            <div><span>Uptime</span><b>{process.state === 'online' ? duration(process.uptime_seconds) : 'Offline'}</b></div>
            <div><span>Process ID</span><b>{process.pid ?? 'Unavailable'}</b></div>
            <div><span>Last heartbeat</span><b>{process.last_heartbeat_at ? new Date(process.last_heartbeat_at).toLocaleTimeString() : 'Unavailable'}</b></div>
            <div><span>Platform</span><b>{process.platform || 'Unavailable'}</b></div>
            <div><span>Node.js</span><b>{process.node_version || 'Unavailable'}</b></div>
            <div><span>discord.js</span><b>{process.discord_js_version || 'Unavailable'}</b></div>
            <div><span>Bot version</span><b>{process.app_version || 'Unavailable'}</b></div>
          </div> : <p className="process-empty">Process metadata is not available. Start the bot process to create its PID file.</p>}
        </section>
      })}</div>
    </>}
  </>
}
