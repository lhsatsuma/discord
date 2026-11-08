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

    async init(): Promise<boolean | void>
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
