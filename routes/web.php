<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\{
    UserController,
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth:web'], function() {
    Route::resource('user', UserController::class);
    Route::resource('client', ClientController::class);
    Route::resource('store', StoreController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('order', OrderController::class);
    Route::resource('status', StatusController::class);
    Route::resource('user', UserController::class);
    Route::resource('address', AddressController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('item', ItemController::class);
    Route::resource('cart', CartController::class);

});
