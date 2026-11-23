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

declare global{
    var entryMode: string;
    var startTimeApp: Date;   
}

globalThis.entryMode = 'app';
globalThis.startTimeApp = new Date();
const {default: entryPointApp} = await import('#src/entryPointApp.ts');
const main = new entryPointApp();
try{
    await main.init();
}catch(e){
    const {default: log} = await import('#includes/log.ts');
    log.err(`Error initializing app: ${e instanceof Error ? e.stack ?? e.message : String(e)}`);
    await log.flush();
    process.exit(1);
}
