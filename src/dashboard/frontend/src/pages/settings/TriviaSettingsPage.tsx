import type { TriviaCategory, ServerSettingsPageProps } from '../../types/dashboard'
import { localeOptions } from '../../types/dashboard'
import { Icon } from '../../components/Icon'
import { SaveBar } from '../../components/SaveBar'
import { ServerSettingsLayout } from '../../components/ServerSettingsLayout'

type Props = ServerSettingsPageProps & { categories: TriviaCategory[] }

export function TriviaSettingsPage({ server, config, categories, loading, saving, error, saveError, notice, onBack, onDismissError, onConfigChange, onSave }: Props) {
  const localeCategories = categories.filter(category => category.locale === config.locale)
  const selected = new Set(config.trivia_categories)
  const localeLabel = localeOptions.find(locale => locale.value === config.locale)?.label ?? config.locale

  const toggleCategory = (categoryId: string, enabled: boolean) => {
    const next = enabled
      ? [...selected, categoryId]
      : config.trivia_categories.filter(id => id !== categoryId)
    onConfigChange('trivia_categories', [...new Set(next)])
  }

  return <ServerSettingsLayout server={server} title="Trivia" description="Choose which categories the bot can use and how many questions to post each day." error={error} loading={loading} onBack={onBack} onDismissError={onDismissError}>
    <section className="settings-card">
      <div className="card-heading">
        <span className="card-icon violet"><Icon name="spark"/></span>
        <div><h2>Daily trivia</h2><p>These settings apply to the server’s current language: {localeLabel}.</p></div>
      </div>
      <div className="card-fields">
        <label className="field trivia-count-field">
          <span>Questions per day</span>
          <input type="number" min="1" max="3" value={config.trivia_questions_per_day} onChange={event => onConfigChange('trivia_questions_per_day', Number(event.target.value))}/>
          <small>Choose between 1 and 3 questions each day.</small>
        </label>
        <div className="trivia-categories-heading">
          <div><b>Enabled categories</b><small>Select at least one category for daily trivia.</small></div>
          <span>{config.trivia_categories.filter(id => localeCategories.some(category => category.id === id)).length} selected</span>
        </div>
        {localeCategories.length > 0 ? <div className="trivia-category-grid">
          {localeCategories.map(category => <label className="trivia-category-option" key={category.id}>
            <input
              type="checkbox"
              checked={selected.has(category.id)}
              onChange={event => toggleCategory(category.id, event.target.checked)}
            />
            <span><b>{category.description}</b><small>{category.short_description}</small></span>
          </label>)}
        </div> : <p className="trivia-categories-empty">No trivia categories are available for this language yet. Run the trivia database seeder first.</p>}
      </div>
    </section>
    <SaveBar saving={saving} saveError={saveError} notice={notice} onSave={onSave}/>
  </ServerSettingsLayout>
}
