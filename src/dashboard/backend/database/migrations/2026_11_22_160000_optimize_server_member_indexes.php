<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::connection()->getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement('ALTER TABLE server_members DROP CONSTRAINT IF EXISTS unq_server_members');
        DB::statement(
            'CREATE INDEX IF NOT EXISTS server_members_birthday_month_day_idx '
            .'ON server_members ((EXTRACT(MONTH FROM birthdate)), (EXTRACT(DAY FROM birthdate))) '
            .'WHERE birthdate IS NOT NULL'
        );
    }

    public function down(): void
    {
        if (DB::connection()->getDriverName() !== 'pgsql') {
            return;
        }

        DB::statement('DROP INDEX IF EXISTS server_members_birthday_month_day_idx');
        DB::statement(
            'CREATE UNIQUE INDEX IF NOT EXISTS unq_server_members '
            .'ON server_members (server, user_id)'
        );
    }
};
