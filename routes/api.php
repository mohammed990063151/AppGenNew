<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplcationController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\ScreenesController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['prefix' => 'applicationes'], function () {
Route::get('/', [ApplcationController::class, 'index']);
Route::get('/show/{id}', [ApplcationController::class, 'show']);
Route::post('/post', [ApplcationController::class, 'store']);
Route::post('/update/{id}', [ApplcationController::class, 'update']);
});

Route::group(['prefix' => 'profiles'], function () {
    Route::get('/', [ProfileController::class, 'index']);
    Route::get('/show/{id}', [ProfileController::class, 'show']);
    Route::post('/post', [ProfileController::class, 'store']);
    Route::post('/update/{id}', [ProfileController::class, 'update']);
    });

Route::group(['prefix' => 'Screen'], function () {

        Route::get('/', [ScreenesController::class, 'index']);
        Route::get('/show/{id}', [ScreenesController::class, 'show']);
        Route::post('/post', [ScreenesController::class, 'store']);
        Route::post('/update/{id}', [ScreenesController::class, 'update']);
        });
