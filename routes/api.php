<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    AuthController,
    Auth\RegisterController,
    Api\StoreController,
    Api\ProductController,
    Api\AddressController,
    Api\CategoryController,
    Api\StatusController,
    Api\PermissionController,
    Api\ProfileController,
    Api\CartController,
    Api\OrderController
};

Route::group(['middleware' => ['guest:api']], function()
{
    Route::post('user/create', 'UserController@create');
    Route::post('login', 'LoginController@login');
});

Route::group(['middleware' => 'auth:api'], function() {

    Route::apiResource('user', UserController::class);
    Route::apiResource('client', ClientController::class);
    Route::apiResource('store', StoreController::class);
    Route::apiResource('product', ProductController::class);
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('order', OrderController::class);
    Route::apiResource('status', StatusController::class);
    Route::apiResource('user', UserController::class);
    Route::apiResource('address', AddressController::class);
    Route::apiResource('permission', PermissionController::class);
    Route::apiResource('profile', ProfileController::class);
    Route::apiResource('item', ItemController::class);
    Route::apiResource('cart', CartController::class);

});
