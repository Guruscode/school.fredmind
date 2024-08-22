<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Leaderboard extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'program_id', 'course_id', 'lesson_id', 'meta'];

    public function userLeaderboards(): HasMany
    {
        return $this->hasMany(UserLeaderboard::class);
    }
}
