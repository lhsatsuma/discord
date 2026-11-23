import type { Config, ServerSettingsPageProps } from '../../types/dashboard'
import { Icon } from '../../components/Icon'
import { SaveBar } from '../../components/SaveBar'
import { ServerSettingsLayout } from '../../components/ServerSettingsLayout'

type Props = ServerSettingsPageProps

export function AutoModerationPage({ server, config, loading, saving, error, saveError, notice, onBack, onDismissError, onConfigChange, onSave }: Props) {
  return <ServerSettingsLayout server={server} title="Auto moderation" description="Choose how the bot handles repeated message violations." error={error} loading={loading} onBack={onBack} onDismissError={onDismissError}>
    <section className="settings-card"><div className="card-heading"><span className="card-icon coral"><Icon name="shield"/></span><div><h2>Auto moderation</h2><p>Set the action and cleanup applied when a member reaches the threshold.</p></div></div>
      <div className="card-fields"><label className="field"><span>Punishment</span><select value={config.autoban_punishment} onChange={event => onConfigChange('autoban_punishment', event.target.value as Config['autoban_punishment'])}><option value="ban">Permanent ban</option><option value="mute">Timeout</option></select><small>Action taken when a member reaches the threshold.</small></label>
        <div className="field-row"><label className="field"><span>Delete message history</span><div className="input-suffix"><input type="number" min="0" max="10080" value={config.autoban_del_period} onChange={event => onConfigChange('autoban_del_period', Number(event.target.value))}/><em>minutes</em></div><small>How much recent history to remove (0–10,080).</small></label>
          <label className="field"><span>Timeout duration</span><div className="input-suffix"><input type="number" min="1" max="28" value={config.autoban_mute_days} onChange={event => onConfigChange('autoban_mute_days', Number(event.target.value))}/><em>days</em></div><small>Used when punishment is set to timeout.</small></label></div>
      </div></section><SaveBar saving={saving} saveError={saveError} notice={notice} onSave={onSave}/>
  </ServerSettingsLayout>
}
