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

import fs from 'fs';
import log from '#includes/log.ts';
import config from '#includes/config.ts';
class lang
{
    availableLocales = [
        {
            name: 'Português Brasileiro',
            value: 'pt_BR'
        },
        {
            name: 'English',
            value: 'en_US',
        }
    ];
    locale;
    translates: Record<string, Record<string, string>> = {};
    constructor(locale: string)
    {
        this.locale = locale;
    }

    validateLocale(locale: string)
    {
        return this.availableLocales.filter((available) => available.value === locale).length;
    }

    translate(module: string, label: string, params: any[] = [])
    {
        //Check if label exists
        if (!this.translates[module]) {
            log.err(`Translate for module ${module} not found!`);
            return label;
        }
        if (typeof this.translates[module][label] == "undefined") {
            log.err(`Translate ${label} in ${module} not found!`);
            return label;
        }

        let translated = this.translates[module][label];
        if (params.length) {
            translated = this.overrideParams(translated, params);
        }

        return translated;
    }

    overrideParams(label: string, params: any[])
    {
        for (let i = 0; i < params.length; i++) {
            label = label.replaceAll('{' + i + '}', params[i]);
        }
        return label;
    }

    async importLocales()
    {
        const basePath = process.cwd() + '/src/locales/' + this.locale + '/';
        if (!fs.existsSync(basePath)) {
            log.fatal(`Locale ${this.locale} not found on folder /src/locales/`);
            return false;
        }
        const localesPath = fs.readdirSync(basePath);
        let absolutPath, module;

        for (const localeName of localesPath) {
            let localeContent;
            absolutPath = basePath + localeName;
            module = localeName.replace('.json', '');
            try {
                localeContent = JSON.parse(fs.readFileSync(absolutPath, 'utf8'));
                if (localeContent !== null) {
                    this.translates[module] = localeContent;
                }
            } catch (e) {
                log.fatal('Error on locale file: ' + absolutPath + ' :: ' + e);
            }
        }

        return true;
    }
}
const instance = new lang(config.DISCORD_BOT_LOCALE);
export default instance;