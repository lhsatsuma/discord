const API = ''
const inFlightGets = new Map<string, Promise<unknown>>()

export class ApiError extends Error {
  readonly status: number

  constructor(message: string, status: number) {
    super(message)
    this.name = 'ApiError'
    this.status = status
  }
}

export async function api<T>(path: string, token: string, init?: RequestInit): Promise<T> {
  const method = (init?.method || 'GET').toUpperCase()
  const requestKey = `${method}:${path}:${token}`
  if (method === 'GET') {
    const pending = inFlightGets.get(requestKey)
    if (pending) return pending as Promise<T>
  }

  const request = fetch(`${API}/api${path}`, {
    ...init,
    headers: { 'Content-Type': 'application/json', Authorization: `Bearer ${token}`, ...init?.headers },
  }).then(async response => {
    if (!response.ok) {
      const payload = await response.json().catch(() => ({})) as { message?: string; errors?: Record<string, string[]> }
      const detail = payload.errors ? Object.values(payload.errors).flat()[0] : payload.message
      throw new ApiError(detail || `Request failed (${response.status})`, response.status)
    }
    return response.json() as Promise<T>
  })

  if (method !== 'GET') return request

  const trackedRequest = request.finally(() => {
    if (inFlightGets.get(requestKey) === trackedRequest) inFlightGets.delete(requestKey)
  })
  inFlightGets.set(requestKey, trackedRequest)
  return trackedRequest
}
