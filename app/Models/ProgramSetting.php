<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramSetting extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'program_id', 'certificate', 'compulsory_courses', 'meta'];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
