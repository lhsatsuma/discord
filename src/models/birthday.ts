import lang from '#includes/lang.ts';
import model_base from '#models/base.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

const birthdayFields = {
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
    user_id: {
        label: 'User ID',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    username: {
        label: 'Username',
        type: fieldTypeInterface.string,
        maxLength: 255,
    },
    birthdate: {
        label: 'Birthdate',
        type: fieldTypeInterface.string,
    }
} as const satisfies Record<string, fieldInterface>;

type birthdayFieldName = keyof typeof birthdayFields;

export default class model_birthday extends model_base
{
    table = 'server_members';
    fields = birthdayFields;
    id?: string;
    date_entered?: Date | string;
    date_modified?: Date | string;
    created_by?: string;
    server?: string;
    user_id?: string;
    username?: string | null;
    birthdate?: Date | string;

    async selectActive(fields: Pick<Record<birthdayFieldName, string>, 'server' | 'user_id'>): Promise<this | null | false>
    {
        this.resetFields();

        try{
            const res = await this.select(Object.keys(this.fields).join(', '), [], `server = ${this.bind(fields.server)} AND user_id = ${this.bind(fields.user_id)}`, '', 1);
            if(res.rowCount < 1){
                return null;
            }

            const record = res.rows[0];
            if (!record) {
                return false;
            }

            Object.assign(this, record);
            return this;
        }catch(e){
            return false;
        }
    }

    async getMembersBirthdays(fields: Pick<Record<birthdayFieldName, string>, 'server'>): Promise<any[] | false>
    {
        try{
            const res = await this.select(Object.keys(this.fields).join(', '), [], `server = ${this.bind(fields.server)}`, 'EXTRACT(MONTH FROM birthdate), EXTRACT(DAY FROM birthdate)');
            const records = res.rows;
            if (!records) {
                return [];
            }

            return records;
        }catch(e){
            return false;
        }
    }
}