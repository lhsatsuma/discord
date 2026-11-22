<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('server_config', function (Blueprint $table) {
            $table->string('server_id')->comment('Server ID');
            $table->string('config_code')->comment('string for current config');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('created_by')->default('SYSTEM');
            $table->string('type')->comment('Type of config: boolean,string,text,integer');
            $table->string('value')->nullable()->comment('Value of config applied only when config its less then 255 characters');
            $table->text('long_value')->nullable()->comment('Value of config applied only when config its more then 255 characters');
            $table->primary(['server_id', 'config_code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_config');
    }
};
