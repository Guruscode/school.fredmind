<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LessonAssessmentSelection extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'question_id', 'title', 'answer', 'meta'];

    public function question(): BelongsTo
    {
        return $this->belongsTo(LessonAssessmentQuestion::class);
    }
}
