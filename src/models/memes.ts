import lang from '#includes/lang.ts';
import model_base from '#models/base.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const memeFields = {
    id: {
        label: 'ID',
        type: fieldTypeInterface.uuid,
        minLength: 36,
        maxLength: 36,
        pk: true
    },
    date_entered: {
        label: 'Date Entered',
        type: fieldTypeInterface.datetime,
    },
    date_modified: {
        label: 'Date Modified',
        type: fieldTypeInterface.datetime,
    },
    created_by: {
        label: 'Created By',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 255,
    },
    server: {
        label: 'Server',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    order_id: {
        label: 'Order ID',
        type: fieldTypeInterface.number,
    },
    description: {
        label: 'Description',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    content: {
        label: 'Content',
        type: fieldTypeInterface.string,
        maxLength: 255,
    }
} as const satisfies Record<string, fieldInterface>;

type memeFieldName = keyof typeof memeFields;
type memeServerFilter = Pick<Record<memeFieldName, string>, 'server'>;

class model_memes extends model_base
{
    table = 'memes';
    fields = memeFields;

    async getRandom(fields: memeServerFilter): Promise<any>
    {
        try{
            const res = await this.select('date_entered, order_id, description, content', [], `server = ${this.bind(fields.server)}`, "RANDOM()", 1);
            return res.rows[0];
        }catch(e){
            return false;
        }
    }

    async beforeInsert(fields: Record<string, any>)
    {
        if(!fields.order_id) {
            fields.order_id = await this.getNextOrder({server: fields.server});
            if (isNaN(fields.order_id) || fields.order_id === null) {
                fields.order_id = 1;
            }
        }
        return super.beforeInsert(fields);
    }

    async getNextOrder(fields: memeServerFilter)
    {
        let result = await this.select('MAX(COALESCE(order_id, 0))+1 as order_max', [], `server = ${this.bind(fields.server)}`);
        if(!result){
            return null;
        }
        return result.rows[0].order_max;
    }

    async listAll(fields: memeServerFilter): Promise<any>
    {
        try{
            const res = await this.select('order_id, description', [], `server = ${this.bind(fields.server)}`);
            return res.rows;
        }catch(e){
            return false;
        }
    }

    async search(fields: memeServerFilter, search: string)
    {
        let where = `server = ${this.bind(fields.server)}`;

        if(parseInt(search)){
            where += ` AND order_id = ${this.bind(search)}`;
        }else{
            where += ` AND description LIKE ${this.bind(`%${search}%`)}`;
        }
        try{
            const res = await this.select('date_entered, order_id, description, content', [], where, 'RANDOM()', 1);
            return res.rows[0];
        }catch(e){
            return false;
        }
    }
}

const instance = new model_memes();
export default instance;