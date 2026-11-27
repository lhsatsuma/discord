import { useCallback, useEffect, useState } from 'react'
import { ConfirmationModal } from '../components/ConfirmationModal'
import { ErrorAlert } from '../components/ErrorAlert'
import { Icon } from '../components/Icon'
import { PageHeading } from '../components/PageHeading'
import { api } from '../lib/api'

type PendingCategory = { id: string; created_by: string; created_at: string; locale: string; short_description: string; description: string }
type PendingAlternative = { id: string; description: string; correct_answer: boolean }
type PendingQuestion = {
  id: string
  created_by: string
  created_at: string
  question: string
  difficulty: number
  explanation: string | null
  category: { id: string; locale: string; description: string; approved: boolean } | null
  alternatives: PendingAlternative[]
}
type ReviewQueue = { categories: PendingCategory[]; questions: PendingQuestion[] }
type Props = { token: string }
type PendingRejection = { kind: 'category' | 'question'; id: string; label: string } | null

export function SuperadminTriviaPage({ token }: Props) {
  const [queue, setQueue] = useState<ReviewQueue>({ categories: [], questions: [] })
  const [loading, setLoading] = useState(true)
  const [busy, setBusy] = useState('')
  const [error, setError] = useState('')
  const [notice, setNotice] = useState('')
  const [rejecting, setRejecting] = useState<PendingRejection>(null)

  const refresh = useCallback(() => {
    setLoading(true)
    setError('')
    api<ReviewQueue>('/superadmin/trivia/review', token)
      .then(setQueue)
      .catch(reason => {
        console.error('Could not load trivia submissions.', reason)
        setError(reason instanceof Error ? reason.message : 'Could not load trivia submissions.')
      })
      .finally(() => setLoading(false))
  }, [token])

  useEffect(() => { refresh() }, [refresh])

  const update = async (kind: 'category' | 'question', id: string, action: 'approve' | 'reject') => {
    const busyKey = `${kind}:${id}`
    setBusy(busyKey)
    setError('')
    setNotice('')
    try {
      const route = `/superadmin/trivia/${kind === 'category' ? 'categories' : 'questions'}/${id}`
      await api(route + (action === 'approve' ? '/approve' : ''), token, { method: action === 'approve' ? 'POST' : 'DELETE' })
      setQueue(current => ({
        categories: kind === 'category' ? current.categories.filter(category => category.id !== id) : current.categories,
        questions: kind === 'question' ? current.questions.filter(question => question.id !== id) : current.questions,
      }))
      setNotice(`${kind === 'category' ? 'Category' : 'Question'} ${action === 'approve' ? 'approved' : 'rejected'}.`)
      setRejecting(null)
    } catch (reason) {
      console.error(`Could not ${action} trivia ${kind}.`, reason)
      setError(reason instanceof Error ? reason.message : `Could not ${action} trivia ${kind}.`)
    } finally {
      setBusy('')
    }
  }

  const pendingCount = queue.categories.length + queue.questions.length

  return <div className="superadmin-trivia-page">
    <PageHeading eyebrow="SYSTEM SUPERADMIN" title={<>Trivia review<span className="heading-period">.</span></>} description="Review categories and questions submitted by server administrators." action={<button type="button" className="back-button" onClick={refresh}><Icon name="spark" size={16}/> Refresh</button>}/>
    <ErrorAlert message={error} className="page-alert"/>
    {notice && <div className="alert success" role="status">{notice}</div>}
    <div className="section-topline"><span className="section-title">Pending submissions</span><span className="section-hint">{pendingCount} waiting for review</span></div>
    {loading ? <div className="loading-state"><span className="spinner"/> Loading trivia submissions…</div> : pendingCount === 0
      ? <div className="empty-state"><span className="empty-icon"><Icon name="check" size={24}/></span><h3>Nothing to review</h3><p>New trivia submissions from server admins will appear here.</p></div>
      : <div className="trivia-review-list">
        {queue.categories.map(category => <section className="settings-card trivia-review-card" key={category.id}>
          <div className="trivia-review-title"><div><small>NEW CATEGORY · {category.locale}</small><h2>{category.description}</h2></div><span className="review-kind">Category</span></div>
          <dl className="trivia-review-meta"><div><dt>Short name</dt><dd>{category.short_description}</dd></div><div><dt>Submission ID</dt><dd>{category.id}</dd></div><div><dt>Submitted by</dt><dd>{category.created_by}</dd></div></dl>
          <div className="trivia-review-actions"><button type="button" className="save-button" disabled={busy !== ''} onClick={() => { void update('category', category.id, 'approve') }}>{busy === `category:${category.id}` ? 'Approving…' : 'Approve category'}</button><button type="button" className="danger-button" disabled={busy !== ''} onClick={() => setRejecting({ kind: 'category', id: category.id, label: category.description })}>Reject</button></div>
        </section>)}
        {queue.questions.map(question => <section className="settings-card trivia-review-card" key={question.id}>
          <div className="trivia-review-title"><div><small>NEW QUESTION · {question.category?.locale || 'Unknown language'} · {['', 'Easy', 'Medium', 'Hard'][question.difficulty] || `Level ${question.difficulty}`}</small><h2>{question.question}</h2></div><span className="review-kind">Question</span></div>
          <p className="trivia-review-category">Category: <b>{question.category?.description || 'Missing category'}</b></p>
          <ol className="trivia-review-options">{question.alternatives.map(alternative => <li className={alternative.correct_answer ? 'correct' : ''} key={alternative.id}>{alternative.description}{alternative.correct_answer && <b> · Correct</b>}</li>)}</ol>
          {question.explanation && <p className="trivia-review-explanation"><b>Explanation:</b> {question.explanation}</p>}
          <dl className="trivia-review-meta"><div><dt>Submission ID</dt><dd>{question.id}</dd></div><div><dt>Submitted by</dt><dd>{question.created_by}</dd></div></dl>
          <div className="trivia-review-actions"><button type="button" className="save-button" disabled={busy !== ''} onClick={() => { void update('question', question.id, 'approve') }}>{busy === `question:${question.id}` ? 'Approving…' : 'Approve question'}</button><button type="button" className="danger-button" disabled={busy !== ''} onClick={() => setRejecting({ kind: 'question', id: question.id, label: question.question })}>Reject</button></div>
        </section>)}
      </div>}
    {rejecting && <ConfirmationModal
      title={`Reject ${rejecting.kind}?`}
      message={`This will permanently delete “${rejecting.label}” and its associated submission data.`}
      confirmLabel="Reject submission"
      busyLabel="Rejecting…"
      busy={busy !== ''}
      onConfirm={() => { void update(rejecting.kind, rejecting.id, 'reject') }}
      onCancel={() => setRejecting(null)}
    />}
  </div>
}
