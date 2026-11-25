# User Commands

These commands are available in servers where the bot is installed. Some features depend on server settings. Command names may appear translated to match the server's language.

## Birthdays

| Command | What it does |
|---|---|
| `/birthday add` | Save your birthday. Use `MM/DD` in English or `DD/MM` in Portuguese. |
| `/birthday list` | Show birthdays saved for this server. |
| `/birthday remove` | Remove a saved birthday. |

Birthday announcements are sent daily at 08:00 in the bot's configured time zone. The server owner selects the announcement channels in the [Admin Guide](Admin-Guide).

## Games

| Command | What it does |
|---|---|
| `/jankenpon play` | Play rock-paper-scissors against the bot. |
| `/jankenpon status` | See your wins, losses, and draws in this server. |
| `/jankenpon reset` | Reset your Jankenpon statistics in this server. |

## Trivia

| Command | What it does |
|---|---|
| `/trivia help` | Show enabled categories, daily limit, difficulty levels, timer, and scoring rules. |
| `/trivia play` | Answer a random question at the difficulty you choose. |
| `/trivia rank` | Show the server's top 10 players by total points. |

Each question has a 60-second timer that starts as soon as the question is sent. Maximum points equal the difficulty multiplied by 100. A correct answer earns at least half that maximum, with a speed bonus that scales across the 50 seconds after the 10-second minimum scoring time. A fast answer can earn the full maximum. The answer result shows points earned and the maximum possible points. Incorrect answers earn zero points, and the correct answer is not revealed after a wrong guess.

The server administrator chooses the question categories and a daily limit of 1 to 5 questions per player in the dashboard. Questions are random. If the selected difficulty has no unanswered questions but other difficulties still do, the bot lists the available difficulties. Previously answered questions can repeat only after the player has answered every question in the enabled categories across all difficulties.

## Jokes, memes, and pickup lines

| Commands | What they do |
|---|---|
| `/jokes random`, `/jokes add` | Show a saved joke or submit one. |
| `/memes random`, `/memes add`, `/memes list`, `/memes get` | View, submit, list, or search server memes. Reddit fetching requires server settings and credentials from the system owner. |
| `/pickup-lines random`, `/pickup-lines add` | Show or submit a pickup line. |

## Administrator-only command

`/pinguser` is restricted to administrators. Server configuration is managed through the dashboard; the old `/admin config` and channel configuration commands have been removed. See the [Admin Guide](Admin-Guide).
