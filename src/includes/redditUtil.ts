import reddit from 'reddit';
import {Colors, EmbedBuilder} from 'discord.js';
import utils from '#includes/utils.ts';
import log from '#includes/log.ts';
import lang from '#includes/lang.ts';
class redditUtil
{
    validateCfg()
    {
        return process.env.REDDIT_USER && !!process.env.REDDIT_PASSWORD && !!process.env.REDDIT_APP_ID && !!process.env.REDDIT_CLIENT_SECRET;
    }

    lib()
    {
        if(this.validateCfg()){
            return new reddit({
                username: process.env.REDDIT_USER,
                password: process.env.REDDIT_PASSWORD,
                appId: process.env.REDDIT_APP_ID,
                appSecret: process.env.REDDIT_CLIENT_SECRET,
            });
        }

        throw new Error(lang.translate('memes', 'NO_CONFIG_REDDIT'));
    }

    async random()
    {
        if(!process.env.REDDIT_SUBREDDIT_MEMES){
            log.info(lang.translate('memes', 'NO_SUBREDDIT_FOUND'));
            return null;
        }

        let subreddits = process.env.REDDIT_SUBREDDIT_MEMES.split(',');
        let rand_subreddit = subreddits[utils.randomInt(0, subreddits.length - 1)];
        let res = await this.lib().get(`/r/${rand_subreddit}/top`,{
            t: 'year',
            limit: 100,
        });

        if(res.data.children.length) {
            const childrens = res.data.children.filter((child) => !child.data.is_video);

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