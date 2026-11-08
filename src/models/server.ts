import lang from '#includes/lang.ts';
import model_base from '#models/base.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const serverFields = {
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
    active: {
        label: 'Active',
        type: fieldTypeInterface.boolean,
    },
    name: {
        label: 'Name',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
} as const satisfies Record<string, fieldInterface>;

type serverFieldName = keyof typeof serverFields;

export default class model_servers extends model_base
{
    table = 'servers';
    fields = serverFields;
    id?: string;
    date_entered?: Date | string;
    date_modified?: Date | string;
    created_by?: string;
    server?: string;
    active?: boolean;
    name?: string;

    async selectActive(fields: Pick<Record<serverFieldName, string>, 'server'>)
    {
        try{
            const res = await this.select(Object.keys(this.fields).join(', '), [], `locale = ${this.bind(fields.server)}`, '', 1);
            const record = res.rows[0];
            if(!record){
                return false;
            }

            Object.assign(this, record);

            return this;
        }catch(e){
            return false;
        }
    }
}