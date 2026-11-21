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