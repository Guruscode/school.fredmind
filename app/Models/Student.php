<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Student extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'gender', 'date_of_birth', 'email', 'phone_number',
        'country', 'state_city', 'course', 'cohort', 'class_format', 'payment_plan',
        'currency', 'advisor_id', 'how_did_you_hear', 'password', 'admission_letter_sent'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_of_birth' => 'date',
        'admission_letter_sent' => 'boolean',
    ];

    /**
     * Relationship with payments
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}