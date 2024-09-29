
const Reddit = require('reddit');
const {EmbedBuilder} = require("discord.js");
class RedditUtils
{
    constructor()
    {
    }

    validateCfg()
    {
        return !!bot_cfg.REDDIT_USER && !!bot_cfg.REDDIT_PASSWORD && !!bot_cfg.REDDIT_APP_ID && !!bot_cfg.REDDIT_CLIENT_SECRET;
    }

    lib()
    {
        if(this.validateCfg()){
            return new Reddit({
                username: bot_cfg.REDDIT_USER,
                password: bot_cfg.REDDIT_PASSWORD,
                appId: bot_cfg.REDDIT_APP_ID,
                appSecret: bot_cfg.REDDIT_CLIENT_SECRET,
            });
        }
    }

    async random()
    {
        let rand_subreddit = bot_cfg.REDDIT_SUBREDDIT_MEMES[getUtils().randomInt(0, bot_cfg.REDDIT_SUBREDDIT_MEMES.length-1)];
        let res = await this.lib().get(`/r/${rand_subreddit}/top`,{
            t: 'month',
            limit: 100,
        });

        if(res.data.children.length) {
            const childrens = res.data.children.filter((child) => !child.data.is_video);

            let randInt = getUtils().randomInt(0, childrens.length - 1);

            return {
                embeds: [
                    new EmbedBuilder()
                        .setColor(getUtils().getRandColor())
                        .setImage(childrens[randInt].data.url)
                        .setFooter({text: '#0 | ' + childrens[randInt].data.title + ' | Reddit: '+rand_subreddit})
                        .setTimestamp()
                ],
            };
        }
        return null;
    }
}

module.exports = RedditUtils;