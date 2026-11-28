import { useState } from 'react'
import { FeedbackModal } from './FeedbackModal'

type Props = { value: string; label?: string; className?: string }

export function CopyToClipboardButton({ value, label = 'Copy', className = '' }: Props) {
  const [feedback, setFeedback] = useState<{ kind: 'success' | 'error'; title: string; message: string } | null>(null)

  const copy = async () => {
    try {
      await navigator.clipboard.writeText(value)
      setFeedback({ kind: 'success', title: 'Copied to clipboard', message: 'The category ID is ready to paste.' })
    } catch (error) {
      console.warn('Could not copy text to the clipboard.', error)
      setFeedback({ kind: 'error', title: 'Could not copy ID', message: 'Clipboard access was denied. You can select and copy the ID manually.' })
    }
  }

  return <>
    <button type="button" className={`copy-to-clipboard-button ${className}`.trim()} onClick={() => { void copy() }} aria-label={`${label}: ${value}`}>
      {label}
    </button>
    {feedback && <FeedbackModal {...feedback} onClose={() => setFeedback(null)}/>}
  </>
}
