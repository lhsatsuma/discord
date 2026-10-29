const {Events, EmbedBuilder} = require("discord.js");
const BeanServers = getUtils().requireAgain(process.cwd()+'/src/models/Servers.js');
let usersStateVoice = {};
client.on(Events.VoiceStateUpdate, async (oldState, newState) => {

    //If the update is on the same channel,
    //Let's ignore for now...
    if(oldState.channelId == newState.channelId){
        return true;
    }

    let bean = client.getTmp('servers_cached', newState.guild.id);
    if(!bean) {
        bean = new BeanServers();
        bean.server = newState.guild.id;
        await bean.selectServer();
        if(!bean.id){
            log.Error('Unable to select server on VoiceStateUpdate!');
            return false;
        }
        client.setTmp('servers_cached', newState.guild.id, bean);
    }

    if(!bean.server_config.channels_voice_state){
        //Nothing to do
        return false;
    }

    let description = '';
    if(newState.channelId){
        //Connected to a channel
        description = translate('globals', 'VOICE_STATE_CONNECTED', newState.id, newState.channelId);
    }else{
        //Disconnect channel
        description = translate('globals', 'VOICE_STATE_DISCONNECTED', newState.id, oldState.channelId);
    }

    //Send to every channel of server

    let embed = new EmbedBuilder()
        .setColor('#0099ff')
        .setTitle('SERVER')
        .setDescription(description)
        .setTimestamp();


    for(let k=0;k<bean.server_config.channels_voice_state.length;k++){
        let channel = await newState.guild.channels.fetch(bean.server_config.channels_voice_state[k]);
        await channel.send({ embeds: [embed]});
    }
});