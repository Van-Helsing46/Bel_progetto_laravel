<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
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


Route::prefix('users')->group(function () {
    Route::resource('/', UserController::class);
    Route::get('getProductsDetails/{id}', [UserController::class, 'getProductsDetails']);
    Route::get('checkIfBuyedProduct/{userId}/{productId}', [UserController::class, 'checkIfBuyedProduct']);
    Route::post('makeOrder/', [UserController::class, 'makeOrder']);
});

Route::resource('products', ProductsController::class);
Route::resource('orders', OrdersController::class);
