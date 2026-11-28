import { TriviaLibraryPage } from './TriviaLibraryPage'

type Props = { token: string; onNavigate: (path: string) => void }

export function TriviaCategoriesPage({ token, onNavigate }: Props) {
  return <TriviaLibraryPage token={token} section="categories" isSuperadmin={false} onNavigate={onNavigate}/>
}
