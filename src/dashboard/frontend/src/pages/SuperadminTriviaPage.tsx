import { useCallback, useEffect, useState } from 'react'
import { ConfirmationModal } from '../components/ConfirmationModal'
import { FeedbackModal } from '../components/FeedbackModal'
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
type Pagination = { current_page: number; last_page: number; per_page: number; total: number }
type ReviewQueue = {
  categories: PendingCategory[]
  questions: PendingQuestion[]
  categories_pagination: Pagination
  questions_pagination: Pagination
}
type Props = { token: string }
type PendingRejection = { kind: 'category' | 'question'; id: string; label: string } | null

const PAGE_SIZE = 20
const emptyPagination: Pagination = { current_page: 1, last_page: 1, per_page: PAGE_SIZE, total: 0 }

function PaginationControls({ pagination, disabled, onPageChange }: { pagination: Pagination; disabled: boolean; onPageChange: (page: number) => void }) {
  if (pagination.total <= pagination.per_page) return null
  return <nav className="trivia-review-pagination" aria-label="Submission pages">
    <button type="button" className="back-button" disabled={disabled || pagination.current_page <= 1} onClick={() => onPageChange(pagination.current_page - 1)}>Previous</button>
    <span>Page {pagination.current_page} of {pagination.last_page} · {pagination.total} total</span>
    <button type="button" className="back-button" disabled={disabled || pagination.current_page >= pagination.last_page} onClick={() => onPageChange(pagination.current_page + 1)}>Next</button>
  </nav>
}

export function SuperadminTriviaPage({ token }: Props) {
  const [queue, setQueue] = useState<ReviewQueue>({
    categories: [],
    questions: [],
    categories_pagination: emptyPagination,
    questions_pagination: emptyPagination,
  })
  const [categoryPage, setCategoryPage] = useState(1)
  const [questionPage, setQuestionPage] = useState(1)
  const [loading, setLoading] = useState(true)
  const [busy, setBusy] = useState('')
  const [feedback, setFeedback] = useState<{ kind: 'success' | 'error'; title: string; message: string } | null>(null)
  const [rejecting, setRejecting] = useState<PendingRejection>(null)
  const [confirmApproveAll, setConfirmApproveAll] = useState(false)
  const [confirmRejectAll, setConfirmRejectAll] = useState(false)

  const refresh = useCallback(() => {
    setLoading(true)
    api<ReviewQueue>(`/superadmin/trivia/review?category_page=${categoryPage}&question_page=${questionPage}&per_page=${PAGE_SIZE}`, token)
      .then(setQueue)
      .catch(reason => {
        console.error('Could not load trivia submissions.', reason)
        setFeedback({ kind: 'error', title: 'Could not load trivia submissions', message: reason instanceof Error ? reason.message : 'Could not load trivia submissions.' })
      })
      .finally(() => setLoading(false))
  }, [token, categoryPage, questionPage])

  useEffect(() => { refresh() }, [refresh])

  // If an action emptied the last page, step back to the previous page automatically.
  useEffect(() => {
    if (!loading && queue.categories.length === 0 && queue.categories_pagination.total > 0 && categoryPage > 1) {
      setCategoryPage(page => page - 1)
    }
    if (!loading && queue.questions.length === 0 && queue.questions_pagination.total > 0 && questionPage > 1) {
      setQuestionPage(page => page - 1)
    }
  }, [loading, queue, categoryPage, questionPage])

  const update = async (kind: 'category' | 'question', id: string, action: 'approve' | 'reject') => {
    setBusy(`${kind}:${id}`)
    setFeedback(null)
    try {
      const route = `/superadmin/trivia/${kind === 'category' ? 'categories' : 'questions'}/${id}`
      await api(route + (action === 'approve' ? '/approve' : ''), token, { method: action === 'approve' ? 'POST' : 'DELETE' })
      setFeedback({ kind: 'success', title: `${kind === 'category' ? 'Category' : 'Question'} ${action === 'approve' ? 'approved' : 'rejected'}`, message: `${kind === 'category' ? 'Category' : 'Question'} ${action === 'approve' ? 'approved' : 'rejected'} successfully.` })
      setRejecting(null)
      refresh()
    } catch (reason) {
      console.error(`Could not ${action} trivia ${kind}.`, reason)
      setFeedback({ kind: 'error', title: `Could not ${action} trivia ${kind}`, message: reason instanceof Error ? reason.message : `Could not ${action} trivia ${kind}.` })
    } finally {
      setBusy('')
    }
  }

  const approveAllQuestions = async () => {
    // queue.questions contains only the current server-paginated page.
    const currentPageQuestions = [...queue.questions]
    if (currentPageQuestions.length === 0) return

    setBusy('all-questions')
    setFeedback(null)
    setConfirmApproveAll(false)

    const results = await Promise.allSettled(currentPageQuestions.map(question =>
      api(`/superadmin/trivia/questions/${question.id}/approve`, token, { method: 'POST' })
    ))
    const approvedCount = results.filter(result => result.status === 'fulfilled').length
    const remaining = currentPageQuestions.length - approvedCount

    if (approvedCount > 0) {
      setFeedback({ kind: 'success', title: 'Trivia approval complete', message: remaining === 0
        ? `All ${approvedCount} questions on this page were approved.`
        : `${approvedCount} questions on this page were approved. ${remaining} remain pending; check their categories and alternatives.` })
    } else {
      setFeedback({ kind: 'error', title: 'No questions were approved', message: 'Check that their categories are approved and each question has four alternatives with one correct answer.' })
    }

    setBusy('')
    refresh()
  }

  const rejectAllQuestions = async () => {
    // The review API only puts the current question page in this array.
    const currentPageQuestions = [...queue.questions]
    if (currentPageQuestions.length === 0) return

    setBusy('all-reject-questions')
    setFeedback(null)
    setConfirmRejectAll(false)

    const results = await Promise.allSettled(currentPageQuestions.map(question =>
      api(`/superadmin/trivia/questions/${question.id}`, token, { method: 'DELETE' })
    ))
    const rejectedCount = results.filter(result => result.status === 'fulfilled').length
    const remaining = currentPageQuestions.length - rejectedCount
    results.forEach((result, index) => {
      if (result.status === 'rejected') {
        console.error('Could not reject trivia question during page rejection.', { questionId: currentPageQuestions[index].id, reason: result.reason })
      }
    })

    if (rejectedCount > 0) {
      setFeedback({ kind: 'success', title: 'Trivia rejection complete', message: remaining === 0
        ? `All ${rejectedCount} questions on this page were rejected.`
        : `${rejectedCount} questions on this page were rejected. ${remaining} could not be rejected and remain pending.` })
    } else {
      setFeedback({ kind: 'error', title: 'No questions were rejected', message: 'Refresh the page and try again.' })
    }

    setBusy('')
    refresh()
  }

  const pendingCount = queue.categories_pagination.total + queue.questions_pagination.total
  const interactionDisabled = busy !== '' || loading

  return <div className="superadmin-trivia-page">
    <PageHeading eyebrow="SYSTEM SUPERADMIN" title={<>Trivia review<span className="heading-period">.</span></>} description="Review categories and questions submitted by server administrators." action={<button type="button" className="back-button" onClick={refresh}><Icon name="spark" size={16}/> Refresh</button>}/>
    {feedback && <FeedbackModal {...feedback} onClose={() => setFeedback(null)}/>}
    <div className="section-topline"><span className="section-title">Pending submissions</span><span className="section-hint">{pendingCount} waiting for review</span></div>

    {loading && pendingCount === 0 ? <div className="loading-state"><span className="spinner"/> Loading trivia submissions…</div> : pendingCount === 0
      ? <div className="empty-state"><span className="empty-icon"><Icon name="check" size={24}/></span><h3>Nothing to review</h3><p>New trivia submissions from server admins will appear here.</p></div>
      : <>
        {queue.categories_pagination.total > 0 && <section className="trivia-review-section">
          <div className="trivia-review-section-heading"><h2>Categories</h2><PaginationControls pagination={queue.categories_pagination} disabled={interactionDisabled} onPageChange={setCategoryPage}/></div>
          {loading ? <div className="loading-state"><span className="spinner"/> Loading categories…</div> : <div className="trivia-review-list">
            {queue.categories.map(category => <section className="settings-card trivia-review-card" key={category.id}>
              <div className="trivia-review-title"><div><small>NEW CATEGORY · {category.locale}</small><h2>{category.description}</h2></div><span className="review-kind">Category</span></div>
              <dl className="trivia-review-meta"><div><dt>Short name</dt><dd>{category.short_description}</dd></div><div><dt>Submission ID</dt><dd>{category.id}</dd></div><div><dt>Submitted by</dt><dd>{category.created_by}</dd></div></dl>
              <div className="trivia-review-actions"><button type="button" className="save-button" disabled={interactionDisabled} onClick={() => { void update('category', category.id, 'approve') }}>{busy === `category:${category.id}` ? 'Approving…' : 'Approve category'}</button><button type="button" className="danger-button" disabled={interactionDisabled} onClick={() => setRejecting({ kind: 'category', id: category.id, label: category.description })}>Reject</button></div>
            </section>)}
          </div>}
        </section>}

        {queue.questions_pagination.total > 0 && <section className="trivia-review-section">
          <div className="trivia-review-section-heading"><div><h2>Questions</h2><span className="section-hint">Bulk actions apply to this page only.</span></div><div className="trivia-review-question-tools"><PaginationControls pagination={queue.questions_pagination} disabled={interactionDisabled} onPageChange={setQuestionPage}/>{queue.questions.length > 0 && <div className="trivia-review-bulk-actions"><button type="button" className="approve-all-button" disabled={interactionDisabled} onClick={() => setConfirmApproveAll(true)}><Icon name="check" size={15}/> Approve all ({queue.questions.length})</button><button type="button" className="reject-all-button" disabled={interactionDisabled} onClick={() => setConfirmRejectAll(true)}>Reject all ({queue.questions.length})</button></div>}</div></div>
          {loading ? <div className="loading-state"><span className="spinner"/> Loading questions…</div> : <div className="trivia-review-list">
            {queue.questions.map(question => <section className="settings-card trivia-review-card" key={question.id}>
              <div className="trivia-review-title"><div><small>NEW QUESTION · {question.category?.locale || 'Unknown language'} · {['', 'Easy', 'Medium', 'Hard'][question.difficulty] || `Level ${question.difficulty}`}</small><h2>{question.question}</h2></div><span className="review-kind">Question</span></div>
              <p className="trivia-review-category">Category: <b>{question.category?.description || 'Missing category'}</b></p>
              <ol className="trivia-review-options">{question.alternatives.map(alternative => <li className={alternative.correct_answer ? 'correct' : ''} key={alternative.id}>{alternative.description}{alternative.correct_answer && <b> · Correct</b>}</li>)}</ol>
              {question.explanation && <p className="trivia-review-explanation"><b>Explanation:</b> {question.explanation}</p>}
              <dl className="trivia-review-meta"><div><dt>Submission ID</dt><dd>{question.id}</dd></div><div><dt>Submitted by</dt><dd>{question.created_by}</dd></div></dl>
              <div className="trivia-review-actions"><button type="button" className="save-button" disabled={interactionDisabled} onClick={() => { void update('question', question.id, 'approve') }}>{busy === `question:${question.id}` ? 'Approving…' : 'Approve question'}</button><button type="button" className="danger-button" disabled={interactionDisabled} onClick={() => setRejecting({ kind: 'question', id: question.id, label: question.question })}>Reject</button></div>
            </section>)}
          </div>}
        </section>}
      </>}

    {rejecting && <ConfirmationModal
      title={`Reject ${rejecting.kind}?`}
      message={`This will permanently delete “${rejecting.label}” and its associated submission data.`}
      confirmLabel="Reject submission"
      busyLabel="Rejecting…"
      busy={busy !== ''}
      onConfirm={() => { void update(rejecting.kind, rejecting.id, 'reject') }}
      onCancel={() => setRejecting(null)}
    />}
    {confirmApproveAll && <ConfirmationModal
      title="Approve all questions on this page?"
      message={`This will attempt to approve the ${queue.questions.length} questions currently shown on this page. Questions with unapproved categories or invalid alternatives will remain pending.`}
      confirmLabel="Approve page questions"
      busyLabel="Approving questions…"
      busy={busy === 'all-questions'}
      onConfirm={() => { void approveAllQuestions() }}
      onCancel={() => setConfirmApproveAll(false)}
    />}
    {confirmRejectAll && <ConfirmationModal
      title="Reject all questions on this page?"
      message={`This will permanently delete the ${queue.questions.length} questions currently shown on this page, including their alternatives. This action cannot be undone.`}
      confirmLabel="Reject page questions"
      busyLabel="Rejecting questions…"
      busy={busy === 'all-reject-questions'}
      onConfirm={() => { void rejectAllQuestions() }}
      onCancel={() => setConfirmRejectAll(false)}
    />}
  </div>
}
