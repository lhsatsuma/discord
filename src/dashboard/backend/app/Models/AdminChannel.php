<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['id', 'created_at', 'updated_at', 'created_by', 'server', 'channel_id'])]
class AdminChannel extends Model
{
    use Concerns\SynchronizesServerChannels;

    protected $table = 'admin_channels';

    protected $keyType = 'string';

    public $incrementing = false;

    public function server(): BelongsTo
    {
        return $this->belongsTo(Server::class, 'server', 'id');
    }
}
