import type { Server, SettingGroup } from '../types/dashboard'
import { Icon } from '../components/Icon'
import { PageHeading } from '../components/PageHeading'
import { ErrorAlert } from '../components/ErrorAlert'

const groups: { id: SettingGroup; title: string; description: string; icon: 'shield' | 'spark' | 'lock' | 'voice' | 'hello' }[] = [
  { id: 'locale', title: 'Bot language', description: 'Choose the language used for messages in this server.', icon: 'spark' },
  { id: 'autoban', title: 'Auto moderation', description: 'Set the autoban punishment, message cleanup, and timeout duration.', icon: 'shield' },
  { id: 'memes', title: 'Meme settings', description: 'Adjust meme odds and choose subreddit sources.', icon: 'spark' },
  { id: 'channels', title: 'Channel Rules', description: 'Choose admin notification channels and autoban exclusions.', icon: 'lock' },
  { id: 'voice', title: 'Voice updates', description: 'Choose whether the bot posts member voice activity updates.', icon: 'voice' },
  { id: 'welcome', title: 'Welcome message', description: 'Configure the greeting and destination for new members.', icon: 'hello' },
  { id: 'trivia', title: 'Trivia', description: 'Choose trivia categories and the daily question count.', icon: 'spark' },
]

type Props = { server: Server | null; error: string; onDismissError: () => void; onBack: () => void; onOpenGroup: (group: SettingGroup) => void }

export function ServerOverviewPage({ server, error, onDismissError, onBack, onOpenGroup }: Props) {
  return <>
    <PageHeading
      eyebrow="SERVER SETTINGS"
      title={<>{server?.name || 'Server'}<span className="heading-period">.</span></>}
      description="Choose a settings group to configure for this server."
      action={<button className="back-button" onClick={onBack}><Icon name="back" size={17}/> All servers</button>}
    />
    <ErrorAlert message={error} onDismiss={onDismissError} className="page-alert"/>
    <div className="section-topline"><span className="section-title">Configuration groups</span><span className="section-hint">{groups.length} settings groups</span></div>
    <div className="server-grid">
      {groups.map(group => <button className="server-card" key={group.id} onClick={() => onOpenGroup(group.id)}>
        <span className="server-avatar"><Icon name={group.icon} size={22}/></span>
        <span className="server-details"><b>{group.title}</b><small>{group.description}</small></span>
        <span className="server-arrow"><Icon name="arrow" size={17}/></span>
      </button>)}
    </div>
  </>
}
