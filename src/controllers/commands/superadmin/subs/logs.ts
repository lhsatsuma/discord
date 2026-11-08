import { SlashCommandSubcommandBuilder, EmbedBuilder, MessageFlags, Colors, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import log from '#includes/log.ts';
export default class superadmin_logs extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'superadmin';
    name = 'logs';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`));

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        if(process.env.DISCORD_BOT_ADMIN_CHANNEL != interaction.channel.id){
            await interaction.reply({
                content: lang.translate('globals', 'CHANNEL_NOT_ALLOWED'),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        const run = interaction.options.getString('run') ?? 'app';

        let result = await log.getLines(30);
        let result_lines = result.split('\n');

        let resultArr = [];
        let description = '```';
        result_lines.forEach((line) => {
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
                content: ipt
            });
        }
        return true;
    }
}