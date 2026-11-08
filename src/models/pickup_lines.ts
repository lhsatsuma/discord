import log from '#includes/log.ts';
import model_base from '#models/base.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const pickupLineFields = {
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
        maxLength: 255,
    },
    locale: {
        label: 'Locale',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 10,
    },
    server: {
        label: 'Server',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    content: {
        label: 'Content',
        type: fieldTypeInterface.string,
    }
} as const satisfies Record<string, fieldInterface>;

type pickupLineFieldName = keyof typeof pickupLineFields;
type pickupLineLocaleFilter = Pick<Record<pickupLineFieldName, string>, 'locale'>;

class model_pickup_lines extends model_base
{
    table = 'pickup_lines';
    fields = pickupLineFields;

    async getRandom(fields: pickupLineLocaleFilter)
    {
        try{
            const res = await this.select('content', [], `locale = ${this.bind(fields.locale)}`, "RANDOM()", 1);
            return res.rows[0];
        }catch(e){
            log.warning('Error on database');
            return false;
        }
    }
}

const instance = new model_pickup_lines();
export default instance;