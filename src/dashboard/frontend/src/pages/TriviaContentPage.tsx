import { useCallback, useEffect, useState, type FormEvent } from 'react'
import { ErrorAlert } from '../components/ErrorAlert'
import { Icon } from '../components/Icon'
import { PageHeading } from '../components/PageHeading'
import { api } from '../lib/api'
import type { LocaleCode, TriviaCategory } from '../types/dashboard'

type Props = { token: string; onBack: () => void }
type Difficulty = 'easy' | 'medium' | 'hard'
type QuestionInput = {
  category: string
  difficulty: Difficulty
  question: string
  correct: string
  incorrects: [string, string, string]
  explanation: string
}
const blankQuestion = (): QuestionInput => ({ category: '', difficulty: 'easy', question: '', correct: '', incorrects: ['', '', ''], explanation: '' })

export function TriviaContentPage({ token, onBack }: Props) {
  const [categories, setCategories] = useState<TriviaCategory[]>([])
  const [loading, setLoading] = useState(true)
  const [submitting, setSubmitting] = useState(false)
  const [error, setError] = useState('')
  const [notice, setNotice] = useState('')
  const [categoryLocale, setCategoryLocale] = useState<LocaleCode>('en-US')
  const [shortDescription, setShortDescription] = useState('')
  const [categoryDescription, setCategoryDescription] = useState('')
  const [question, setQuestion] = useState<QuestionInput>(blankQuestion)
  const [importQuestions, setImportQuestions] = useState<unknown[] | null>(null)

  const loadCategories = useCallback(() => {
    setCategories([])
    setLoading(true)
    setError('')
    api<{ categories: TriviaCategory[] }>('/trivia/submission-categories', token)
      .then(result => setCategories(result.categories))
      .catch(reason => {
        console.error('Could not load trivia categories for submissions.', reason)
        setError(reason instanceof Error ? reason.message : 'Could not load trivia categories.')
      })
      .finally(() => setLoading(false))
  }, [token])

  useEffect(() => { loadCategories() }, [loadCategories])

  const submitCategory = async (event: FormEvent<HTMLFormElement>) => {
    event.preventDefault()
    setSubmitting(true)
    setError('')
    setNotice('')
    try {
      const result = await api<{ category: { id: string; description: string; locale: string } }>('/trivia/categories', token, {
        method: 'POST',
        body: JSON.stringify({ locale: categoryLocale, short_description: shortDescription, description: categoryDescription }),
      })
      setNotice(`Category “${result.category.description}” was submitted for superadmin approval. Submission ID: ${result.category.id}`)
      setShortDescription('')
      setCategoryDescription('')
      loadCategories()
    } catch (reason) {
      console.error('Could not submit trivia category.', reason)
      setError(reason instanceof Error ? reason.message : 'Could not submit trivia category.')
    } finally {
      setSubmitting(false)
    }
  }

  const submitQuestion = async (event: FormEvent<HTMLFormElement>) => {
    event.preventDefault()
    setSubmitting(true)
    setError('')
    setNotice('')
    try {
      await api('/trivia/questions', token, { method: 'POST', body: JSON.stringify(question) })
      setNotice('Question and alternatives were submitted for superadmin approval.')
      setQuestion(blankQuestion())
    } catch (reason) {
      console.error('Could not submit trivia question.', reason)
      setError(reason instanceof Error ? reason.message : 'Could not submit trivia question.')
    } finally {
      setSubmitting(false)
    }
  }

  const selectImportFile = async (file?: File) => {
    setImportQuestions(null)
    setError('')
    setNotice('')
    if (!file) return
    try {
      const parsed: unknown = JSON.parse(await file.text())
      if (!Array.isArray(parsed)) throw new Error('The JSON file must contain an array of questions.')
      if (parsed.length < 1 || parsed.length > 200) throw new Error('Import between 1 and 200 questions at a time.')
      setImportQuestions(parsed)
    } catch (reason) {
      console.error('Could not read trivia JSON file.', reason)
      setError(reason instanceof Error ? reason.message : 'Could not read this JSON file.')
    }
  }

  const submitImport = async () => {
    if (!importQuestions) return
    setSubmitting(true)
    setError('')
    setNotice('')
    try {
      const result = await api<{ submitted: number }>('/trivia/questions/import', token, {
        method: 'POST',
        body: JSON.stringify({ questions: importQuestions }),
      })
      setNotice(`${result.submitted} question(s) and their alternatives were submitted for superadmin approval.`)
      setImportQuestions(null)
      const input = document.getElementById('trivia-json-file') as HTMLInputElement | null
      if (input) input.value = ''
    } catch (reason) {
      console.error('Could not import trivia questions.', reason)
      setError(reason instanceof Error ? reason.message : 'Could not import trivia questions.')
    } finally {
      setSubmitting(false)
    }
  }

  const updateIncorrect = (index: number, value: string) => {
    const incorrects = [...question.incorrects] as QuestionInput['incorrects']
    incorrects[index] = value
    setQuestion(current => ({ ...current, incorrects }))
  }

  return <div className="trivia-content-page">
    <PageHeading eyebrow="TRIVIA SUBMISSIONS" title={<>Create trivia content<span className="heading-period">.</span></>} description="Submit categories and questions for review by the system superadmin." action={<button type="button" className="back-button" onClick={onBack}><Icon name="back" size={16}/> Back to library</button>}/>
    <ErrorAlert message={error} className="page-alert"/>
    {notice && <div className="alert success" role="status">{notice}</div>}


    <section className="settings-card">
      <div className="card-heading"><span className="card-icon violet"><Icon name="spark"/></span><div><h2>Create a category</h2><p>New categories stay unavailable to all servers until approved.</p></div></div>
      <form className="card-fields" onSubmit={event => { void submitCategory(event) }}>
        <div className="field-row">
          <label className="field"><span>Language</span><select value={categoryLocale} onChange={event => setCategoryLocale(event.target.value as LocaleCode)}><option value="en-US">English (United States)</option><option value="pt-BR">Portuguese (Brazil)</option></select></label>
          <label className="field"><span>Short name</span><input required maxLength={30} value={shortDescription} onChange={event => setShortDescription(event.target.value)} placeholder="technology"/><small>Up to 30 characters.</small></label>
        </div>
        <label className="field"><span>Category name</span><input required maxLength={80} value={categoryDescription} onChange={event => setCategoryDescription(event.target.value)} placeholder="Technology"/></label>
        <button className="save-button" type="submit" disabled={submitting}>{submitting ? 'Submitting…' : 'Submit category for approval'}</button>
      </form>
    </section>

    <section className="settings-card">
      <div className="card-heading"><span className="card-icon violet"><Icon name="spark"/></span><div><h2>Create a question</h2><p>Each question has one correct answer and three incorrect alternatives.</p></div></div>
      <form className="card-fields" onSubmit={event => { void submitQuestion(event) }}>
        {categories.length > 0 ? <label className="field"><span>Category</span><select required value={question.category} onChange={event => setQuestion(current => ({ ...current, category: event.target.value }))}><option value="">Select a category</option>{categories.map(category => <option value={category.id} key={category.id}>{category.description} ({category.locale}){category.approved ? '' : ' — Pending superadmin approval'} — {category.id}</option>)}</select></label> : <p className="trivia-categories-empty">{loading ? 'Loading categories…' : 'No categories are available. Submit a category above or ask a superadmin to approve one.'}</p>}
        <label className="field"><span>Difficulty</span><select value={question.difficulty} onChange={event => setQuestion(current => ({ ...current, difficulty: event.target.value as Difficulty }))}><option value="easy">Easy</option><option value="medium">Medium</option><option value="hard">Hard</option></select></label>
        <label className="field"><span>Question</span><textarea required maxLength={4096} rows={3} value={question.question} onChange={event => setQuestion(current => ({ ...current, question: event.target.value }))}/></label>
        <label className="field"><span>Correct alternative</span><input required maxLength={255} value={question.correct} onChange={event => setQuestion(current => ({ ...current, correct: event.target.value }))}/></label>
        <div className="field-row">{question.incorrects.map((value, index) => <label className="field" key={index}><span>Incorrect alternative {index + 1}</span><input required maxLength={255} value={value} onChange={event => updateIncorrect(index, event.target.value)}/></label>)}</div>
        <label className="field"><span>Explanation</span><textarea maxLength={1024} rows={3} value={question.explanation} onChange={event => setQuestion(current => ({ ...current, explanation: event.target.value }))}/></label>
        <button className="save-button" type="submit" disabled={submitting || categories.length === 0}>{submitting ? 'Submitting…' : 'Submit question for approval'}</button>
      </form>
    </section>

    <section className="settings-card">
      <div className="card-heading"><span className="card-icon violet"><Icon name="spark"/></span><div><h2>Import questions from JSON</h2><p>Select a JSON file containing up to 200 questions in the documented format.</p></div></div>
      <div className="card-fields">
        <label className="field"><span>JSON file</span><input id="trivia-json-file" type="file" accept=".json,application/json" onChange={event => { void selectImportFile(event.target.files?.[0]) }}/></label>
        <small>Every category ID must belong to an approved category. All imported questions remain pending until approved.</small>
        <details className="trivia-json-example"><summary>View the expected JSON structure</summary><pre>{`[
  {
    "category": "approved-category-uuid",
    "difficulty": "easy",
    "question": "Question text",
    "correct": "Correct alternative",
    "incorrects": ["Wrong answer 1", "Wrong answer 2", "Wrong answer 3"],
    "explanation": "Optional explanation"
  }
]`}</pre></details>
        {importQuestions && <div className="trivia-import-ready"><b>{importQuestions.length} question(s) ready to import.</b><button type="button" className="save-button" disabled={submitting} onClick={() => { void submitImport() }}>{submitting ? 'Importing…' : 'Submit for approval'}</button></div>}
      </div>
    </section>
  </div>
}
