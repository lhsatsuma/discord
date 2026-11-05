import lang from '#includes/lang.ts';
import model_base from '#models/base.ts';
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

    async beforeInsert(fields: Record<string, any>)
    {
        if(!fields.order_id) {
            fields.order_id = await this.getNextOrder(fields.server);
            if (isNaN(fields.order_id) || fields.order_id === null) {
                fields.order_id = 1;
            }
        }
        return super.beforeInsert(fields);
    }

    async getNextOrder(server: number)
    {
        let result = await this.select('MAX(COALESCE(order_id, 0))+1 as order_max', [], `server = ${this.bind(server)}`);
        if(!result){
            return null;
        }
        return result.rows[0].order_max;
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