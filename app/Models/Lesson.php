<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Lesson extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'course_id', 'module_id', 'name', 'description', 'image', 'video', 'position', 'type', 'meta'];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function video(): HasOne
    {
        return $this->hasOne(LessonVideo::class);
    }

    public function text(): HasOne
    {
        return $this->hasOne(LessonText::class);
    }

    public function assessment(): HasOne
    {
        return $this->hasOne(LessonAssessment::class);
    }
}
