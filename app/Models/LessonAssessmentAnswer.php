<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LessonAssessmentAnswer extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'question_id', 'user_id', 'answer_type', 'answer', 'meta'];

    public function question(): BelongsTo
    {
        return $this->belongsTo(LessonAssessmentQuestion::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
