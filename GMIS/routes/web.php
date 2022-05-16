<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GMISController; 

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

Route::get('/', [GMISController::class, 'index'])->name('main');
Route::get('operationbachelor', [GMISController::class, 'operationbachelor'])->name('operationbachelor');
Route::get('operationmaster', [GMISController::class, 'operationmaster'])->name('operationmaster');
Route::get('checklogin', [GMISController::class, 'checklogin'])->name('checklogin');
Route::get('logout', [GMISController::class, 'logout'])->name('logout');
Route::get('checkoperation_m', [GMISController::class, 'checkoperation_m'])->name('checkoperation_m');
Route::get('checkoperation_b', [GMISController::class, 'checkoperation_b'])->name('checkoperation_b');


###MASTER STUDENTS###
#view all groups
Route::get('op1', [GMISController::class, 'op1'])->name('op1');

#view all students
Route::get('op2', [GMISController::class, 'op2'])->name('op2');

#view all classes
Route::get('op3', [GMISController::class, 'op3'])->name('op3');

#view all meetings
Route::get('op4', [GMISController::class, 'op4'])->name('op4');

#search view all classes for a student
Route::get('op5m', [GMISController::class, 'op5m'])->name('op5m');
Route::get('op5_1m', [GMISController::class, 'op5_1m'])->name('op5_1m');
Route::get('op5_2m/{id}', [GMISController::class, 'op5_2m'])->name('op5_2m');

#search view all meetings for a student
Route::get('op6m', [GMISController::class, 'op6m'])->name('op6m');
Route::get('op6_1m', [GMISController::class, 'op6_1m'])->name('op6_1m');
Route::get('op6_2m/{id}', [GMISController::class, 'op6_2m'])->name('op6_2m');

#search view all students in a group
Route::get('op7m', [GMISController::class, 'op7m'])->name('op7m');
Route::get('op7_1m', [GMISController::class, 'op7_1m'])->name('op7_1m');
Route::get('op7_2m/{id}', [GMISController::class, 'op7_2m'])->name('op7_2m');

#search view all groups in a class
Route::get('op8m', [GMISController::class, 'op8m'])->name('op8m');
Route::get('op8_1m', [GMISController::class, 'op8_1m'])->name('op8_1m');
Route::get('op8_2m/{id}', [GMISController::class, 'op8_2m'])->name('op8_2m');





###BACHELOR STUDENTS###
#search view all classes for a student
Route::get('op5b', [GMISController::class, 'op5b'])->name('op5b');
Route::get('op5_1b', [GMISController::class, 'op5_1b'])->name('op5_1b');
Route::get('op5_2b/{id}', [GMISController::class, 'op5_2b'])->name('op5_2b');

#search view all meetings for a student
Route::get('op6b', [GMISController::class, 'op6b'])->name('op6b');
Route::get('op6_1b', [GMISController::class, 'op6_1b'])->name('op6_1b');
Route::get('op6_2b/{id}', [GMISController::class, 'op6_2b'])->name('op6_2b');

#search view all students in a group
Route::get('op7b', [GMISController::class, 'op7b'])->name('op7b');
Route::get('op7_1b', [GMISController::class, 'op7_1b'])->name('op7_1b');
Route::get('op7_2b/{id}', [GMISController::class, 'op7_2b'])->name('op7_2b');

#search view all groups in a class
Route::get('op8b', [GMISController::class, 'op8b'])->name('op8b');
Route::get('op8_1b', [GMISController::class, 'op8_1b'])->name('op8_1b');
Route::get('op8_2b/{id}', [GMISController::class, 'op8_2b'])->name('op8_2b');


Auth::routes();
