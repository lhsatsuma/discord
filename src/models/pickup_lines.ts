import lang from '#includes/lang.js';
import log from '#includes/log.js';
import model_base from '#models/base.js';
class model_pickup_lines extends model_base
{
    table = 'pickup_lines';
    async getRandom()
    {
        try{
            const res = await this.select('content', [], `locale = ${this.bind(lang.locale)}`, "RANDOM()", 1);
            return res.rows[0];
        }catch(e){
            log.warning('Error on database');
            return false;
        }
    }
}

const instance = new model_pickup_lines();
export default instance;