import type { ServerSettingsPageProps } from '../../types/dashboard'
import { Icon } from '../../components/Icon'
import { SaveBar } from '../../components/SaveBar'
import { ServerSettingsLayout } from '../../components/ServerSettingsLayout'

type Props = ServerSettingsPageProps

export function VoiceUpdatesPage({ server, config, loading, saving, error, saveError, notice, onBack, onDismissError, onConfigChange, onSave }: Props) {
  return <ServerSettingsLayout server={server} title="Voice updates" description="Post a message to the admin channel when members join or leave voice." error={error} loading={loading} onBack={onBack} onDismissError={onDismissError}>
    <section className="settings-card"><div className="card-heading"><span className="card-icon blue"><Icon name="voice"/></span><div><h2>Voice updates</h2><p>Keep moderators informed about voice channel activity.</p></div></div>
      <div className="toggle-row"><span><b>Send voice activity updates</b><small>Updates are posted to the configured admin channels.</small></span><button type="button" role="switch" aria-checked={config.send_voice_update} className={`toggle ${config.send_voice_update ? 'on' : ''}`} onClick={() => onConfigChange('send_voice_update', !config.send_voice_update)}><i/></button></div>
    </section><SaveBar saving={saving} saveError={saveError} notice={notice} onSave={onSave}/>
  </ServerSettingsLayout>
}
