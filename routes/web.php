<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TimeController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/', [TimeController::class, 'index'])->name('index');
Route::get('/statistic', [TimeController::class, 'userStatistic'])->name('userStatistic');
Route::get('/manager', [TimeController::class, 'managerStatistic'])->name('manageruserStatistic');
Route::get('/admin', [TimeController::class, 'admin'])->name('admin');
