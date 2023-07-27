const logControl = require("../../../utils/LogControl");
module.exports = {
    data: (subcommand) =>
        subcommand
            .setName('logs')
            .setDescription('[SUPERADMIN] Check logs')
            .addIntegerOption(option =>
                option
                    .setName('lines')
                    .setDescription('Lines to return')
                    .setRequired(true)
                    .setMinValue(1)
                    .setMaxValue(100))
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
        const lines = interaction.options.getInteger('lines') ? interaction.options.getInteger('lines') : 10;
        const run = interaction.options.getString('run') ? interaction.options.getString('run') : 'app';

        let logCheck = new logControl(bot_cfg.LOG_DIR, run+'.log', {level_register: []});
        let result = await logCheck.getLines(lines);


        if(result.length > 1900){
            result = result.slice(-1900);
        }

        interaction.reply({
            content: '```'+result+'```',
            ephemeral: true
        })
        return true;
    },
};