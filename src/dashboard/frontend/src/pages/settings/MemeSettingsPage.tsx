import type { Config, Server } from '../../types/dashboard'
import { Icon } from '../../components/Icon'
import { SaveBar } from '../../components/SaveBar'
import { ServerSettingsLayout } from '../../components/ServerSettingsLayout'

type Props = { server: Server | null; config: Config; subredditText: string; loading: boolean; saving: boolean; error: string; saveError: string; notice: string; onBack: () => void; onDismissError: () => void; onConfigChange: <K extends keyof Config>(key: K, value: Config[K]) => void; onSubredditTextChange: (value: string) => void; onSave: () => void }

export function MemeSettingsPage({ server, config, subredditText, loading, saving, error, saveError, notice, onBack, onDismissError, onConfigChange, onSubredditTextChange, onSave }: Props) {
  return <ServerSettingsLayout server={server} title="Meme settings" description="Set the odds and sources for community memes." error={error} loading={loading} onBack={onBack} onDismissError={onDismissError}>
    <section className="settings-card"><div className="card-heading"><span className="card-icon violet"><Icon name="spark"/></span><div><h2>Meme settings</h2><p>Choose how often the bot shares memes and which subreddits it uses.</p></div></div>
      <div className="card-fields"><label className="field"><span>Meme odds</span><div className="input-suffix compact"><input type="number" min="0" max="10" value={config.reddit_odd_memes} onChange={event => onConfigChange('reddit_odd_memes', Number(event.target.value))}/><em>out of 10</em></div><small>Higher odds mean memes appear more often.</small></label>
        <label className="field"><span>Subreddits</span><textarea rows={3} maxLength={4000} placeholder="memes, wholesomememes, dankmemes" value={subredditText} onChange={event => onSubredditTextChange(event.target.value)}/><small>Separate subreddit names with commas or new lines. Up to 100 sources.</small></label></div>
    </section><SaveBar saving={saving} saveError={saveError} notice={notice} onSave={onSave}/>
  </ServerSettingsLayout>
}
