const logControl = require("../../../utils/LogControl");
module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('logs')
            .setDescription(translate('superadmin', 'CMD_LOGS'))
            .addStringOption(option =>
                option.setName('run')
                    .setDescription(translate('superadmin', 'CMD_LOGS_OPTION_RUN'))
                    .addChoices(
                        { name: translate('superadmin', 'CMD_LOGS_OPTION_RUN_VALUE_APP'), value: 'app' },
                        { name: translate('superadmin', 'CMD_LOGS_OPTION_RUN_VALUE_SCHEDULER'), value: 'scheduler' },
                    ),
            ),
    async execute(interaction) {
        if(!getUtils().channelSuperAdmin(interaction.channel.id)){
            await interaction.reply({
                content: translate('globals', 'CHANNEL_NOT_ALLOWED'),
                ephemeral: true,
            });
            return false;
        }
        const run = interaction.options.getString('run') ?? 'app';

        let logCheck = new logControl(run+'.log', {level_register: []});
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

        await interaction.deferReply();
        await interaction.deleteReply();

        for (const ipt of resultArr) {
            await interaction.channel.send({
               content: ipt,
               ephemeral: true,
            });
        }
        return true;
    },
};