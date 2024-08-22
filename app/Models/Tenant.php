<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenant extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'description', 'phone', 'email', 'meta'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function tenantSettings(): HasMany
    {
        return $this->hasMany(TenantSetting::class);
    }

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}
