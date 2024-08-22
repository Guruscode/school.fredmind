<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LessonAssessmentQuestion extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'program_id', 'course_id', 'lesson_id', 'assessment_type', 'assessment_id', 'title', 'answer_type', 'meta'];

    public function assessment(): BelongsTo
    {
        return $this->belongsTo(LessonAssessment::class);
    }

    public function selections(): HasMany
    {
        return $this->hasMany(LessonAssessmentSelection::class);
    }

    public function answers(): HasMany
    {
        return $this->hasMany(LessonAssessmentAnswer::class);
    }
}
