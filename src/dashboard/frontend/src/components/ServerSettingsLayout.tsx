import type { ReactNode } from 'react'
import type { Server } from '../types/dashboard'
import { ErrorAlert } from './ErrorAlert'
import { Icon } from './Icon'
import { PageHeading } from './PageHeading'

type Props = {
  server: Server | null
  title: string
  description: string
  error: string
  loading: boolean
  onBack: () => void
  onDismissError: () => void
  children: ReactNode
}

export function ServerSettingsLayout({ server, title, description, error, loading, onBack, onDismissError, children }: Props) {
  return <>
    <PageHeading
      eyebrow="SERVER CONFIGURATION"
      title={<>{title}<span className="heading-period">.</span></>}
      description={description}
      action={<button className="back-button" onClick={onBack}><Icon name="back" size={17}/> All settings</button>}
    />
    <ErrorAlert message={error} onDismiss={onDismissError} className="page-alert"/>
    {loading ? <div className="loading-state"><span className="spinner"/> Loading server settings…</div> : <>
      {server && <div className="server-crumb">
        <span className="crumb-avatar">{server.icon ? <img src={`https://cdn.discordapp.com/icons/${server.id}/${server.icon}.png?size=48`} alt=""/> : server.name.slice(0, 1)}</span>
        <span><small>EDITING SETTINGS FOR</small><b>{server.name}</b></span>
        <span className="verified-chip"><Icon name="check" size={13}/> Admin verified</span>
      </div>}
      {children}
    </>}
  </>
}
