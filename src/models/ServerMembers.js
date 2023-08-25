const BeanBase = require('../utils/Bean.js');
const moment = require("moment/moment");
const {EmbedBuilder} = require("discord.js");
class ServerMembers extends BeanBase
{
    constructor()
    {
        super();

        this.dbh.table = 'server_members';
        this.fields = {
            id: {
                type: 'id',
            },
            date_entered: {
                type: 'datetime',
            },
            date_modified: {
                type: 'datetime',
            },
            server: {
                type: 'varchar',
            },
            user_id: {
                type: 'varchar',
            },
            username: {
                type: 'varchar',
            },
            birthdate: {
                type: 'date',
            },
        };
        this.options = {
            thumb_birthday: 'https://wishes.moonzori.com/wp-content/uploads/2023/04/Happy-Birthday-Birthday-Wishes-and-Images-Moonzori.png',
        };
    }

    async selectActive()
    {
        return this.select(`server = '${this.server}' AND user_id = '${this.user_id}'`);
    }

    async getMembersBirthdays()
    {
        this.dbh.resetOptions();
        this.dbh.where = `server = '${this.server}' AND birthdate IS NOT NULL`;
        this.dbh.order_by = "date_format(birthdate, '%c'), date_format(birthdate, '%e')";
        return await this.dbh.Select();
    }

    async selectBirthdayByDay(search)
    {
        this.dbh.inner_join = [
            {
                type: 'INNER JOIN',
                table: 'servers',
                on: 'servers.server = server_members.server',
            }
        ]
        this.dbh.fields = 'server_members.*, servers.channels_birthday';
        this.dbh.where = `server_members.birthdate LIKE '%-${search}'`;
        return await this.dbh.Select();
    }

    async checkBirthdayNotifications()
    {
        let search_date = new moment().format('MM-DD');

        //Search users with birthdate today
        let results = await this.selectBirthdayByDay(search_date);

        if(results.length){
            for(let i = 0;i<results.length;i++){
                let result = results[i];
                let year = result.birthdate.getFullYear().toString();
                let birthDate = this.unformatField('date-locale', result.birthdate);
                let age = -1;

                //If year is different of 1500, assume the user has not specified the year of birth
                if(year !== '1500'){
                    age = moment().diff(result.birthdate, 'years');
                }else{
                    birthDate = birthDate.substring(0, 5);
                }
                let fields = [
                    {
                        name: 'Data',
                        value: birthDate,
                        inline: true
                    }
                ];
                let description = translate('birthday', 'SCHEDULE_BIRTHDAY_MESSAGE', result.user_id);
                if(age > 0){
                    fields.push({
                       name: 'Idade',
                       value: age.toString(),
                        inline: true
                    });
                }

                let guild = await client.guilds.fetch(result.server);

                //Check if member is in guild
                let member = await guild.members.fetch(result.user_id);

                if(member) {
                    let channels = this.unformatField('json', result.channels_birthday);

                    let embed = new EmbedBuilder()
                        .setColor('#0099ff')
                        .setTitle(translate('birthday', 'SCHEDULE_HAPPY_BIRTHDAY'))
                        .setAuthor({name: member.user.username, iconURL: member.user.avatarURL()})
                        .setThumbnail(this.options.thumb_birthday)
                        .setDescription(description)
                        .setFields(fields);

                    //Send to every channel of server
                    for(let k=0;k<channels.length;k++){
                        let channel = await guild.channels.fetch(channels[k]);
                        await channel.send({ embeds: [embed] });
                    }
                }
            }
        }

        return true;
    }
}

module.exports = ServerMembers;