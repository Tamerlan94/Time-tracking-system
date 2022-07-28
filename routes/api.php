<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkHoursController;
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

Route::controller(BaseController::class)->group(function (){
    //task
    Route::post('get-info', 'getInfoByTaskId')->name('getInfoByTaskId');
    Route::post('get-task', 'getTaskById')->name('getTaskById');
    Route::post('task-action', 'createOrUpdateTask')->name('task-action');
    Route::post('change-status', 'changeStatus')->name('change-status');


    //user
    Route::post('user-action', 'createOrUpdateUser')->name('user-action');
    Route::get('user-all', 'userAll')->name('user-all');

    //status
    Route::get('get-statuses', 'getAll')->name('get-all');

    //project
    Route::post('project-action', 'createOrUpdateProject')->name('project-action');

    //work hours
    Route::post('hours-action', 'createOrUpdateWorkHours')->name('hours-action');
    Route::post('update-by-task', 'updateByTaskAndWorkHours')->name('update-by-task');

});
