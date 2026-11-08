import lang from '#includes/lang.ts';
import { SlashCommandBuilder, PermissionFlagsBits, MessageFlags, ChatInputCommandInteraction } from "discord.js";
import appCommandBase from "#includes/commands/appCommandBase.ts";
import utils from '#includes/utils.ts';

export default class pinguser extends appCommandBase
{
    name = 'pinguser';
    cooldown = 30;
    async build()
    {
        this.builded = new SlashCommandBuilder();
        this.builded
		.setName(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_NAME`))
		.setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_DESCRIPTION`))
		.addUserOption(option =>
			option
				.setName('target')
				.setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_OPTION_TARGET`))
				.setRequired(true))
		.addIntegerOption(option =>
			option
				.setName('times')
				.setDescription(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_OPTION_TIMES`))
				.setRequired(true)
				.setMinValue(1)
				.setMaxValue(10))
		.setDefaultMemberPermissions(PermissionFlagsBits.Administrator)
        return super.build();
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const target = interaction.options.getUser('target');
		const times = interaction.options.getInteger('times') ?? 0;
		interaction.reply({
			content: lang.translate(this.name, `CMD_${this.name.toUpperCase()}_SUCCESS`),
			flags: [MessageFlags.Ephemeral],
		});

		const channel = interaction.channel;
        if (!channel?.isSendable()) {
            return false;
        }
		
		let messageSended = null;
		for(let i=0;i<times;i++){
		 	messageSended = await channel.send(lang.translate(this.name, `CMD_${this.name.toUpperCase()}_SUCCESS_USER`, [target?.id]));
			await utils.sleep(1500);
			if(i<times-1) {
				await messageSended.delete();
			}
		}
    }
}