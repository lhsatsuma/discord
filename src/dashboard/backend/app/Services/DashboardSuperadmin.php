<?php

namespace App\Services;

class DashboardSuperadmin
{
    public function isUser(string $discordUserId): bool
    {
        $configuredId = trim((string) config('services.discord.superadmin_id', ''));

        return $configuredId !== '' && hash_equals($configuredId, $discordUserId);
    }
}
