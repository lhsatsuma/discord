import { useEffect, useState } from 'react'
import { ErrorAlert } from '../components/ErrorAlert'
import { PageHeading } from '../components/PageHeading'
import { CopyToClipboardButton } from '../components/CopyToClipboardButton'
import { api } from '../lib/api'
import { TriviaContentPage } from './TriviaContentPage'

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

type QuestionsResponse = {
  categories: LibraryCategory[]
  questions: {
    data: LibraryQuestion[]
    current_page: number
    last_page: number
    per_page: number
    total: number
  }
}
type CategoriesResponse = { categories: LibraryCategory[] }
type Props = {
  token: string
  section: 'categories' | 'questions'
  isSuperadmin: boolean
  onNavigate: (path: string) => void
}

const difficultyLabels: Record<number, string> = { 1: 'Easy', 2: 'Medium', 3: 'Hard', 4: 'Super hard', 5: 'Extreme' }

export function TriviaLibraryPage({ token, section, isSuperadmin, onNavigate }: Props) {
  const [view, setView] = useState<'browse' | 'create'>('browse')
  const [locale, setLocale] = useState('')
  const [category, setCategory] = useState('')
  const [difficulty, setDifficulty] = useState('')
  const [search, setSearch] = useState('')
  const [page, setPage] = useState(1)
  const [categories, setCategories] = useState<LibraryCategory[]>([])
  const [questionsResult, setQuestionsResult] = useState<QuestionsResponse['questions'] | null>(null)
  const [questions, setQuestions] = useState<LibraryQuestion[]>([])
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState('')
  const [refreshKey, setRefreshKey] = useState(0)

  useEffect(() => {
    let active = true
    const params = new URLSearchParams()
    if (section === 'categories') {
      if (locale) params.set('locale', locale)
      setLoading(true)
      setError('')
      api<CategoriesResponse>(`/trivia/library/categories${params.size ? `?${params.toString()}` : ''}`, token)
        .then(data => { if (active) setCategories(data.categories) })
        .catch(reason => {
          if (!active) return
          console.error('Could not load trivia categories.', reason)
          setError(reason instanceof Error ? reason.message : 'Could not load trivia categories.')
        })
        .finally(() => { if (active) setLoading(false) })
    } else {
      params.set('page', String(page))
      if (locale) params.set('locale', locale)
      if (category) params.set('category', category)
      if (difficulty) params.set('difficulty', difficulty)
      setLoading(true)
      setError('')
      api<QuestionsResponse>(`/trivia/library/questions?${params.toString()}`, token)
        .then(data => {
          if (!active) return
          setCategories(data.categories)
          setQuestions(data.questions.data)
          setQuestionsResult(data.questions)
        })
        .catch(reason => {
          if (!active) return
          console.error('Could not load trivia questions.', reason)
          setError(reason instanceof Error ? reason.message : 'Could not load trivia questions.')
        })
        .finally(() => { if (active) setLoading(false) })
    }

    return () => { active = false }
  }, [token, section, locale, category, difficulty, page, refreshKey])

  const setLocaleFilter = (value: string) => {
    setLocale(value)
    setCategory('')
    setPage(1)
  }
  const filteredCategories = categories.filter(item => {
    const query = search.trim().toLocaleLowerCase()
    return !query || item.description.toLocaleLowerCase().includes(query) || item.short_description.toLocaleLowerCase().includes(query)
  })
  const title = section === 'categories' ? 'Trivia Categories' : 'Trivia Questions'

  return <div className="trivia-library-page">
    {view === 'browse' ? <>
      <PageHeading
        eyebrow="TRIVIA CONTENT"
        title={<>{title}<span className="heading-period">.</span></>}
        description={section === 'categories' ? 'Browse the category catalog by language.' : 'Browse questions and open a question to view its answer details.'}
        action={<button type="button" className="save-button" onClick={() => setView('create')}>Create trivia content</button>}
      />
      <nav className="trivia-library-tabs" aria-label="Trivia library sections">
        <button type="button" className={section === 'categories' ? 'active' : ''} onClick={() => onNavigate('/trivia/library/categories')}>Categories</button>
        <button type="button" className={section === 'questions' ? 'active' : ''} onClick={() => onNavigate('/trivia/library/questions')}>Questions</button>
      </nav>
      <ErrorAlert message={error} className="page-alert"/>

      {section === 'categories' ? <>
        <section className="settings-card trivia-library-filters trivia-category-filters">
          <label className="field"><span>Language</span><select value={locale} onChange={event => setLocaleFilter(event.target.value)}><option value="">All languages</option><option value="en-US">English (United States)</option><option value="pt-BR">Português (Brasil)</option></select></label>
          <label className="field"><span>Search categories</span><input type="search" value={search} onChange={event => setSearch(event.target.value)} placeholder="Search by name or short name"/></label>
        </section>
        <div className="section-topline"><span className="section-title">Categories</span><span className="section-hint">{loading ? 'Loading…' : `${filteredCategories.length} categories`}</span></div>
        {loading && categories.length === 0 ? <div className="loading-state"><span className="spinner"/> Loading categories…</div>
          : filteredCategories.length > 0 ? <div className="trivia-library-category-list">{filteredCategories.map(item => <article className="trivia-library-category-row" key={item.id}>
            <div className="trivia-library-category-main"><span className="trivia-library-category-locale">{item.locale}</span><h2>{item.description}</h2><span className="trivia-library-category-short">{item.short_description}</span></div>
            <div className="trivia-library-category-id"><code title={item.id}>{item.id}</code><CopyToClipboardButton value={item.id} label="Copy ID"/></div>
            <span className={`trivia-library-status ${item.approved ? 'approved' : 'pending'}`}>{item.approved ? 'Approved' : 'Pending review'}</span>
          </article>)}</div> : <div className="empty-state"><h3>No categories found</h3><p>Try a different language or search term.</p></div>}
      </> : <>
        <section className="settings-card trivia-library-filters">
          <div className="field-row">
            <label className="field"><span>Language</span><select value={locale} onChange={event => setLocaleFilter(event.target.value)}><option value="">All languages</option><option value="en-US">English (United States)</option><option value="pt-BR">Português (Brasil)</option></select></label>
            <label className="field"><span>Category</span><select value={category} onChange={event => { setCategory(event.target.value); setPage(1) }}><option value="">All categories</option>{categories.map(item => <option value={item.id} key={item.id}>{item.description}{item.approved ? '' : ' · Pending approval'}</option>)}</select></label>
            <label className="field"><span>Difficulty</span><select value={difficulty} onChange={event => { setDifficulty(event.target.value); setPage(1) }}><option value="">All difficulties</option>{Object.entries(difficultyLabels).map(([value, label]) => <option value={value} key={value}>{label}</option>)}</select></label>
          </div>
        </section>
        <section className="trivia-library-questions">
          <div className="section-topline"><span className="section-title">Questions</span><span className="section-hint">{loading ? 'Loading…' : `${questionsResult?.total ?? 0} questions`}</span></div>
          {loading && questions.length === 0 ? <div className="loading-state"><span className="spinner"/> Loading questions…</div>
            : questions.length > 0 ? <div className="trivia-library-question-list">{questions.map(item => <article className="trivia-library-question-row" key={item.id}>
              <div className="trivia-library-question-heading"><div><small>{item.category.locale} · {item.category.description} · {difficultyLabels[item.difficulty] || `Level ${item.difficulty}`}</small><h2>{item.question}</h2></div><span className={`trivia-library-status ${item.approved ? 'approved' : 'pending'}`}>{item.approved ? 'Approved' : 'Pending review'}</span></div>
              {isSuperadmin && <details className="trivia-library-question-details"><summary>Show answer key and explanation</summary>
                <ol className="trivia-library-alternatives">{item.alternatives.map(alternative => <li className={alternative.correct_answer ? 'correct' : ''} key={alternative.id}>{alternative.description}{alternative.correct_answer && <b> · Correct answer</b>}</li>)}</ol>
                {item.explanation && <p className="trivia-library-explanation"><b>Explanation:</b> {item.explanation}</p>}
              </details>}
            </article>)}</div> : <div className="empty-state"><h3>No questions found</h3><p>Try changing the language, category, or difficulty filters.</p></div>}
          {questionsResult && questionsResult.last_page > 1 && <div className="trivia-library-pagination"><button type="button" className="back-button" disabled={page <= 1 || loading} onClick={() => setPage(current => current - 1)}>Previous</button><span>Page {questionsResult.current_page} of {questionsResult.last_page}</span><button type="button" className="back-button" disabled={page >= questionsResult.last_page || loading} onClick={() => setPage(current => current + 1)}>Next</button></div>}
        </section>
      </>}
    </> : <TriviaContentPage token={token} onBack={() => { setView('browse'); setRefreshKey(current => current + 1) }}/>}
  </div>
}
