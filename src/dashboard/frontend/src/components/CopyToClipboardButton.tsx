import { useEffect, useRef, useState } from 'react'

type Props = { value: string; label?: string; className?: string }

export function CopyToClipboardButton({ value, label = 'Copy', className = '' }: Props) {
  const [feedback, setFeedback] = useState('')
  const resetTimer = useRef<number | null>(null)

  useEffect(() => () => {
    if (resetTimer.current !== null) window.clearTimeout(resetTimer.current)
  }, [])

  const copy = async () => {
    if (resetTimer.current !== null) window.clearTimeout(resetTimer.current)
    try {
      await navigator.clipboard.writeText(value)
      setFeedback('Copied')
    } catch (error) {
      console.warn('Could not copy text to the clipboard.', error)
      setFeedback('Copy failed')
    }
    resetTimer.current = window.setTimeout(() => setFeedback(''), 1800)
  }

  return <button type="button" className={`copy-to-clipboard-button ${className}`.trim()} onClick={() => { void copy() }} aria-label={`${feedback || label}: ${value}`}>
    {feedback || label}
  </button>
}
