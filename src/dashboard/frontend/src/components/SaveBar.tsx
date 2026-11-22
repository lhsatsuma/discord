import { Icon } from './Icon'

type Props = {
  saving: boolean
  saveError: string
  notice: string
  onSave: () => void
}

export function SaveBar({ saving, saveError, notice, onSave }: Props) {
  return <div className="save-bar">
    <span><i/> All changes are saved to this server only</span>
    <div className="save-actions">
      {saveError && <span className="save-feedback save-failed" role="alert">{saveError}</span>}
      {notice && <span className="save-feedback save-success" role="status"><Icon name="check" size={16}/>{notice}</span>}
      <button className="save-button" disabled={saving} onClick={onSave}>
        {saving ? <><span className="button-spinner"/> Saving…</> : <><Icon name="check" size={17}/> Save changes</>}
      </button>
    </div>
  </div>
}
