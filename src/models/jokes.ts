import lang from '#includes/lang.js';
import model_base from '#models/base.js';
class model_jokes extends model_base
{
    table = 'jokes';
    async getRandom()
    {
        try{
            const res = await this.select('content', [], `locale = ${this.bind(lang.locale)}`, "RANDOM()", 1);
            return res.rows[0];
        }catch(e){
            return false;
        }
    }
}

const instance = new model_jokes();
export default instance;