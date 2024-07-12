<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Tutors\TeacherAuthController;
use App\Http\Controllers\Student\StudentAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('student')->middleware('student.redirect')->group(function () {
  Route::get('register', [StudentAuthController::class, 'showRegistrationForm'])->name('student.register.form');
  Route::post('register', [StudentAuthController::class, 'register'])->name('student.register');

  Route::get('login', [StudentAuthController::class, 'showLoginForm'])->name('student.login.form');
  Route::post('login', [StudentAuthController::class, 'login'])->name('student.login');
  Route::get('success', [StudentAuthController::class, 'success'])->name('student.success.page');
  Route::get('dashboard', [StudentAuthController::class, 'studentdashboard'])->name('student.dashboard');
  Route::get('course', [StudentAuthController::class, 'studentCourse'])->name('student.course');
  Route::get('course/details', [StudentAuthController::class, 'studentCourseDetails'])->name('student.course.details');
  Route::get('programs', [StudentAuthController::class, 'studentProgram'])->name('student.programs');
  Route::get('payment', [StudentAuthController::class, 'studentPayment'])->name('student.payment');
});



// Routes for teachers
Route::prefix('teacher')->group(function () {
  Route::get('register', [TeacherAuthController::class, 'showRegistrationForm'])->name('teacher.register.form');
  Route::post('register', [TeacherAuthController::class, 'register'])->name('teacher.register');
  Route::get('success', [TeacherAuthController::class, 'success'])->name('teacher.success.page');
});

// Routes for admin
Route::prefix('admin')->group(function () {
  Route::get('register', [AdminController::class, 'showRegistrationForm'])->name('admin.register.form');
  Route::post('register', [AdminController::class, 'register'])->name('admin.register');
  Route::get('success', [AdminController::class, 'success'])->name('admin.success.page');
});


Route::get('/', [PagesController::class, 'index'])->name('index.home');
Route::get('/term', [PagesController::class, 'term'])->name('index.term');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('index.privacy');
Route::get('/scholarship', [PagesController::class, 'scholarship'])->name('index.scholarship');
Route::get('/blog', [PagesController::class, 'blog'])->name('index.blog');
Route::get('/faq', [PagesController::class, 'faq'])->name('index.faq');
Route::get('/why', [PagesController::class, 'why'])->name('index.why');
Route::get('/career', [PagesController::class, 'career'])->name('index.career');

Route::group(['prefix' => 'school'], function () {
  // Routes in this group will have the prefix 'api'
  Route::get('/engineering', [PagesController::class, 'engineering'])->name('index.engineering');
  Route::get('/engineering', [PagesController::class, 'engineering'])->name('index.engineering');
  Route::get('/products', [PagesController::class, 'products'])->name('index.products');
  Route::get('/data', [PagesController::class, 'data'])->name('index.data');
  Route::get('/business', [PagesController::class, 'business'])->name('index.business');
  Route::get('/creative-economy', [PagesController::class, 'creative'])->name('index.creative');
});

Route::group(['prefix' => 'program'], function () {
  // Routes in this group will have the prefix 'api'
  Route::get('/javascript', [PagesController::class, 'javascript'])->name('index.javascript');
  // Route::get('/engineering', [PagesController::class, 'engineering'])->name('index.engineering');
  // Route::get('/products', [PagesController::class, 'products'])->name('index.products');
  // Route::get('/data', [PagesController::class, 'data'])->name('index.data');
  // Route::get('/business', [PagesController::class, 'business'])->name('index.business');
  // Route::get('/creative-economy', [PagesController::class, 'creative'])->name('index.creative');
});



