import database_pg from '#Includes/database/database_pg.js';
import lang from '#Includes/lang.js';
import log from '#Includes/log.js';
class model_pickup_lines
{
    async getRandom()
    {
        try{
            const res = await database_pg.query("SELECT content FROM pickup_lines WHERE locale = $1 ORDER BY RANDOM() LIMIT 1", [lang.locale]);
            if(res.rowCount > 0){
                return res.rows[0];
            }else{
                return null;
            }
        }catch(e){
            log.warning('Error on database');
            return false;
        }
    }
}

const instance = new model_pickup_lines();
export default instance;