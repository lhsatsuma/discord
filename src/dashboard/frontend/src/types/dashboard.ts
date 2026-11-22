export type User = { id: string; username: string; avatar: string | null }
export type Server = { id: string; name: string; icon: string | null }
export type Channel = { id: string; name: string }
export type SettingGroup = 'autoban' | 'memes' | 'channels' | 'voice' | 'welcome'
export type Page = 'login' | 'home' | 'server' | SettingGroup | 'callback'

export type Config = {
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
}

export const blankConfig: Config = {
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
}
