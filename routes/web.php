<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PaymentOfFeesController;
use App\Http\Controllers\LevelsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('/students', StudentController::class);
Route::resource('/departments', DepartmentController::class);
Route::resource('/teachers', TeachersController::class);
Route::resource('/courses', CoursesController::class);
Route::resource('/activities', ActivityController::class);
Route::resource('/paymentOfFees', PaymentOfFeesController::class);
Route::resource('/levels', LevelsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


