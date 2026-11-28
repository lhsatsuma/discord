import userCommands from '../content/User-Commands.md?raw'
import { PageHeading } from '../components/PageHeading'
import { renderMarkdown } from './MarkdownPage'

export function UserCommandsPage() {
  return <div className="markdown-page">
    <PageHeading
      eyebrow="BOT GUIDE"
      title={<>User Commands<span className="heading-period">.</span></>}
      description="Commands available to members in servers where DBIKE BOT is installed."
      action={<a className="back-button markdown-back" href="/home">Back to dashboard</a>}
    />
    <article className="markdown-document">{renderMarkdown(userCommands)}</article>
  </div>
}
