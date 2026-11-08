import log from '#includes/log.ts';
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

export interface birthdayRecord
{
    id: string;
    server: string;
    user_id: string;
    username: string | null;
    birthdate: Date | string;
}

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
    birthdate?: Date | string | null;

    async selectActive(fields: Pick<Record<birthdayFieldName, string | undefined>, 'server' | 'user_id'>): Promise<this | null | false>
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

    async getMembersBirthdays(fields: Pick<Record<birthdayFieldName, string | undefined>, 'server'>): Promise<any[] | false>
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

    async getBirthdaysForDate(month: number, day: number): Promise<birthdayRecord[] | false>
    {
        try {
            const result = await this.select(
                'id, server, user_id, username, birthdate',
                [],
                `birthdate IS NOT NULL AND EXTRACT(MONTH FROM birthdate) = ${this.bind(month)} AND EXTRACT(DAY FROM birthdate) = ${this.bind(day)}`,
                'server, user_id'
            );
            return result.rows as birthdayRecord[];
        } catch (error) {
            log.warning(`Error selecting birthdays for ${month}/${day}: ${error}`);
            return false;
        }
    }
}