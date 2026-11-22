import { Icon } from '../components/Icon'

export function CallbackPage() {
  return <main className="callback-screen" role="status" aria-live="polite">
    <div className="callback-loading-card">
      <span className="brand-mark"><Icon name="discord" size={25}/></span>
      <span className="callback-spinner" aria-hidden="true"/>
      <h1>Connecting your Discord account</h1>
      <p>Verifying your access and preparing your dashboard…</p>
    </div>
  </main>
}
