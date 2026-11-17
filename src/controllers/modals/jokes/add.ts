/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

import { ModalSubmitInteraction, MessageFlags, LabelBuilder, TextInputBuilder, TextInputStyle, Colors, EmbedBuilder} from 'discord.js';
import lang from '#includes/lang.ts';
import appModalBase from '#includes/commands/appModalBase.ts';
import model_jokes from '#models/jokes.ts';
export default class modal_jokes_add extends appModalBase
{
    cooldown = 3;
    parentName = 'jokes';
    name = 'add';

    async buildComponents()
    {
        const modal = this.builded;
        if (!modal) {
            throw new Error('Jokes add modal must be initialized before building components.');
        }

        let textLabel = new LabelBuilder()
                .setLabel(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_COMPONENT_LABEL_CONTENT`))
                .setDescription(lang.translate(this.parentName, `MODAL_${this.name.toUpperCase()}_COMPONENT_DESCRIPTION_CONTENT`))
                .setTextInputComponent(
                    new TextInputBuilder()
                        .setCustomId(`${this.name}_content`)
                        .setStyle(TextInputStyle.Paragraph)
                        .setMaxLength(1_000)
                        .setMinLength(10)
                );
        modal.addLabelComponents(textLabel);
        return this;
    }

    async execute(interaction: ModalSubmitInteraction)
    {
        let content = interaction.fields.getTextInputValue(`${this.name}_content`);

        let jokeClass = new model_jokes();
        let result = await jokeClass.insert({
            locale: lang.locale,
            content: content,
            created_by: interaction.user.id
        });

        if(result == false){
            await interaction.reply({
                content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_ERROR`),
                flags: [MessageFlags.Ephemeral]
            });
            return false;
        }

        let replyData: Record<string, any> = {
            content: lang.translate(this.parentName, `SUBCMD_${this.name.toUpperCase()}_SUCCESS`),
        };
        
        if(content.toString().search('https://') !== -1 || content.toString().search('http://') !== -1){
            //It's image

            replyData.embeds = [new EmbedBuilder()
            .setColor(Colors.Blue)
            .setImage(content.toString())];
        }else{
            //It's a text
            replyData.content += "\n\n"+content.replace(/\\n/g, '\n');
        }

        await interaction.reply(replyData);
        
        return true;
    }
}