const logControl = require("../../../utils/LogControl");
const {pagination, ButtonTypes, ButtonStyles} = require("@devraelfreeze/discordjs-pagination");
const {get} = require("pidusage/lib/history");
module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('logs')
            .setDescription('[SUPERADMIN] Check logs')
            .addStringOption(option =>
                option.setName('run')
                    .setDescription('Log of app or scheduler')
                    .addChoices(
                        { name: 'app', value: 'app' },
                        { name: 'scheduler', value: 'scheduler' },
                    ),
            ),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: 'Not allowed to execute this command here.',
                ephemeral: true,
            });
            return false;
        }
        const run = interaction.options.getString('run') ?? 'app';

        let logCheck = new logControl(bot_cfg.LOG_DIR, run+'.log', {level_register: []});
        let result = await logCheck.getLines(30);
        result = result.toString().split('\n');

        let resultArr = [];
        let description = '```';
        result.forEach((line) => {
            if(description.length + line.length > 1900){
                description += '```';
                resultArr.push(description);
                description = '```';
            }
            description += '\n'+line;
        });
        if(description !== '```'){
            description += '```';
            resultArr.push(description);
        }

        for (const ipt of resultArr) {
            await interaction.channel.send({
               content: ipt,
               ephemeral: true,
            });
        }
        return true;
    },
};