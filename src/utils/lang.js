var globalClassLang = null;
global.getLang = () => {
    if(globalClassLang == null){
        globalClassLang = new Lang();
    }

    return globalClassLang;
}

global.translate = (module, label, ...params) => {
    return getLang().translate(module, label, params);
}

class Lang{
    availableLocales = [
        'pt_BR',
        'en_US',
    ];
    locale;
    translates = {};
    constructor() {
        if(!bot_cfg.BOT_LOCALE || !this.validateLocale(bot_cfg.BOT_LOCALE)){
            log.Fatal('BOT_LOCALE not available: '+bot_cfg.BOT_LOCALE, 1, 1);
        }

        this.locale = bot_cfg.BOT_LOCALE;
    }

    validateLocale(locale)
    {
        return this.availableLocales.indexOf(locale) !== -1;
    }

    translate(module, label, params)
    {
        //Check if label exists
        if(typeof this.translates[module][label] == "undefined"){
            log.Error(`Translate ${label} in ${module} not found!`);
            return label;
        }

        let translated = this.translates[module][label];
        if(params.length){
            translated = this.overrideParams(translated, params);
        }

        return translated;
    }

    overrideParams(label, params)
    {
        for(let i=0;i<params.length;i++){
            label = label.replaceAll('{'+i+'}', params[i]);
        }
        return label;
    }

    async importLocales()
    {
        const basePath = process.cwd()+'/src/locales/'+this.locale+'/';
        const localesPath = fs.readdirSync(basePath);
        let absolutPath, module;

        for (const localeName of localesPath) {
            let localeContent;
            absolutPath = basePath+localeName;
            module = localeName.replace('.json', '');
            try {
                localeContent = JSON.parse(fs.readFileSync(absolutPath));
                if(localeContent !== null){
                    this.translates[module] = localeContent;
                }
            }catch(e){
                log.Fatal('Error on locale file: '+absolutPath+' :: '+e, 1, 1);
            }
        }

        return true;
    }
}

module.exports = Lang;