const {Events} = require("discord.js");
const BeanServers = getUtils().requireAgain(process.cwd()+'/src/models/Servers.js');

client.on(Events.GuildCreate, async guild => {
    let bean = new BeanServers();
    bean.server = guild.id;
    await bean.selectServer();
    bean.name = guild.name;
    bean.active = 1;
    if(!await bean.save()){
        log.Error('Error on saving new server');
    }
});