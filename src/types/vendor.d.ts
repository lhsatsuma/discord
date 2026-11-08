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
