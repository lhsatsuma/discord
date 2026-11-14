# Privacy Policy

**Last updated: November 13, 2026**

This policy explains how DBIKE BOT (the "Bot") handles data when it is added to a Discord server or used by its members. The Bot is operated by its maintainer on infrastructure hosted on Amazon Web Services (AWS). The Bot is not affiliated with, endorsed by, or operated by Discord, Amazon, Reddit, or Imgur.

> **Operator contact:** Replace this notice with an email address or another contact channel maintained by the operator before publishing this policy.

## 1. Data We Handle

Depending on the features enabled and used in each server, the Bot may receive or store:

- **Server data:** Server IDs and names, channel IDs, and Bot settings, including administration and birthday channels, channels subject to autoban, message deletion periods, subreddit lists, and Reddit meme selection odds.
- **Member data:** Discord user IDs, usernames, and birthdays voluntarily provided by members. The Bot may also retrieve member information from Discord to run commands, announce birthdays, and apply moderation rules.
- **Command usage data:** Information submitted through commands and forms, such as selected user IDs, birthdays, text, and settings. Technical logs may record usernames, server names, channel IDs, commands, and submitted option values.
- **Messages for moderation:** The Bot receives message events from servers where it is installed to check channels configured for autoban. When a message triggers that rule, its content may be included in a moderation log embed sent to configured administration channels. The Bot may also search for and delete the member's recent messages within the configured period and in channels and message histories it can access.
- **Content submitted for community features:** Jokes, memes, images, links, and pickup lines submitted through the corresponding commands.
- **Technical data:** Errors and operational events recorded in log files on the Bot's host.

The Bot does not intentionally request Discord user passwords or payment information.

## 2. Purposes

Data is handled only as needed to:

- provide commands, games, birthday announcements, and other requested features;
- store settings and content associated with each server;
- enforce moderation rules configured by administrators, create moderation logs, and attempt message deletion according to those settings;
- operate, secure, diagnose, and maintain the Bot; and
- prevent abuse and investigate errors or failures.

Each server's administrators control features such as administration channels, autoban channels, deletion periods, and meme settings. They are responsible for informing their members about the settings and moderation actions they choose to enable.

## 3. Storage and Retention

- Functional data and settings are stored in a PostgreSQL database associated with the Bot instance.
- Redis is used to temporarily cache some settings. Cache entries have short expiration periods defined by each feature and do not replace database records.
- Operational logs are stored on the infrastructure running the Bot.
- The Bot host runs on AWS. The hosting region and any region changes are determined by the operator and may affect where data is processed.

The project does not define a general retention period and does not automatically delete all records when the Bot leaves a server. Database records and logs may therefore remain until deleted by the operator or an authorized administrator. Birthdays and submitted content may be removable through available commands where supported; for other data, contact the operator using the details above. The operator should establish and apply retention periods appropriate to their obligations.

## 4. Sharing and Third-Party Services

The Bot does not sell personal data. Data may be processed or transmitted in these circumstances:

- **Discord:** Interactions pass through Discord and its APIs. The Bot may send replies, announcements, moderation embeds, and ban or message-deletion actions to Discord. Discord use is also subject to the [Discord Privacy Policy](https://discord.com/privacy).
- **AWS:** Hosting infrastructure and services used by the operator may process technical and stored data to run the Bot, subject to the services used and their policies.
- **Reddit:** When the integration is configured and selected, the Bot queries Reddit's API for posts in configured subreddits. This query does not require members' private messages to be sent to Reddit. API use is subject to Reddit's policies.
- **Imgur:** When a user submits an image through the memes command, the Bot may send it to Imgur for hosting. The image is then subject to Imgur's policies and availability settings.

The operator does not control the privacy, availability, or retention practices of these external services.

## 5. Access, Security, and Choices

Access to the database, Redis, and logs should be restricted to the operator and authorized persons. The operator maintains technical and administrative safeguards appropriate to the circumstances, but no internet-connected system can be guaranteed to be secure or continuously available.

Members may choose not to provide optional information, such as birthdays or content for commands. Server administrators may remove the Bot to stop future processing of events from that server; removing the Bot does not by itself delete data already stored.

To request access to, correction of, or deletion of data, contact the operator through the channel listed at the beginning of this policy. The operator may need to verify a request and may retain data when required by law or reasonably necessary for security and operations.

## 6. Children and Minimum Age

The Bot is not directed to children below the minimum age required by Discord or applicable law. The operator does not intentionally seek data from people who are not legally permitted to use Discord. If you believe data was provided improperly, contact the operator.

## 7. Changes

This policy may be updated when the Bot's features, infrastructure, or applicable obligations change. The current version will be published in this file with a revised update date.

## 8. Notice

This document is a general description of the Bot's operation and is not legal advice. Before making it available to users, the operator should review it to reflect their identity, location, AWS region, actual retention practices, and applicable laws.
