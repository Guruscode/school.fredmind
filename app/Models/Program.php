<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'tenant_id', 'name', 'description', 'image', 'video', 'position', 'meta'];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    public function programSettings(): HasMany
    {
        return $this->hasMany(ProgramSetting::class);
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
