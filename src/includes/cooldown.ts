class cooldown
{
	cdMessages: Record<string, {user: string; command: string; cooldown: number; expires: Date}> = {};
	constructor()
	{
	}
	insertUserCd(user: string, command: string, cd: number)
    {
		let key_cd = user+command;
		let expires = new Date();
		expires.setSeconds(expires.getSeconds() + cd);
        this.cdMessages[key_cd] = {user: user, command: command, cooldown: cd, expires: expires};
        setTimeout(() => {
            // Removes the user from the set after a minute
            delete this.cdMessages[key_cd];
          }, cd * 1000);
    }
	checkUserCd(user: string, command: string)
	{
		let key_cd = user+command;
		if(typeof this.cdMessages[key_cd] != 'undefined'){
			let expires = this.cdMessages[key_cd].expires;
			let t2 = new Date();
			let dif = expires.getTime() - t2.getTime();
			let dif_sec = Math.floor(Math.abs(dif / 1000));
			if(dif_sec > 1){
				return dif_sec;
			}
		}
		return 0;
	}
}

const instance = new cooldown();
export default instance;