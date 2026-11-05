import { SlashCommandSubcommandBuilder, ModalBuilder, LabelBuilder, TextInputBuilder, TextInputStyle, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandInterface from '#includes/commands/appSubCommandInterface.ts';
import modal_jokes_add from '#modals/jokes/add.ts';
export default class jokes_add extends appSubCommandInterface
{
    cooldown = 3;
    parentName = 'jokes';
    name = 'add';

    build()
    {
        this.builded = new SlashCommandSubcommandBuilder()
        .setName(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_NAME`))
        .setDescription(lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_DESCRIPTION`))

        return this;
    }

    async execute(interaction: ChatInputCommandInteraction)
    {
        const modal = await new modal_jokes_add(this.main).init();
        await interaction.showModal(modal.builded);
        return true;
    }
}