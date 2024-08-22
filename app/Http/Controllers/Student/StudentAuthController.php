<?php

namespace App\Http\Controllers\Student;

use App\Models\Country;
use App\Models\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female,Other',
            'date_of_birth' => 'required|date',
            'email' => 'required|string|email|max:255|unique:students',
            'phone_number' => 'required|string|max:20',
            'country' => 'required|exists:countries,id', // Ensure the selected country exists
            'state_city' => 'required|string|max:255',
            'how_did_you_hear' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

    
        // Retrieve the selected country name
        $country = Country::findOrFail($request->country)->name;
    
        // Create the student record with the country name
        $student =  Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'country' => $country, // Store the country name instead of ID
            'state_city' => $request->state_city,
            'how_did_you_hear' => $request->how_did_you_hear,
            'password' => Hash::make($request->password),
        ]);
    
        if ($student) {
            return redirect()->route('student.success.page'); // Redirect to success page
        } else {
            return redirect()->back()->with('error', 'Registration failed. Please try again.'); // Redirect back with an error message
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

}
