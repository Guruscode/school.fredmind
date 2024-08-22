<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSetting extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'user_id', 'meta'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
