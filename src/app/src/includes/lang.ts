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

import { AsyncLocalStorage } from 'node:async_hooks';
import fs from 'node:fs';
import path from 'node:path';
import log from '#includes/log.ts';
import config from '#includes/config.ts';

export const availableLocales = [
    {name: 'English', value: 'en-US'},
    {name: 'Português Brasileiro', value: 'pt-BR'}
] as const;

export type LocaleCode = typeof availableLocales[number]['value'];
export const DEFAULT_LOCALE: LocaleCode = 'en-US';
type LocaleTranslations = Record<string, Record<string, string>>;

export const isLocaleCode = (locale: string | null | undefined): locale is LocaleCode =>
    availableLocales.some((available) => available.value === locale);

class lang
{
    readonly availableLocales = availableLocales;
    private readonly localeContext = new AsyncLocalStorage<LocaleCode>();
    private readonly translations: Partial<Record<LocaleCode, LocaleTranslations>> = {};
    private readonly defaultLocale: LocaleCode;

    constructor(locale: string)
    {
        this.defaultLocale = isLocaleCode(locale) ? locale : DEFAULT_LOCALE;
    }

    get locale(): LocaleCode
    {
        return this.localeContext.getStore() ?? this.defaultLocale;
    }

    validateLocale(locale: string | null | undefined): locale is LocaleCode
    {
        return isLocaleCode(locale);
    }

    runWithLocale<T>(locale: string | null | undefined, callback: () => T): T
    {
        const selectedLocale = isLocaleCode(locale) ? locale : DEFAULT_LOCALE;
        return this.localeContext.run(selectedLocale, callback);
    }

    translate(module: string, label: string, params: unknown[] = []): string
    {
        const translated = this.translations[this.locale]?.[module]?.[label]
            ?? this.translations['en-US']?.[module]?.[label];
        if (translated === undefined) {
            log.err(`Translate ${label} in ${module} not found for locale ${this.locale}!`);
            return label;
        }

        return params.length ? this.overrideParams(translated, params) : translated;
    }

    overrideParams(label: string, params: unknown[]): string
    {
        for (let index = 0; index < params.length; index++) {
            label = label.replaceAll(`{${index}}`, String(params[index]));
        }
        return label;
    }

    async importLocales(): Promise<boolean>
    {
        const localesPath = path.join(process.cwd(), 'src', 'locales');

        for (const locale of this.availableLocales) {
            const localePath = path.join(localesPath, locale.value);
            if (!fs.existsSync(localePath)) {
                log.warning(`Locale ${locale.value} was not found in ${localePath}.`);
                continue;
            }

            const localeTranslations: LocaleTranslations = {};
            for (const filename of fs.readdirSync(localePath).filter((file) => file.endsWith('.json'))) {
                const filePath = path.join(localePath, filename);
                try {
                    localeTranslations[filename.slice(0, -5)] = JSON.parse(
                        fs.readFileSync(filePath, 'utf8')
                    ) as Record<string, string>;
                } catch (error) {
                    log.fatal(`Error on locale file: ${filePath} :: ${error}`);
                    return false;
                }
            }
            this.translations[locale.value] = localeTranslations;
        }

        if (!this.translations['en-US']) {
            log.fatal(`Required fallback locale ${DEFAULT_LOCALE} was not found in ${localesPath}.`);
            return false;
        }
        return true;
    }
}

const instance = new lang(config.DISCORD_BOT_LOCALE);
export default instance;
