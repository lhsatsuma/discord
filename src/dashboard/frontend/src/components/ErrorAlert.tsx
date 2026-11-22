type Props = { message: string; onDismiss?: () => void; className?: string }

export function ErrorAlert({ message, onDismiss, className = '' }: Props) {
  if (!message) return null
  return <div className={`alert error ${className}`.trim()} role="alert">
    {message}
    {onDismiss && <button onClick={onDismiss} aria-label="Dismiss">×</button>}
  </div>
}
