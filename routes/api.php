<?php

use App\Http\Controllers\AuthController;
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


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});

Route::prefix('users')->group(function () {
    Route::resource('/', UsersController::class);
    Route::get('getProductsDetails/{id}', [UsersController::class, 'getProductsDetails']);
    Route::get('checkIfBuyedProduct/{userId}/{productId}', [UsersController::class, 'checkIfBuyedProduct']);
    Route::post('deleteOrder/', [UsersController::class, 'deleteOrder']);
    Route::get('fallimenti/', [UsersController::class, 'fallimenti']);
    Route::get('vincitori/', [UsersController::class, 'vincitori']);
    Route::post('makeOrder', [UsersController::class, 'makeOrder'])->middleware('test');
});

Route::post('findOrderByProduct/', [OrdersController::class, 'findOrderByProduct']);
Route::post('showUserOrders/', [OrdersController::class, 'showUserOrders']);
Route::post('showOrder/', [OrdersController::class, 'showOrder']);
Route::resource('products', ProductsController::class);
Route::resource('orders', OrdersController::class);

