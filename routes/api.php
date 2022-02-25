<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
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
    Route::resource('/', UsersController::class);
    Route::get('getProductsDetails/{id}', [UsersController::class, 'getProductsDetails']);
    Route::get('checkIfBuyedProduct/{userId}/{productId}', [UsersController::class, 'checkIfBuyedProduct']);
    Route::post('makeOrder/', [UsersController::class, 'makeOrder']);
    Route::post('deleteOrder/', [UsersController::class, 'deleteOrder']);
    Route::get('fallimenti', [UsersController::class, 'fallimenti']);
    Route::get('vincitori', [UsersController::class, 'vincitori']);
});

Route::post('findOrderByProduct/', [OrdersController::class, 'findOrderByProduct']);
Route::post('showUserOrders/', [OrdersController::class, 'showUserOrders']);
Route::post('showOrder/', [OrdersController::class, 'showOrder']);
Route::resource('products', ProductsController::class);
Route::resource('orders', OrdersController::class);
