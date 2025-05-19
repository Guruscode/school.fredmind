<?php

namespace App\Http\Controllers\Student;

use App\Models\Country;
use App\Models\Payment;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Mail\AdmissionConfirmation;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class StudentAuthController extends Controller
{

    public function showRegistrationForm ()
    {
        // $countries = Country::all();
        // return view('students.registeration' , compact('countries'));
        return view('students.form');
    }
    public function showLoginForm ()
    {
       
        return view('students.login' );
    }
    public function studentdashboard ()
    {
       
        return view('students.dashboard' );
    }
    public function studentCourse ()
    {
       
        return view('students.Course.index');
    }
    public function studentCourseDetails ()
    {
       
        return view('students.Course.details');
    }
    
    public function studentProgram ()
    {
       
        return view('students.Program.index' );
    }
    public function studentPayment ()
    {
       
        return view('students.Payment.index');
    }

    
  public function success ()
  {
    return view('students.success');
  }
  protected $paystack;

  public function __construct()
  {
      $this->paystack = new Paystack();
  }

  public function register(Request $request)
  {
      $validated = $request->validate([
          'first_name' => 'required|string|max:255',
          'last_name' => 'required|string|max:255',
          'gender' => 'required|string|in:Male,Female,Other',
          'date_of_birth' => 'required|date',
          'email' => 'required|string|email|max:255|unique:students',
          'phone_number' => 'required|string|max:20',
          'country' => 'required|exists:countries,id',
          'state_city' => 'required|string|max:255',
          'course' => 'required|string|in:Frontend Engineering,Backend Engineering,Digital Marketing,Data Analysis',
          'cohort' => 'required|string',
          'class_format' => 'required|string|in:Virtual Class,Physical Class',
          'payment_plan' => 'required|string|in:Full Payment,Part Payment',
          'currency' => 'required|string|in:NGN,USD,USDT/USDC',
          'advisor_id' => 'nullable|string|max:255',
          'how_did_you_hear' => 'required|string|max:255',
      ]);

      $country = Country::findOrFail($request->country)->name;

      $courseFees = [
          'Frontend Engineering' => ['NGN' => 400000, 'USD' => 650, 'USDT/USDC' => 650],
          'Backend Engineering' => ['NGN' => 450000, 'USD' => 700, 'USDT/USDC' => 700],
          'Digital Marketing' => ['NGN' => 300000, 'USD' => 500, 'USDT/USDC' => 500],
          'Data Analysis' => ['NGN' => 350000, 'USD' => 600, 'USDT/USDC' => 600],
      ];

      $courseFee = $courseFees[$request->course][$request->currency];
      $courseFee = $request->class_format === 'Virtual Class' ? $courseFee * 0.9 : $courseFee;
      $amountToPay = $request->payment_plan === 'Full Payment' ? $courseFee : $courseFee * 0.5;
      $balanceDue = $request->payment_plan === 'Full Payment' ? 0 : $courseFee * 0.5;
      $transactionFee = $request->currency === 'USDT/USDC' ? 0 : $courseFee * 0.015;
      $totalAmountDue = $amountToPay + $transactionFee;

      if ($request->currency !== 'USDT/USDC') {
          $student = Student::create([
              'first_name' => $request->first_name,
              'last_name' => $request->last_name,
              'gender' => $request->gender,
              'date_of_birth' => $request->date_of_birth,
              'email' => $request->email,
              'phone_number' => $request->phone_number,
              'country' => $country,
              'state_city' => $request->state_city,
              'course' => $request->course,
              'cohort' => $request->cohort,
              'class_format' => $request->class_format,
              'payment_plan' => $request->payment_plan,
              'currency' => $request->currency,
              'advisor_id' => $request->advisor_id,
              'how_did_you_hear' => $request->how_did_you_hear,
              'password' => Hash::make(str_random(12)), // Temporary password
          ]);

          $payment = Payment::create([
              'student_id' => $student->id,
              'paystack_reference' => 'ref_' . time() . '_' . $student->id,
              'amount' => $totalAmountDue,
              'currency' => $request->currency,
              'status' => 'pending',
              'payment_plan' => $request->payment_plan,
              'balance_due' => $balanceDue,
          ]);

          try {
              $paystackResponse = $this->paystack->transaction->initialize([
                  'amount' => $totalAmountDue * ($request->currency === 'NGN' ? 100 : 1), // Paystack expects amount in kobo for NGN
                  'email' => $student->email,
                  'reference' => $payment->paystack_reference,
                  'callback_url' => route('payment.callback'),
              ]);

              return redirect()->to($paystackResponse->data->authorization_url);
          } catch (\Exception $e) {
              Log::error('Paystack initialization failed: ' . $e->getMessage());
              return redirect()->back()->with('error', 'Payment initialization failed. Please try again.');
          }
      } else {
          // Handle crypto payments (placeholder)
          return redirect()->back()->with('error', 'Crypto payments are not supported yet.');
      }
  }

  public function handlePaymentCallback(Request $request)
  {
      $reference = $request->query('reference');

      try {
          $transaction = $this->paystack->transaction->verify(['reference' => $reference]);

          if ($transaction->data->status === 'success') {
              $payment = Payment::where('paystack_reference', $reference)->firstOrFail();
              $payment->update(['status' => 'completed']);

              $student = Student::findOrFail($payment->student_id);

              // Send confirmation email
              Mail::to($student->email)->send(new AdmissionConfirmation($student, $payment));

              return redirect()->route('payment.success')->with('success', 'Payment successful! Check your email for details.');
          } else {
              return redirect()->route('payment.failed')->with('error', 'Payment failed. Please try again.');
          }
      } catch (\Exception $e) {
          Log::error('Paystack verification failed: ' . $e->getMessage());
          return redirect()->route('payment.failed')->with('error', 'Payment verification failed. Please contact support.');
      }
  }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('student')->attempt($credentials)) {
          
            return redirect()->route('student.dashboard'); // Redirect to dashboard or any other authenticated route
        }
    
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

      // Logout function
      public function logout(Request $request)
      {
          Auth::guard('student')->logout();
          $request->session()->invalidate();
          $request->session()->regenerateToken();
          return redirect()->route('student.login.form');
      }
  
      // Show the forget password form
      public function showForgotPasswordForm()
      {
          return view('students.auth.passwords.email');
      }
  
      // Send password reset link
      public function sendPasswordResetLink(Request $request)
      {
          $request->validate(['email' => 'required|email']);
  
          $response = Password::sendResetLink($request->only('email'));
  
          return $response == Password::RESET_LINK_SENT
              ? back()->with('status', 'We have emailed your password reset link!')
              : back()->withErrors(['email' => 'We could not find a user with that email address.']);
      }
  
      // Show the reset password form
      public function showResetPasswordForm($token)
      {
          return view('students.auth.passwords.reset', ['token' => $token]);
      }
  
      // Reset password
      public function resetPassword(Request $request)
      {
          $request->validate([
              'email' => 'required|email',
              'password' => 'required|confirmed|min:8',
              'token' => 'required',
          ]);
  
          $response = Password::reset(
              $request->only('email', 'password', 'password_confirmation', 'token'),
              function ($user, $password) {
                  $user->forceFill(['password' => bcrypt($password)])->save();
              }
          );
  
          return $response == Password::PASSWORD_RESET
              ? redirect()->route('student.login.form')->with('status', 'Your password has been reset!')
              : back()->withErrors(['email' => 'Unable to reset password. Please try again.']);
      }
  
      // Show profile
      public function showProfile()
      {
          $student = Auth::guard('student')->user();
          return view('students.profile', compact('student'));
      }
  
      // Update profile
      public function updateProfile(Request $request)
      {
          $student = Auth::guard('student')->user();
          
          $request->validate([
              'first_name' => 'required|string|max:255',
              'last_name' => 'required|string|max:255',
              'email' => 'required|email|unique:students,email,' . $student->id,
              'phone_number' => 'required|string|max:15',
              'country' => 'required|string',
              'state_city' => 'required|string',
          ]);
  
          $student->update($request->all());
  
          return back()->with('status', 'Profile updated successfully!');
      }

    
}
