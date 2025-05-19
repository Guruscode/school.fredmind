<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'paystack_reference',
        'amount',
        'currency',
        'status',
        'payment_plan',
        'balance_due',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'amount' => 'decimal:2',
        'balance_due' => 'decimal:2',
    ];

    /**
     * Relationship with student
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}