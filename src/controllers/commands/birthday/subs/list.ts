import { SlashCommandSubcommandBuilder, ChatInputCommandInteraction, MessageFlags} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandBase from '#includes/commands/appSubCommandBase.ts';
import model_birthday from '#models/birthday.ts';
export default class birthday_lsit extends appSubCommandBase
{
    cooldown = 3;
    parentName = 'birthday';
    name = 'list';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        let birthdayClass = new model_birthday();
        
        let birthdays = await birthdayClass.getMembersBirthdays({server: interaction.guild?.id});

        if(birthdays == false){
            await interaction.reply({
                content: lang.translate('globals', 'DB_ERROR'),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        if(!birthdays.length){
            await interaction.reply({
                content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NO_MEMBERS`)
            });
            return true;
        }

        const pag_builded = this.buildPagination(interaction, {limit: 10});
        pag_builded.setDescriptions(birthdays.map((birthday) => {
            return '<@'+birthday.user_id+'> : '+new Date(birthday.birthdate).toLocaleDateString(lang.locale, {
                day: '2-digit',
                month: '2-digit'
            })
        }));
        pag_builded.render();

        return true;
    }
}