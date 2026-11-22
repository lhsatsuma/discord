/*
 * Copyright (C) 2025 Luis Satsuma
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

import fs from 'node:fs';
import path from 'node:path';
import { pathToFileURL } from 'node:url';
import type { ScheduledTask } from 'node-cron';
import entryPoint from '#src/entryPoint.ts';
import log from '#includes/log.ts';

type SchedulerController = {
    active?: boolean;
    schedule: () => ScheduledTask;
};

export default class entryPointScheduler extends entryPoint
{
    private scheduledTasks: ScheduledTask[] = [];

    async init(): Promise<boolean>
    {
        const initialized = await super.init();
        if (!initialized) {
            return false;
        }

        await this.loadSchedulers();
        this.finishInit();
        return true;
    }

    private async loadSchedulers(): Promise<void>
    {
        const schedulerPath = path.join(process.cwd(), 'src', 'controllers', 'schedulers');
        const schedulerFiles = fs.readdirSync(schedulerPath)
            .filter((filename) => filename.endsWith('.ts') && !filename.endsWith('.d.ts'));

        for (const filename of schedulerFiles) {
            const moduleUrl = pathToFileURL(path.join(schedulerPath, filename)).href;
            const schedulerModule = await import(moduleUrl);
            const Scheduler = schedulerModule.default as new (client: entryPoint) => SchedulerController;
            const scheduler = new Scheduler(this);

            if (scheduler.active === false) {
                log.info(`Scheduler ${filename} is disabled.`);
                continue;
            }

            const task = scheduler.schedule();
            task.on('execution:failed', ({error}) => {
                log.err(`Scheduler ${filename} execution failed: ${error ?? 'unknown error'}`);
            });
            this.scheduledTasks.push(task);
            log.info(`Scheduler ${filename} started.`);
        }
    }
}
