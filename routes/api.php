<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// роуты находятся в файле api, что означает что перед каждым адресом будет стоять prefix api
Route::controller(UserController::class)->prefix('user')->name('user')->middleware('role.check')->group(function () {
    Route::get('check', 'checkRole');
    Route::post('create-update', 'createOrUpdateUser')->name('create');
});

Route::post('get-info', [TaskController::class, 'getInfoByTaskId']);
Route::post('task', [TaskController::class, 'getTaskById'])->name('getTaskById');

Route::controller(TaskController::class)->prefix('task')->name('task')->middleware('role.check')->group(function () {
    Route::get('check', 'checkRole');
    Route::post('', 'getTaskById')->name('getTaskById');
    Route::post('create-update', 'createOrUpdateTask')->name('create');
    Route::post('change-status', 'changeStatus')->name('change-status');
});

Route::controller(ProjectController::class)->prefix('project')->name('project')->middleware('role.check')->group(function () {
    Route::get('check', 'checkRole');
    Route::post('create-update', 'createOrUpdateProject')->name('create');
});

Route::controller(ProjectController::class)->prefix('work-hours')->name('work-hours')->middleware('role.check')->group(function () {
    Route::post('create-update', 'createOrUpdateWorkHours')->name('create');
});
