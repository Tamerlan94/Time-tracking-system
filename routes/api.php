<?php

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


// роуты находятся в файле api, что означает что перед каждым адресом будет стоять prefix api
Route::controller(UserController::class)->prefix('user')->name('user')->group(function (){
    Route::post('create-update', 'createOrUpdateUser')->name('create');
});

Route::controller(TaskController::class)->prefix('task')->name('task')->group(function (){
    Route::post('create-update', 'createOrUpdateTask')->name('create');
    Route::post('change-status', 'changeStatus')->name('change-status');
});

Route::controller(ProjectController::class)->prefix('project')->name('project')->group(function (){
    Route::post('create-update', 'createOrUpdateProject')->name('create');
});
