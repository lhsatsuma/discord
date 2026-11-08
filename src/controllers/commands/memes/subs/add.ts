import { SlashCommandSubcommandBuilder, ModalBuilder, LabelBuilder, TextInputBuilder, TextInputStyle, ChatInputCommandInteraction} from 'discord.js';
import lang from '#includes/lang.ts';
import appSubCommandInterface from '#interfaces/appSubCommandInterface.ts';
import modal_memes_add from '#modals/memes/add.ts';
export default class memes_add extends appSubCommandInterface
{
    cooldown = 3;
    parentName = 'memes';
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
        const modal = await new modal_memes_add(this.main).init();
        await interaction.showModal(modal.builded);
        return true;
    }
}