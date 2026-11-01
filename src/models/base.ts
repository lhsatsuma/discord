import {v6 as uuidV6} from 'uuid';
import database_pg from '#includes/database/database_pg.js';
import log from '#includes/log.js';
export default class model_base
{
    fields = [];
    table = '';
    constructor()
    {
        return this;
    }
    init()
    {
        return this;
    }
    async insert(fields: Record<string, any> = {})
    {
        try{
            if(!fields.id){
                fields.id = uuidV6();
            }
            const res = await database_pg.query(`INSERT INTO ${this.table} (${Object.keys(fields).join(', ')}) VALUES (${Object.values(fields).map((_, i) => `$${i + 1}`).join(', ')})`, Object.values(fields));
            return true;
        }catch(e){
            log.warning('Error on database');
            return false;
        }
    }
}