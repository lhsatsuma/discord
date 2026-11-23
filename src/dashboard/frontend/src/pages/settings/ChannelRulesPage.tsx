import type { Channel, ServerSettingsPageProps } from '../../types/dashboard'
import { Icon } from '../../components/Icon'
import { SaveBar } from '../../components/SaveBar'
import { ServerSettingsLayout } from '../../components/ServerSettingsLayout'

type Props = ServerSettingsPageProps & { channels: Channel[] }

export function ChannelRulesPage({ server, config, channels, loading, saving, error, saveError, notice, onBack, onDismissError, onConfigChange, onSave }: Props) {
  const updateChannel = (key: 'admin_channels' | 'forbidden_channels', id: string, enabled: boolean) => onConfigChange(key, enabled ? [...new Set([...config[key], id])] : config[key].filter(channelId => channelId !== id))
  return <ServerSettingsLayout server={server} title="Channel Rules" description="Choose where admin reports go and which channels autoban ignores." error={error} loading={loading} onBack={onBack} onDismissError={onDismissError}>
    <section className="settings-card"><div className="card-heading"><span className="card-icon violet"><Icon name="lock"/></span><div><h2>Channel Rules</h2><p>Select the channels used for admin reports and autoban exclusions.</p></div></div>
      <div className="card-fields">{channels.length ? <div className="channel-rules-grid"><div className="channel-rules-header"><span>Text channel</span><span>Admin channel</span><span>Autoban</span></div>
        {channels.map(channel => <div className="channel-rule-row" key={channel.id}><span className="channel-rule-name"># {channel.name}</span>
          <label className="channel-rule-check"><input type="checkbox" checked={config.admin_channels.includes(channel.id)} onChange={event => updateChannel('admin_channels', channel.id, event.target.checked)}/><span className="sr-only">Use {channel.name} for admin reports and voice updates</span></label>
          <label className="channel-rule-check"><input type="checkbox" checked={config.forbidden_channels.includes(channel.id)} onChange={event => updateChannel('forbidden_channels', channel.id, event.target.checked)}/><span className="sr-only">Exclude {channel.name} from autoban</span></label></div>)}</div> : <p className="channel-rules-empty">No text channels are available for this server.</p>}
        <small className="channel-rules-hint">Admin channels receive autoban reports and enabled voice updates. Excluded channels are skipped by autoban.</small>
      </div></section><SaveBar saving={saving} saveError={saveError} notice={notice} onSave={onSave}/>
  </ServerSettingsLayout>
}
