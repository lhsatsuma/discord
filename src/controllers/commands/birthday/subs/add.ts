import { SlashCommandSubcommandBuilder, ChatInputCommandInteraction, MessageFlags} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandInterface from '#interfaces/appSubCommandInterface.ts';
import model_birthday from '#models/birthday.ts';
export default class birthday_add extends appSubCommandInterface
{
    cooldown = 3;
    parentName = 'birthday';
    name = 'add';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))
        .addUserOption(option =>
                option
                    .setName('user')
                    .setDescription(lang.translate('birthday', `SUBCMD_${this.name.toUpperCase()}_OPTION_USER`))
                    .setRequired(true)
            )
            .addStringOption(option =>
                option.setName('birthdate')
                    .setDescription(lang.translate('birthday', `SUBCMD_${this.name.toUpperCase()}_OPTION_DAY`))
                    .setRequired(true)
                    .setMinLength(5)
                    .setMaxLength(5)
            )
        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        let user = interaction.options.getUser('user');
        let birthdate = interaction.options.getString('birthdate');

        let birthdate_split = birthdate.split('/');
        
        if(birthdate_split.length != 2
            || isNaN(parseInt(birthdate_split[0]))
            || isNaN(parseInt(birthdate_split[1]))
            || parseInt(birthdate_split[0]) > 12
            || parseInt(birthdate_split[1]) > 31
        ){
            await interaction.reply({
                content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_FORMAT_ERROR`),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }

        let birthdayClass = new model_birthday();
        
        await birthdayClass.selectActive({server: interaction.guild.id, user_id: user.id});

        let birthdate_full = new Date('1500-'+birthdate_split[1].padStart(2, '0')+'-'+birthdate_split[0].padStart(2, '0'));

        birthdayClass.birthdate = birthdate_full;
        birthdayClass.server = interaction.guild.id;
        birthdayClass.user_id = user.id;
        birthdayClass.username = user.username;
        birthdayClass.created_by = interaction.user.id;
        console.log(await birthdayClass.save());

        console.log(birthdayClass.id);
        if(!await birthdayClass.save()){
            await interaction.reply({
                content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_FORMAT_ERROR`),
                flags: [MessageFlags.Ephemeral]
            });
            return true;
        }


        await interaction.reply({
            content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_SUCCESS`),
            flags: [MessageFlags.Ephemeral]
        });
        return true;
    }
}