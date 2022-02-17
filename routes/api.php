<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersDatatableController;
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
Route::post('/media', [MediaController::class, 'store']);
Route::get('/users/datatable', [UsersDatatableController::class, 'index']);
