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

declare module 'pidusage' {
    interface ProcessStats {
        cpu: number;
        elapsed: number;
        memory: number;
        pid: number;
        timestamp: number;
    }

    function pidusage(pids: number | number[]): Promise<Record<number, ProcessStats>>;
    export = pidusage;
}

declare module 'reddit' {
    interface RedditOptions {
        username: string;
        password: string;
        appId: string;
        appSecret: string;
        userAgent?: string;
    }

    interface RedditPost {
        data: {
            is_video: boolean;
            url: string;
            title: string;
        };
    }

    interface RedditListing {
        data: {
            children: RedditPost[];
        };
    }

    class Reddit {
        constructor(options: RedditOptions);
        get(url: string, data?: Record<string, string | number>): Promise<RedditListing>;
    }

    export = Reddit;
}
