<?php

namespace App\Mail;

use App\Models\Student;
use App\Models\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdmissionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $student;
    public $payment;

    public function __construct(Student $student, Payment $payment)
    {
        $this->student = $student;
        $this->payment = $payment;
    }

    public function build()
    {
        return $this->subject('Fredmind School Admission Confirmation')
                    ->view('emails.admission_confirmation');
    }
}