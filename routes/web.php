<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::post('next', [App\Http\Controllers\Nextcontroller::class, 'index']);
// Route::post('save_maths', [App\Http\Controllers\Nextcontroller::class, 'save_maths']);
// Route::post('save_sceince', [App\Http\Controllers\Nextcontroller::class, 'save_sceince']);
// Route::post('save_english', [App\Http\Controllers\Nextcontroller::class, 'save_english']);
Route::post('next', [App\Http\Controllers\DemoController::class, 'index']);
Route::post('getMathsQuestion', [App\Http\Controllers\DemoController::class, 'getMathsQuestion']);
Route::post('getSceinceQuestion', [App\Http\Controllers\DemoController::class, 'getSceinceQuestion']);
Route::post('getEnglishQuestion', [App\Http\Controllers\DemoController::class, 'getEnglishQuestion']);
///Route::post('result', 'result');
