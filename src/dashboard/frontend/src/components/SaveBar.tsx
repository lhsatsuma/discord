import { Icon } from './Icon'
import { FeedbackModal } from './FeedbackModal'
import { useEffect, useState } from 'react'

type Props = {
  saving: boolean
  saveError: string
  notice: string
  onSave: () => void
}

export function SaveBar({ saving, saveError, notice, onSave }: Props) {
  const [dismissedMessage, setDismissedMessage] = useState('')
  const feedbackMessage = saveError || notice
  useEffect(() => setDismissedMessage(''), [saveError, notice])

  return <div className="save-bar">
    <span><i/> All changes are saved to this server only</span>
    <div className="save-actions">
      <button className="save-button" disabled={saving} onClick={onSave}>
        {saving ? <><span className="button-spinner"/> Saving…</> : <><Icon name="check" size={17}/> Save changes</>}
      </button>
    </div>
    {feedbackMessage && feedbackMessage !== dismissedMessage && <FeedbackModal
      kind={saveError ? 'error' : 'success'}
      title={saveError ? 'Could not save settings' : 'Settings saved'}
      message={feedbackMessage}
      onClose={() => setDismissedMessage(feedbackMessage)}
    />}
  </div>
}
