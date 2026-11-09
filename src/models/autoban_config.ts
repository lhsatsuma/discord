import log from '#includes/log.ts';
import model_base from '#models/base.ts';
import { fieldTypeInterface } from '../interfaces/fieldInterface.ts';
import type { fieldInterface } from '../interfaces/fieldInterface.ts';

export const DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES = 60;
export const MAX_AUTOBAN_DELETE_PERIOD_MINUTES = 10_080;

const autobanConfigFields = {
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
    server: {
        label: 'Server',
        type: fieldTypeInterface.string,
        minLength: 1,
        maxLength: 255,
    },
    delete_period: {
        label: 'Delete Period (minutes)',
        type: fieldTypeInterface.number,
        maxLength: 5,
        default: DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES
    }
} as const satisfies Record<string, fieldInterface>;

type autobanConfigFieldName = keyof typeof autobanConfigFields;

export default class model_autoban_config extends model_base
{
    table = 'autoban_config';
    fields = autobanConfigFields;
    id?: string;
    date_entered?: Date | string;
    date_modified?: Date | string;
    created_by?: string;
    server?: string;
    delete_period?: number | string;

    async getDeletePeriod(server: string): Promise<number | false>
    {
        try {
            const result = await this.select(
                'delete_period',
                [],
                `server = ${this.bind(server)}`,
                'date_modified DESC',
                1
            );
            const row = result.rows[0] as {delete_period: number | string} | undefined;
            return row ? Number(row.delete_period) : DEFAULT_AUTOBAN_DELETE_PERIOD_MINUTES;
        } catch (error) {
            log.warning(`Error loading autoban configuration for server ${server}: ${error}`);
            return false;
        }
    }

    async saveDeletePeriod(server: string, periodMinutes: number, createdBy: string): Promise<boolean>
    {
        try {
            const result = await this.query(
                `UPDATE ${this.table} SET delete_period = $2, date_modified = NOW(), created_by = $3 WHERE server = $1`,
                [server, periodMinutes, createdBy]
            );
            if ((result.rowCount ?? 0) > 0) {
                return true;
            }

            const inserted = await this.insert({
                server,
                delete_period: periodMinutes,
                created_by: createdBy
            });
            return inserted !== false;
        } catch (error) {
            log.warning(`Error saving autoban configuration for server ${server}: ${error}`);
            return false;
        }
    }
}
