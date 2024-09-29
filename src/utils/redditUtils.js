
const Reddit = require('reddit');
const {get} = require("pidusage/lib/history");
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
        return;
    }

    async random()
    {
        let res = await this.lib().get(`/r/${bot_cfg.REDDIT_SUBREDDIT_MEMES}/top`,{
            t: 'week',
            limit: 100,
        });

        if(res.data.children.length) {
            const childrens = res.data.children.filter((child) => child.data.post_hint == 'image');

            let randInt = getUtils().randomInt(0, childrens.length - 1);

            return childrens[randInt].data;
        }
        return null;
    }
}

module.exports = RedditUtils;