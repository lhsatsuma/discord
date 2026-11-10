import Reddit from 'reddit';
import {EmbedBuilder} from 'discord.js';
import utils from '#includes/utils.ts';
import log from '#includes/log.ts';
import lang from '#includes/lang.ts';
import config from '#includes/config.ts';
import model_servers from '#models/server.ts';
class redditUtil
{
    lib()
    {
        const {REDDIT_USER, REDDIT_PASSWORD, REDDIT_APP_ID, REDDIT_CLIENT_SECRET} = config;
        if (!REDDIT_USER || !REDDIT_PASSWORD || !REDDIT_APP_ID || !REDDIT_CLIENT_SECRET) {
            throw new Error(lang.translate('memes', 'NO_CONFIG_REDDIT'));
        }

        return new Reddit({
            username: REDDIT_USER,
            password: REDDIT_PASSWORD,
            appId: REDDIT_APP_ID,
            appSecret: REDDIT_CLIENT_SECRET,
        });
    }

    async random(serverId: string)
    {
        const settings = await new model_servers().getRedditSettings(serverId);
        if (settings === false) {
            return null;
        }

        if (!settings.subreddits_memes.length) {
            log.info(lang.translate('memes', 'NO_SUBREDDIT_FOUND', [serverId]));
            return null;
        }

        if (settings.reddit_odd_memes <= 0 || utils.randomInt(1, 10) > settings.reddit_odd_memes) {
            return null;
        }

        const subreddits = settings.subreddits_memes;
        let rand_subreddit = subreddits[utils.randomInt(0, subreddits.length - 1)];
        let res = await this.lib().get(`/r/${rand_subreddit}/top`,{
            t: 'year',
            limit: 100,
        });

        if(res.data.children.length) {
            const childrens = res.data.children.filter((child: any) => !child.data.is_video);
            if (!childrens.length) {
                return null;
            }

            let randInt = utils.randomInt(0, childrens.length - 1);
            return {
                embeds: [
                    new EmbedBuilder()
                        .setColor('Random')
                        .setImage(childrens[randInt].data.url)
                        .setFooter({text: `${rand_subreddit} | ${childrens[randInt].data.title}`})
                ],
            };
        }
        return null;
    }
}

const instance = new redditUtil();
export default instance;