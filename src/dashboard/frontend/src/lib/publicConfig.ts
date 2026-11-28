export type DashboardPublicLinks = {
  bot_invite: string | null
  support_invite: string | null
}

let pendingRequest: Promise<DashboardPublicLinks> | null = null

export function getDashboardPublicLinks(): Promise<DashboardPublicLinks> {
  if (!pendingRequest) {
    pendingRequest = fetch('/api/public-config', { headers: { Accept: 'application/json' } })
      .then(async response => {
        if (!response.ok) throw new Error(`Public dashboard configuration request failed (${response.status}).`)
        return response.json() as Promise<{ links?: Partial<DashboardPublicLinks> }>
      })
      .then(payload => ({
        bot_invite: safeHttpsUrl(payload.links?.bot_invite),
        support_invite: safeHttpsUrl(payload.links?.support_invite),
      }))
      .catch(reason => {
        pendingRequest = null
        throw reason
      })
  }

  return pendingRequest
}

function safeHttpsUrl(value: unknown): string | null {
  if (typeof value !== 'string') return null
  try {
    const url = new URL(value)
    return url.protocol === 'https:' ? url.toString() : null
  } catch {
    return null
  }
}
