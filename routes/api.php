<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//routes juan
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */


Route::prefix('/user')->group(function() {
    Route::post('/login', [LoginController::class, 'login']);
    // La siguiente linea se puede omitir y hacer en el construct del userContro..
    Route::middleware('auth:api')->get('/all', [UserController::class, 'index']);
});