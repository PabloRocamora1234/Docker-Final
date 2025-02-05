<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SnackController;
use App\Http\Controllers\DrinkController;

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

Route::get('/shop/{id}', [ShopController::class, 'getById']);
Route::post('/shop', [ShopController::class, 'create']);
Route::apiResource('/Toy', ToyController::class);
Route::get('/data', [DataController::class, 'index']);
Route::get('/snacks', [SnackController::class, 'index']);
Route::get('/shops', [ShopController::class, 'index']);
Route::get('/drinks', [DrinkController::class, 'index']);