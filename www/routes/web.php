<?php

use App\Http\Controllers\PerfomanceController;
use App\Http\Controllers\UserController;
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
Route::get('/about', [PerfomanceController::class, 'about']);
Route::get('/findUs', [PerfomanceController::class, 'findUs']);
Route::get('/registration', [UserController::class, 'registration']);
Route::post('/register', [UserController::class, 'registrate']);
Route::resource('perfomance',PerfomanceController::class);
