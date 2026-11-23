import type { Channel, ServerSettingsPageProps } from '../../types/dashboard'
import { Icon } from '../../components/Icon'
import { SaveBar } from '../../components/SaveBar'
import { ServerSettingsLayout } from '../../components/ServerSettingsLayout'

type Props = ServerSettingsPageProps & { channels: Channel[] }

export function WelcomeMessagePage({ server, config, channels, loading, saving, error, saveError, notice, onBack, onDismissError, onConfigChange, onSave }: Props) {
  return <ServerSettingsLayout server={server} title="Welcome message" description="Greet new members with a message in your chosen channel." error={error} loading={loading} onBack={onBack} onDismissError={onDismissError}>
    <section className="settings-card"><div className="card-heading"><span className="card-icon green"><Icon name="hello"/></span><div><h2>Welcome message</h2><p>Configure the greeting and destination for new members.</p></div></div>
      <div className="card-fields"><div className="toggle-row welcome-toggle"><span><b>Enable welcome messages</b><small>Send an automatic greeting when someone joins.</small></span><button type="button" role="switch" aria-checked={config.welcome_message_active} className={`toggle ${config.welcome_message_active ? 'on' : ''}`} onClick={() => onConfigChange('welcome_message_active', !config.welcome_message_active)}><i/></button></div>
        <label className="field"><span>Destination channel</span><select value={config.welcome_channel_id || ''} onChange={event => onConfigChange('welcome_channel_id', event.target.value || null)}><option value="">Choose a text channel</option>{channels.map(channel => <option key={channel.id} value={channel.id}># {channel.name}</option>)}</select></label>
        <label className="field"><span>Message</span><textarea rows={3} maxLength={2000} placeholder="Welcome, [@user]! We’re glad you’re here." value={config.welcome_message} onChange={event => onConfigChange('welcome_message', event.target.value)}/><small>Use <code>[@user]</code> to mention the new member. Maximum 2,000 characters.</small></label>
      </div></section><SaveBar saving={saving} saveError={saveError} notice={notice} onSave={onSave}/>
  </ServerSettingsLayout>
}
