import { TriviaLibraryPage } from './TriviaLibraryPage'

type Props = { token: string; isSuperadmin: boolean; onNavigate: (path: string) => void }

export function TriviaQuestionsPage({ token, isSuperadmin, onNavigate }: Props) {
  return <TriviaLibraryPage token={token} section="questions" isSuperadmin={isSuperadmin} onNavigate={onNavigate}/>
}
