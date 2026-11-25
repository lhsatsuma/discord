import { useEffect } from 'react'

type Props = {
  title: string
  message: string
  confirmLabel: string
  busyLabel: string
  busy?: boolean
  onConfirm: () => void
  onCancel: () => void
}

export function ConfirmationModal({ title, message, confirmLabel, busyLabel, busy = false, onConfirm, onCancel }: Props) {
  useEffect(() => {
    const closeOnEscape = (event: KeyboardEvent) => {
      if (event.key === 'Escape' && !busy) onCancel()
    }
    window.addEventListener('keydown', closeOnEscape)
    return () => window.removeEventListener('keydown', closeOnEscape)
  }, [busy, onCancel])

  return <div className="modal-backdrop" onMouseDown={event => { if (event.target === event.currentTarget && !busy) onCancel() }}>
    <section className="confirmation-modal" role="dialog" aria-modal="true" aria-labelledby="confirmation-title" aria-describedby="confirmation-message">
      <span className="confirmation-mark" aria-hidden="true">!</span>
      <h2 id="confirmation-title">{title}</h2>
      <p id="confirmation-message">{message}</p>
      <div className="confirmation-actions">
        <button type="button" className="modal-cancel-button" onClick={onCancel} disabled={busy}>Cancel</button>
        <button type="button" className="modal-confirm-button" onClick={onConfirm} disabled={busy}>
          {busy ? <><span className="button-spinner"/> {busyLabel}</> : confirmLabel}
        </button>
      </div>
    </section>
  </div>
}
