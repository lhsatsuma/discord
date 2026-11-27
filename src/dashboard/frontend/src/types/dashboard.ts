export type User = { id: string; username: string; avatar: string | null; is_superadmin: boolean }
export type Server = { id: string; name: string; icon: string | null }
export type Channel = { id: string; name: string }
export const localeOptions = [
  { value: 'en-US', label: 'English (United States)' },
  { value: 'pt-BR', label: 'Português (Brasil)' },
] as const
export type LocaleCode = typeof localeOptions[number]['value']
export const isLocaleCode = (value: string): value is LocaleCode =>
  localeOptions.some(locale => locale.value === value)

export type SettingGroup = 'autoban' | 'memes' | 'channels' | 'voice' | 'welcome' | 'locale' | 'trivia'
export type Page = 'login' | 'home' | 'server' | SettingGroup | 'trivia-content' | 'superadmin-status' | 'superadmin-logs' | 'superadmin-trivia' | 'callback'
export type TriviaCategory = { id: string; short_description: string; description: string; locale: LocaleCode; approved: boolean }

export type Config = {
  locale: LocaleCode
  reddit_odd_memes: number
  subreddits_memes: string[]
  autoban_del_period: number
  autoban_punishment: 'ban' | 'mute'
  autoban_mute_days: number
  send_voice_update: boolean
  welcome_message_active: boolean
  welcome_channel_id: string | null
  welcome_message: string
  admin_channels: string[]
  forbidden_channels: string[]
  trivia_categories: string[]
  trivia_questions_per_day: number
}

export type ServerSettingsPageProps = {
  server: Server | null
  config: Config
  loading: boolean
  saving: boolean
  error: string
  saveError: string
  notice: string
  onBack: () => void
  onDismissError: () => void
  onConfigChange: <K extends keyof Config>(key: K, value: Config[K]) => void
  onSave: () => void
}

export const blankConfig: Config = {
  locale: 'en-US',
  reddit_odd_memes: 5,
  subreddits_memes: [],
  autoban_del_period: 60,
  autoban_punishment: 'ban',
  autoban_mute_days: 7,
  send_voice_update: false,
  welcome_message_active: false,
  welcome_channel_id: null,
  welcome_message: '',
  admin_channels: [],
  forbidden_channels: [],
  trivia_categories: [],
  trivia_questions_per_day: 3,
}
