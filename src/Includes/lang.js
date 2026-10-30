import fs from 'fs';
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
    translates = {};
    constructor(locale)
    {
        this.locale = locale;
    }

    validateLocale(locale)
    {
        return this.availableLocales.filter((available) => available.value === locale).length;
    }

    translate(module, label, params = {})
    {
        //Check if label exists
        if (!this.translates[module]) {
            log.error(`Translate for module ${module} not found!`);
            return label;
        }
        if (typeof this.translates[module][label] == "undefined") {
            log.error(`Translate ${label} in ${module} not found!`);
            return label;
        }

        let translated = this.translates[module][label];
        if (params.length) {
            translated = this.overrideParams(translated, params);
        }

        return translated;
    }

    overrideParams(label, params)
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
            log.fatal(`Locale ${this.locale} not found on folder /src/locales/`, 1, 1);
            return false;
        }
        const localesPath = fs.readdirSync(basePath);
        let absolutPath, module;

        for (const localeName of localesPath) {
            let localeContent;
            absolutPath = basePath + localeName;
            module = localeName.replace('.json', '');
            try {
                localeContent = JSON.parse(fs.readFileSync(absolutPath));
                if (localeContent !== null) {
                    this.translates[module] = localeContent;
                }
            } catch (e) {
                log.fatal('Error on locale file: ' + absolutPath + ' :: ' + e, 1, 1);
            }
        }

        return true;
    }
}
const instance = new lang(process.env.DISCORD_BOT_LOCALE);
export default instance;