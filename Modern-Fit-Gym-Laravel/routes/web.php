<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\WorkoutController;
use App\Http\Models\DiaryModel;
use App\Http\Models\Interfaces\SearchFunctionInterface;
use App\Providers;

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


//Checks login details
Route::post('/login', [LoginController::class, 'loginCheck'])->name('login.submit');

//returns member id
Route::get('/login', [LoginController::class, 'login']);

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
Route::post('/diary', [DiaryController::class, 'createDiaryData'])->name('diary.submit');



Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});
// Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'registerAccount'])->name('register.submit');

Route::get('/member', function () {
    return view('member');
});
Route::get('/nutritional', function () {
    return view('nutritional');
});
Route::get('/plan', function () {
    return view('plan');
});
// Route::get('/regime', function () {
//     return view('regime');
// });
Route::get('/regime', [WorkoutController::class, 'showWorkout']);
Route::post('/regime', [WorkoutController::class, 'createWorkoutData'])->name('workout.submit');
// Route::get('/regime/{workoutID}', [WorkoutController::class, 'editWorkoutData'])->name('workout.edit');
Route::post('/regime/{workoutID}', [WorkoutController::class, 'updateWorkoutData'])->name('workout.update');

Route::get('/trainer', function () {
    return view('trainer');
});
// Route::get('/viewDiary', function () {
//     return view('viewDiary');
// });

// Route::get('/viewDiary', [DiaryController::class, 'showDiary']);
Route::get('/viewDiary', [DiaryController::class, 'showDiaryTrainer']);



Route::get('/workout', function () {
    return view('workout');
});
