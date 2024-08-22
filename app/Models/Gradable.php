<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gradable extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'resource', 'lesson_type', 'points', 'meta'];

    public function gradings(): HasMany
    {
        return $this->hasMany(Grading::class);
    }
}
