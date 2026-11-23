import { useEffect, useState } from 'react'
import { ErrorAlert } from '../components/ErrorAlert'
import { Icon } from '../components/Icon'
import { PageHeading } from '../components/PageHeading'
import { api } from '../lib/api'

type ProcessName = 'app' | 'scheduler'
type LogsResponse = { process: ProcessName; date: string | null; lines: string[]; available: boolean }
type Props = { token: string }

export function SuperadminLogsPage({ token }: Props) {
  const [process, setProcess] = useState<ProcessName>('app')
  const [logs, setLogs] = useState<LogsResponse | null>(null)
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState('')
  const [refreshKey, setRefreshKey] = useState(0)

  useEffect(() => {
    let active = true
    setLoading(true)
    setError('')
    api<LogsResponse>(`/superadmin/logs/${process}`, token)
      .then(result => { if (active) setLogs(result) })
      .catch(reason => {
        if (!active) return
        console.error('Could not load bot logs.', reason)
        setError(reason instanceof Error ? reason.message : 'Could not load bot logs.')
      })
      .finally(() => { if (active) setLoading(false) })
    return () => { active = false }
  }, [process, token, refreshKey])

  const refresh = () => setRefreshKey(current => current + 1)

  return <>
    <PageHeading eyebrow="SYSTEM SUPERADMIN" title={<>Bot logs<span className="heading-period">.</span></>} description="View the latest 30 lines written by the bot processes." action={<button type="button" className="back-button" onClick={refresh}><Icon name="spark" size={16}/> Refresh</button>}/>
    <ErrorAlert message={error} className="page-alert"/>
    <div className="logs-toolbar">
      <div className="logs-process-select" role="tablist" aria-label="Bot process logs">
        {(['app', 'scheduler'] as const).map(name => <button type="button" role="tab" aria-selected={process === name} className={process === name ? 'selected' : ''} key={name} onClick={() => setProcess(name)}>{name === 'app' ? 'Application' : 'Scheduler'}</button>)}
      </div>
      <span>{logs?.date ? `Log date ${logs.date}` : ''}</span>
    </div>
    {loading && !logs ? <div className="loading-state"><span className="spinner"/> Loading logs…</div> : logs?.available
      ? <pre className="bot-log-output">{logs.lines.join('\n')}</pre>
      : <div className="empty-state logs-empty"><span className="empty-icon"><Icon name="spark" size={24}/></span><h3>No log file available</h3><p>Start the bot process or check the configured bot log directory.</p></div>}
  </>
}
