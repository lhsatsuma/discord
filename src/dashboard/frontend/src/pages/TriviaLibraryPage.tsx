import { useEffect, useState } from 'react'
import { ErrorAlert } from '../components/ErrorAlert'
import { PageHeading } from '../components/PageHeading'
import { api } from '../lib/api'
import { TriviaContentPage } from './TriviaContentPage'
import type { Server } from '../types/dashboard'

type LibraryCategory = {
  id: string
  locale: 'en-US' | 'pt-BR'
  short_description: string
  description: string
  approved: boolean
}

type LibraryQuestion = {
  id: string
  question: string
  difficulty: number
  explanation: string | null
  approved: boolean
  category: Pick<LibraryCategory, 'id' | 'locale' | 'description' | 'approved'>
  alternatives: { id: string; description: string; correct_answer: boolean }[]
}

type LibraryResponse = {
  categories: LibraryCategory[]
  questions: {
    data: LibraryQuestion[]
    current_page: number
    last_page: number
    per_page: number
    total: number
  }
}

type Props = { token: string; servers: Server[] }

const difficultyLabels: Record<number, string> = { 1: 'Easy', 2: 'Medium', 3: 'Hard' }

export function TriviaLibraryPage({ token, servers }: Props) {
  const [view, setView] = useState<'browse' | 'create'>('browse')
  const [locale, setLocale] = useState('')
  const [category, setCategory] = useState('')
  const [difficulty, setDifficulty] = useState('')
  const [page, setPage] = useState(1)
  const [result, setResult] = useState<LibraryResponse | null>(null)
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState('')

  useEffect(() => {
    let active = true
    const params = new URLSearchParams({ page: String(page) })
    if (locale) params.set('locale', locale)
    if (category) params.set('category', category)
    if (difficulty) params.set('difficulty', difficulty)

    setLoading(true)
    setError('')
    api<LibraryResponse>(`/trivia/library?${params.toString()}`, token)
      .then(data => { if (active) setResult(data) })
      .catch(reason => {
        if (!active) return
        console.error('Could not load the trivia library.', reason)
        setError(reason instanceof Error ? reason.message : 'Could not load trivia content.')
      })
      .finally(() => { if (active) setLoading(false) })

    return () => { active = false }
  }, [token, locale, category, difficulty, page])

  const setLocaleFilter = (value: string) => {
    setLocale(value)
    setCategory('')
    setPage(1)
  }
  const categories = result?.categories ?? []
  const questions = result?.questions.data ?? []

  return <div className="trivia-library-page">
    {view === 'browse' ? <>
    <PageHeading
      eyebrow="TRIVIA CONTENT"
      title={<>Trivia library<span className="heading-period">.</span></>}
      description="Browse trivia categories and questions. Filter the library by language, category, and difficulty."
      action={<button type="button" className="save-button" onClick={() => setView('create')}>Create trivia content</button>}
    />
    <ErrorAlert message={error} className="page-alert"/>

    <section className="settings-card trivia-library-filters">
      <div className="field-row">
        <label className="field"><span>Locale</span><select value={locale} onChange={event => setLocaleFilter(event.target.value)}><option value="">All locales</option><option value="en-US">English (United States)</option><option value="pt-BR">Português (Brasil)</option></select></label>
        <label className="field"><span>Category</span><select value={category} onChange={event => { setCategory(event.target.value); setPage(1) }}><option value="">All categories</option>{categories.map(item => <option value={item.id} key={item.id}>{item.description}{item.approved ? '' : ' · Pending approval'}</option>)}</select></label>
        <label className="field"><span>Difficulty</span><select value={difficulty} onChange={event => { setDifficulty(event.target.value); setPage(1) }}><option value="">All difficulties</option><option value="1">Easy</option><option value="2">Medium</option><option value="3">Hard</option></select></label>
      </div>
    </section>

    <section className="trivia-library-categories">
      <div className="section-topline"><span className="section-title">Categories</span><span className="section-hint">{categories.length} available</span></div>
      {categories.length > 0 ? <div className="trivia-library-category-grid">{categories.map(item => <article className="trivia-library-category" key={item.id}>
        <span className="trivia-library-category-locale">{item.locale}{!item.approved && <b>Pending</b>}</span>
        <h3>{item.description}</h3>
        <small>{item.short_description}</small>
      </article>)}</div> : <p className="trivia-library-empty">{loading ? 'Loading categories…' : 'No categories match these filters.'}</p>}
    </section>

    <section className="trivia-library-questions">
      <div className="section-topline"><span className="section-title">Questions</span><span className="section-hint">{loading ? 'Loading…' : `${result?.questions.total ?? 0} questions`}</span></div>
      {loading && questions.length === 0 ? <div className="loading-state"><span className="spinner"/> Loading trivia questions…</div>
        : questions.length > 0 ? <div className="trivia-library-question-list">{questions.map(item => <article className="settings-card trivia-library-question" key={item.id}>
          <div className="trivia-library-question-heading"><div><small>{item.category.locale} · {item.category.description} · {difficultyLabels[item.difficulty] || `Level ${item.difficulty}`}</small><h3>{item.question}</h3></div><span className={`trivia-library-status ${item.approved ? 'approved' : 'pending'}`}>{item.approved ? 'Approved' : 'Pending review'}</span></div>
          <ol className="trivia-library-alternatives">{item.alternatives.map(alternative => <li className={alternative.correct_answer ? 'correct' : ''} key={alternative.id}>{alternative.description}{alternative.correct_answer && <b> · Correct answer</b>}</li>)}</ol>
          {item.explanation && <p className="trivia-library-explanation"><b>Explanation:</b> {item.explanation}</p>}
        </article>)}</div> : <div className="empty-state"><h3>No questions found</h3><p>Try changing the locale, category, or difficulty filters.</p></div>}
      {result && result.questions.last_page > 1 && <div className="trivia-library-pagination"><button type="button" className="back-button" disabled={page <= 1 || loading} onClick={() => setPage(current => current - 1)}>Previous</button><span>Page {result.questions.current_page} of {result.questions.last_page}</span><button type="button" className="back-button" disabled={page >= result.questions.last_page || loading} onClick={() => setPage(current => current + 1)}>Next</button></div>}
    </section>
    </> : <TriviaContentPage token={token} servers={servers} onBack={() => setView('browse')}/>}
  </div>
}
