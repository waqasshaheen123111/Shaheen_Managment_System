<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\GuzzleApiController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/user33',[App\Http\Controllers\Admin\UserController::class,'endpoints']);
Route::post('/create_movie12',[App\Http\Controllers\Api\ApiController::class,'store_movie12']);
Route::get('/get_movie',[App\Http\Controllers\Api\ApiController::class,'get_movie']);
// Route::get('/form_submit1',[App\Http\Controllers\Admin\UserController::class,'form-submit']);
// Route::get('/form_submit1',[App\Http\Controllers\Admin\UserController::class,'form-submit']);
