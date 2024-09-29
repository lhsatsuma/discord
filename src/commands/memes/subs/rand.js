const BeanMemes = getUtils().requireAgain(process.cwd()+'/src/models/Memes.js');
const reddit = getUtils().requireAgain(process.cwd()+'/src/utils/redditUtils.js');

module.exports = {
    data: (subcommand) =>
        subcommand
            .setName(translate('memes', 'CMD_RAND'))
            .setDescription(translate('memes', 'CMD_RAND_DESCRIPTION'))
    ,
    cooldown: 5,
    async execute(interaction) {
        let bean = new BeanMemes();
        bean.server = interaction.guildId;
        let redditUtils = new reddit();
        let search_db = true;

        if(redditUtils.validateCfg()) {
            let rand = getUtils().randomInt(1, 10);
            if (rand <= bot_cfg.REDDIT_MEMES_ODD) {
                let randReddit = await redditUtils.random();
                if(randReddit){
                    bean.url = randReddit.url;
                    bean.order_id = 0;
                    bean.name = randReddit.title.replace(/<\/[^>]+(>|$)/g, "") + ` | Reddit: ${bot_cfg.REDDIT_SUBREDDIT_MEMES}`;
                    search_db = false;
                }
            }
        }

        if(search_db) {
            let results = await bean.selectRandom();

            if (results === false) {
                interaction.reply({
                    content: translate('globals', 'DB_ERROR'),
                    ephemeral: true
                });
                return false;
            }


            //Protection against random not found
            if (!bean.id) {
                await interaction.reply({
                    content: translate('memes', 'NOT_FOUND'),
                    ephemeral: true
                });
                return true;
            }
        }

        let embedMsg = bean.mountEmbed();

        await interaction.reply(embedMsg);
    },
}