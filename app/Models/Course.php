<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'program_id', 'name', 'description', 'image', 'video', 'position', 'certificate', 'meta'];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}
