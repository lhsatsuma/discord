import type { Config, Server } from '../../types/dashboard'
import { isLocaleCode, localeOptions } from '../../types/dashboard'
import { SaveBar } from '../../components/SaveBar'
import { ServerSettingsLayout } from '../../components/ServerSettingsLayout'

type Props = {
  server: Server | null
  config: Config
  loading: boolean
  saving: boolean
  error: string
  saveError: string
  notice: string
  onBack: () => void
  onDismissError: () => void
  onConfigChange: <K extends keyof Config>(key: K, value: Config[K]) => void
  onSave: () => void
}

export function LocaleSettingsPage({
  server,
  config,
  loading,
  saving,
  error,
  saveError,
  notice,
  onBack,
  onDismissError,
  onConfigChange,
  onSave,
}: Props) {
  return <ServerSettingsLayout
    server={server}
    title="Bot language"
    description="Choose the language used for bot messages in this server."
    error={error}
    loading={loading}
    onBack={onBack}
    onDismissError={onDismissError}
  >
    <section className="settings-card">
      <div className="card-heading">
        <div>
          <h2>Server language</h2>
          <p>This setting only affects the bot's messages in this server.</p>
        </div>
      </div>
      <label className="field">
        <span>Language</span>
        <select
          value={config.locale}
          onChange={event => {
            if (isLocaleCode(event.target.value)) {
              onConfigChange('locale', event.target.value)
            }
          }}
        >
          {localeOptions.map(locale => <option key={locale.value} value={locale.value}>{locale.label}</option>)}
        </select>
      </label>
    </section>
    <SaveBar saving={saving} saveError={saveError} notice={notice} onSave={onSave}/>
  </ServerSettingsLayout>
}
