import type { Channel, Config, Server } from '../types/dashboard'
import { ErrorAlert } from '../components/ErrorAlert'
import { Icon } from '../components/Icon'
import { PageHeading } from '../components/PageHeading'

type Props = {
  server: Server | null
  config: Config
  subredditText: string
  channels: Channel[]
  loading: boolean
  saving: boolean
  error: string
  saveError: string
  notice: string
  onBack: () => void
  onDismissError: () => void
  onConfigChange: <K extends keyof Config>(key: K, value: Config[K]) => void
  onSubredditTextChange: (value: string) => void
  onSave: () => void
}

export function ServerConfigPage({
  server, config, subredditText, channels, loading, saving, error, saveError, notice,
  onBack, onDismissError, onConfigChange, onSubredditTextChange, onSave,
}: Props) {
  return <>
    <PageHeading
      eyebrow="SERVER CONFIGURATION"
      title={<>{server?.name || 'Server settings'}<span className="heading-period">.</span></>}
      description="Fine tune how your bot looks after this community."
      action={<button className="back-button" onClick={onBack}><Icon name="back" size={17}/> All servers</button>}
    />
    <ErrorAlert message={error} onDismiss={onDismissError} className="page-alert"/>
    {loading ? <div className="loading-state"><span className="spinner"/> Loading your dashboard…</div> : <>
      {server && <div className="server-crumb">
        <span className="crumb-avatar">{server.icon ? <img src={`https://cdn.discordapp.com/icons/${server.id}/${server.icon}.png?size=48`} alt=""/> : server.name.slice(0, 1)}</span>
        <span><small>EDITING SETTINGS FOR</small><b>{server.name}</b></span>
        <span className="verified-chip"><Icon name="check" size={13}/> Admin verified</span>
      </div>}
      <div className="settings-layout">
        <aside className="settings-aside">
          <span className="aside-label">CONFIGURATION</span>
          <a className="aside-link selected" href="#autoban"><Icon name="shield" size={17}/> Auto moderation</a>
          <a className="aside-link" href="#memes"><Icon name="spark" size={17}/> Meme settings</a>
          <a className="aside-link" href="#channels"><Icon name="lock" size={17}/> Channel Rules</a>
          <a className="aside-link" href="#voice"><Icon name="voice" size={17}/> Voice updates</a>
          <a className="aside-link" href="#welcome"><Icon name="hello" size={17}/> Welcome message</a>
          <div className="aside-tip"><span className="tip-mark">i</span><p>Changes are applied to the bot as soon as you save.</p></div>
        </aside>
        <div className="settings-main">
          <section className="settings-card" id="autoban">
            <div className="card-heading"><span className="card-icon coral"><Icon name="shield"/></span><div><h2>Auto moderation</h2><p>Choose how the bot handles repeated message violations.</p></div><span className="card-number">01</span></div>
            <div className="card-fields">
              <label className="field"><span>Punishment</span><select value={config.autoban_punishment} onChange={event => onConfigChange('autoban_punishment', event.target.value as Config['autoban_punishment'])}><option value="ban">Permanent ban</option><option value="mute">Timeout</option></select><small>Action taken when a member reaches the threshold.</small></label>
              <div className="field-row">
                <label className="field"><span>Delete message history</span><div className="input-suffix"><input type="number" min="0" max="10080" value={config.autoban_del_period} onChange={event => onConfigChange('autoban_del_period', Number(event.target.value))}/><em>minutes</em></div><small>How much recent history to remove (0–10,080).</small></label>
                <label className="field"><span>Timeout duration</span><div className="input-suffix"><input type="number" min="1" max="28" value={config.autoban_mute_days} onChange={event => onConfigChange('autoban_mute_days', Number(event.target.value))}/><em>days</em></div><small>Used when punishment is set to timeout.</small></label>
              </div>
            </div>
          </section>

          <section className="settings-card" id="memes">
            <div className="card-heading"><span className="card-icon violet"><Icon name="spark"/></span><div><h2>Meme settings</h2><p>Set the odds and sources for community memes.</p></div><span className="card-number">02</span></div>
            <div className="card-fields">
              <label className="field"><span>Meme odds</span><div className="input-suffix compact"><input type="number" min="0" max="10" value={config.reddit_odd_memes} onChange={event => onConfigChange('reddit_odd_memes', Number(event.target.value))}/><em>out of 10</em></div><small>Higher odds mean memes appear more often.</small></label>
              <label className="field"><span>Subreddits</span><textarea rows={3} maxLength={4000} placeholder="memes, wholesomememes, dankmemes" value={subredditText} onChange={event => onSubredditTextChange(event.target.value)}/><small>Separate subreddit names with commas or new lines. Up to 100 sources.</small></label>
            </div>
          </section>

          <section className="settings-card" id="channels">
            <div className="card-heading"><span className="card-icon violet"><Icon name="lock"/></span><div><h2>Channel Rules</h2><p>Choose where admin reports go and which channels autoban ignores.</p></div><span className="card-number">03</span></div>
            <div className="card-fields">
              {channels.length ? <div className="channel-rules-grid">
                <div className="channel-rules-header"><span>Text channel</span><span>Admin channel</span><span>Autoban</span></div>
                {channels.map(channel => <div className="channel-rule-row" key={channel.id}>
                  <span className="channel-rule-name"># {channel.name}</span>
                  <label className="channel-rule-check"><input type="checkbox" checked={config.admin_channels.includes(channel.id)} onChange={event => onConfigChange('admin_channels', event.target.checked ? [...config.admin_channels, channel.id] : config.admin_channels.filter(id => id !== channel.id))}/><span className="sr-only">Use {channel.name} for admin reports and voice updates</span></label>
                  <label className="channel-rule-check"><input type="checkbox" checked={config.forbidden_channels.includes(channel.id)} onChange={event => onConfigChange('forbidden_channels', event.target.checked ? [...config.forbidden_channels, channel.id] : config.forbidden_channels.filter(id => id !== channel.id))}/><span className="sr-only">Exclude {channel.name} from autoban</span></label>
                </div>)}
              </div> : <p className="channel-rules-empty">No text channels are available for this server.</p>}
              <small className="channel-rules-hint">Admin channels receive autoban reports and enabled voice updates. Excluded channels are skipped by autoban.</small>
            </div>
          </section>

          <section className="settings-card" id="voice">
            <div className="card-heading"><span className="card-icon blue"><Icon name="voice"/></span><div><h2>Voice updates</h2><p>Post a message to the admin channel when members join or leave voice.</p></div><span className="card-number">04</span></div>
            <div className="toggle-row"><span><b>Send voice activity updates</b><small>Keep moderators informed about voice channel activity.</small></span><button type="button" role="switch" aria-checked={config.send_voice_update} className={`toggle ${config.send_voice_update ? 'on' : ''}`} onClick={() => onConfigChange('send_voice_update', !config.send_voice_update)}><i/></button></div>
          </section>

          <section className="settings-card" id="welcome">
            <div className="card-heading"><span className="card-icon green"><Icon name="hello"/></span><div><h2>Welcome message</h2><p>Greet new members with a message in your chosen channel.</p></div><span className="card-number">05</span></div>
            <div className="card-fields">
              <div className="toggle-row welcome-toggle"><span><b>Enable welcome messages</b><small>Send an automatic greeting when someone joins.</small></span><button type="button" role="switch" aria-checked={config.welcome_message_active} className={`toggle ${config.welcome_message_active ? 'on' : ''}`} onClick={() => onConfigChange('welcome_message_active', !config.welcome_message_active)}><i/></button></div>
              <label className="field"><span>Destination channel</span><select value={config.welcome_channel_id || ''} onChange={event => onConfigChange('welcome_channel_id', event.target.value || null)}><option value="">Choose a text channel</option>{channels.map(channel => <option key={channel.id} value={channel.id}># {channel.name}</option>)}</select></label>
              <label className="field"><span>Message</span><textarea rows={3} maxLength={2000} placeholder="Welcome, [@user]! We’re glad you’re here." value={config.welcome_message} onChange={event => onConfigChange('welcome_message', event.target.value)}/><small>Use <code>[@user]</code> to mention the new member. Maximum 2,000 characters.</small></label>
            </div>
          </section>

          <div className="save-bar">
            <span><i/> All changes are saved to this server only</span>
            <div className="save-actions">
              {saveError && <span className="save-feedback save-failed" role="alert">{saveError}</span>}
              {notice && <span className="save-feedback save-success" role="status"><Icon name="check" size={16}/>{notice}</span>}
              <button className="save-button" disabled={saving} onClick={onSave}>{saving ? <><span className="button-spinner"/> Saving…</> : <><Icon name="check" size={17}/> Save changes</>}</button>
            </div>
          </div>
        </div>
      </div>
    </>}
  </>
}
