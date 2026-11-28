import { TriviaLibraryPage } from './TriviaLibraryPage'

type Props = { token: string; onNavigate: (path: string) => void }

export function TriviaQuestionsPage({ token, onNavigate }: Props) {
  return <TriviaLibraryPage token={token} section="questions" onNavigate={onNavigate}/>
}
