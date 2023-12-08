<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DiaryController;
use App\Http\Models\DiaryModel;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin', function () {
//     return view('admin');
// });

Route::get('/admin', [RegistrationController::class, 'index']);


Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/diary', function () {
//     return view('diary');
// });
Route::get('/diary', [DiaryController::class, 'showDiary']);

// Route::get('/diary', [DiaryController::class, 'index']); // Display form to add a diary entry



Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});
// Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'submit'])->name('register.submit');

Route::get('/member', function () {
    return view('member');
});
Route::get('/nutritional', function () {
    return view('nutritional');
});
Route::get('/plan', function () {
    return view('plan');
});
Route::get('/regime', function () {
    return view('regime');
});
Route::get('/trainer', function () {
    return view('trainer');
});
Route::get('/viewDiary', function () {
    return view('viewDiary');
});
Route::get('/workout', function () {
    return view('workout');
});
