import lang from '#includes/lang.js';
import model_base from '#models/base.js';
class model_memes extends model_base
{
    table = 'memes';
    async getRandom(server: string): Promise<any>
    {
        try{
            const res = await this.select('date_entered, order_id, description, content', [], `server = ${this.bind(server)}`, "RANDOM()", 1);
            return res.rows[0];
        }catch(e){
            return false;
        }
    }

    async listAll(server: string): Promise<any>
    {
        try{
            const res = await this.select('order_id, description', [], `server = ${this.bind(server)}`);
            return res.rows;
        }catch(e){
            return false;
        }
    }
}

const instance = new model_memes();
export default instance;