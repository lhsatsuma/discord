import { useEffect } from 'react'

type Props = {
  kind: 'success' | 'error'
  title: string
  message: string
  onClose: () => void
}

export function FeedbackModal({ kind, title, message, onClose }: Props) {
  useEffect(() => {
    const closeOnEscape = (event: KeyboardEvent) => {
      if (event.key === 'Escape') onClose()
    }
    window.addEventListener('keydown', closeOnEscape)
    return () => window.removeEventListener('keydown', closeOnEscape)
  }, [onClose])

  return <div className="modal-backdrop" onMouseDown={event => { if (event.target === event.currentTarget) onClose() }}>
    <section className="confirmation-modal feedback-modal" role="dialog" aria-modal="true" aria-labelledby="feedback-title" aria-describedby="feedback-message">
      <span className={`confirmation-mark feedback-mark ${kind}`} aria-hidden="true">{kind === 'success' ? '✓' : '!'}</span>
      <h2 id="feedback-title">{title}</h2>
      <p id="feedback-message">{message}</p>
      <div className="confirmation-actions">
        <button type="button" className="modal-confirm-button feedback-close-button" onClick={onClose}>Got it</button>
      </div>
    </section>
  </div>
}
