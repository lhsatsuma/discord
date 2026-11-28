import { useEffect, useState } from 'react'
import { FeedbackModal } from './FeedbackModal'

type Props = { message: string; onDismiss?: () => void; className?: string }

export function ErrorAlert({ message, onDismiss }: Props) {
  const [dismissed, setDismissed] = useState(false)
  useEffect(() => setDismissed(false), [message])
  if (!message || dismissed) return null

  return <FeedbackModal
    kind="error"
    title="Something went wrong"
    message={message}
    onClose={() => { onDismiss ? onDismiss() : setDismissed(true) }}
  />
}
