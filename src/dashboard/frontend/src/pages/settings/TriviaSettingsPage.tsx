import { useState } from 'react'
import type { TriviaCategory, ServerSettingsPageProps } from '../../types/dashboard'
import { localeOptions } from '../../types/dashboard'
import { ConfirmationModal } from '../../components/ConfirmationModal'
import { Icon } from '../../components/Icon'
import { SaveBar } from '../../components/SaveBar'
import { ServerSettingsLayout } from '../../components/ServerSettingsLayout'

type Props = ServerSettingsPageProps & { categories: TriviaCategory[]; onResetAnswers: () => Promise<number> }

export function TriviaSettingsPage({ server, config, categories, loading, saving, error, saveError, notice, onBack, onDismissError, onConfigChange, onSave, onResetAnswers }: Props) {
  const [confirmReset, setConfirmReset] = useState(false)
  const [resetting, setResetting] = useState(false)
  const [resetError, setResetError] = useState('')
  const [resetNotice, setResetNotice] = useState('')
  const localeCategories = categories.filter(category => category.locale === config.locale)
  const selected = new Set(config.trivia_categories)
  const localeLabel = localeOptions.find(locale => locale.value === config.locale)?.label ?? config.locale

  const toggleCategory = (categoryId: string, enabled: boolean) => {
    const next = enabled
      ? [...selected, categoryId]
      : config.trivia_categories.filter(id => id !== categoryId)
    onConfigChange('trivia_categories', [...new Set(next)])
  }

  const resetAnswers = async () => {
    setResetting(true)
    setResetError('')
    setResetNotice('')
    try {
      const deletedAnswers = await onResetAnswers()
      setResetNotice(deletedAnswers > 0
        ? `Trivia progress was reset. ${deletedAnswers} record(s) were removed.`
        : 'There was no trivia progress to reset.')
      setConfirmReset(false)
    } catch (reason) {
      console.error('Could not reset trivia answers.', reason)
      setResetError(reason instanceof Error ? reason.message : 'Could not reset trivia progress.')
    } finally {
      setResetting(false)
    }
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
          <input type="number" min="1" max="5" value={config.trivia_questions_per_day} onChange={event => onConfigChange('trivia_questions_per_day', Number(event.target.value))}/>
          <small>Choose between 1 and 5 questions each day.</small>
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
    <section className="settings-card trivia-reset-card">
      <div className="card-heading">
        <span className="card-icon coral"><Icon name="shield"/></span>
        <div><h2>Reset player progress</h2><p>Clear all trivia answers and points saved for this server.</p></div>
      </div>
      <div className="trivia-reset-content">
        <p>This removes every player's trivia history and score. It cannot be undone.</p>
        {resetError && <p className="trivia-reset-error" role="alert">{resetError}</p>}
        {resetNotice && <p className="trivia-reset-notice" role="status">{resetNotice}</p>}
        <button type="button" className="danger-button" onClick={() => { setResetError(''); setResetNotice(''); setConfirmReset(true) }} disabled={resetting}>
          Reset trivia answers
        </button>
      </div>
    </section>
    <SaveBar saving={saving} saveError={saveError} notice={notice} onSave={onSave}/>
    {confirmReset && <ConfirmationModal
      title="Reset trivia progress?"
      message="This will permanently remove all trivia answers and points for this server. All players will start over."
      confirmLabel="Reset answers"
      busyLabel="Resetting..."
      busy={resetting}
      onConfirm={() => { void resetAnswers() }}
      onCancel={() => setConfirmReset(false)}
    />}
  </ServerSettingsLayout>
}
