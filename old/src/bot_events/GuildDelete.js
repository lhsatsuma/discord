const {Events} = require("discord.js");
const BeanServers = getUtils().requireAgain(process.cwd()+'/src/models/Servers.js');

client.on(Events.GuildDelete, async guild => {
    let bean = new BeanServers();
    bean.server = guild.id;
    await bean.selectServer();

    if(bean.id){
        //Guild is not on database, lets create
        bean.server = guild.id;
        bean.active = 0;
        if(!await bean.save()){
            log.Error('Error on inactivating server');
        }
    }
});