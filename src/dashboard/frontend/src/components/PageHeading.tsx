import type { ReactNode } from 'react'

type Props = {
  eyebrow: string
  title: ReactNode
  description: string
  action?: ReactNode
}

export function PageHeading({ eyebrow, title, description, action }: Props) {
  return <div className="page-heading">
    <div><div className="eyebrow"><span className="eyebrow-line"/>{eyebrow}</div><h1>{title}</h1><p>{description}</p></div>
    {action}
  </div>
}
