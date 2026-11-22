<?php

namespace App\Lib;

use RuntimeException;

class DiscordRateLimitException extends RuntimeException
{
    public function __construct(public readonly int $retryAfter)
    {
        parent::__construct('Discord temporarily rate limited the dashboard request.');
    }
}
