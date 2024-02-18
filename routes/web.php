<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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



