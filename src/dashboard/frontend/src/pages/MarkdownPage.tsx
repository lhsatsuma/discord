import type { ReactNode } from 'react'
import privacyPolicy from '../policies/PRIVACY_POLICY.md?raw'
import termsOfService from '../policies/TERMS_OF_SERVICE.md?raw'
import { Icon } from '../components/Icon'
import { PageHeading } from '../components/PageHeading'

type DocumentName = 'privacy-policy' | 'terms-of-service'
type Props = { document: DocumentName }

function inlineMarkdown(source: string, prefix: string): ReactNode[] {
  return source.split(/(\*\*.+?\*\*|`[^`]+`|\[[^\]]+\]\([^)]+\))/g).filter(Boolean).map((part, index) => {
    const key = `${prefix}-${index}`
    if (part.startsWith('**') && part.endsWith('**')) return <strong key={key}>{part.slice(2, -2)}</strong>
    if (part.startsWith('`') && part.endsWith('`')) return <code key={key}>{part.slice(1, -1)}</code>

    const link = part.match(/^\[([^\]]+)\]\(([^)]+)\)$/)
    if (!link) return part
    const [, label, markdownHref] = link
    const href = markdownHref === './PRIVACY_POLICY.md' ? '/privacy-policy' : markdownHref
    if (!/^https:\/\//i.test(href) && !href.startsWith('/')) return label
    return <a key={key} href={href} target={href.startsWith('https://') ? '_blank' : undefined} rel={href.startsWith('https://') ? 'noreferrer' : undefined}>{label}</a>
  })
}

function isBlockStart(line: string): boolean {
  return /^(#{1,6}\s|>\s?|[-*]\s|\d+\.\s|---+$)/.test(line)
}

export function renderMarkdown(source: string): ReactNode[] {
  const lines = source.replace(/^#\s+[^\n]+\n+/, '').split(/\r?\n/)
  const blocks: ReactNode[] = []
  let index = 0
  let key = 0

  while (index < lines.length) {
    const line = lines[index].trim()
    if (!line) { index++; continue }
    const heading = line.match(/^(#{1,6})\s+(.+)$/)
    if (heading) {
      const level = heading[1].length
      const children = inlineMarkdown(heading[2], `h${key}`)
      if (level === 2) blocks.push(<h2 key={key}>{children}</h2>)
      else if (level === 3) blocks.push(<h3 key={key}>{children}</h3>)
      else blocks.push(<h4 key={key}>{children}</h4>)
      key++; index++; continue
    }
    if (/^---+$/.test(line)) { blocks.push(<hr key={key++}/>); index++; continue }
    if (line.startsWith('>')) {
      const quote: string[] = []
      while (index < lines.length && lines[index].trim().startsWith('>')) quote.push(lines[index++].trim().replace(/^>\s?/, ''))
      blocks.push(<blockquote key={key}>{inlineMarkdown(quote.join(' '), `q${key}`)}</blockquote>)
      key++; continue
    }
    const tableHeader = line.startsWith('|') && lines[index + 1]?.trim().startsWith('|')
      ? line.replace(/^\||\|$/g, '').split('|').map(cell => cell.trim())
      : null
    const tableSeparator = lines[index + 1]?.trim().replace(/^\||\|$/g, '').split('|').every(cell => /^:?-{3,}:?$/.test(cell.trim()))
    if (tableHeader && tableSeparator) {
      const rows: string[][] = []
      index += 2
      while (index < lines.length && lines[index].trim().startsWith('|')) {
        rows.push(lines[index].trim().replace(/^\||\|$/g, '').split('|').map(cell => cell.trim()))
        index++
      }
      blocks.push(<table key={key}><thead><tr>{tableHeader.map((cell, cellIndex) => <th key={cellIndex}>{inlineMarkdown(cell, `th${key}-${cellIndex}`)}</th>)}</tr></thead><tbody>{rows.map((row, rowIndex) => <tr key={rowIndex}>{tableHeader.map((_, cellIndex) => <td key={cellIndex}>{inlineMarkdown(row[cellIndex] || '', `td${key}-${rowIndex}-${cellIndex}`)}</td>)}</tr>)}</tbody></table>)
      key++; continue
    }
    const unordered = /^[-*]\s+/.test(line)
    const ordered = /^\d+\.\s+/.test(line)
    if (unordered || ordered) {
      const items: ReactNode[] = []
      while (index < lines.length) {
        const item = lines[index].trim().match(unordered ? /^[-*]\s+(.+)$/ : /^\d+\.\s+(.+)$/)
        if (!item) break
        items.push(<li key={`${key}-${items.length}`}>{inlineMarkdown(item[1], `li${key}-${items.length}`)}</li>)
        index++
      }
      blocks.push(unordered ? <ul key={key}>{items}</ul> : <ol key={key}>{items}</ol>)
      key++; continue
    }

    const paragraph = [line]
    index++
    while (index < lines.length && lines[index].trim() && !isBlockStart(lines[index].trim())) paragraph.push(lines[index++].trim())
    blocks.push(<p key={key}>{inlineMarkdown(paragraph.join(' '), `p${key}`)}</p>)
    key++
  }

  return blocks
}

export function MarkdownPage({ document }: Props) {
  const isPrivacyPolicy = document === 'privacy-policy'
  const title = isPrivacyPolicy ? 'Privacy Policy' : 'Terms of Service'
  const source = isPrivacyPolicy ? privacyPolicy : termsOfService

  return <div className="markdown-page">
    <PageHeading
      eyebrow="PUBLIC DOCUMENT"
      title={<>{title}<span className="heading-period">.</span></>}
      description="GuildDesk policies for using the bot and dashboard."
      action={<a className="back-button markdown-back" href="/login"><Icon name="back" size={16}/> Back to login</a>}
    />
    <article className="markdown-document">{renderMarkdown(source)}</article>
    <nav className="markdown-document-links" aria-label="Other legal document">
      <a href={isPrivacyPolicy ? '/terms-of-service' : '/privacy-policy'}>View {isPrivacyPolicy ? 'Terms of Service' : 'Privacy Policy'}</a>
    </nav>
  </div>
}
