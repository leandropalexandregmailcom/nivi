<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\{
    UserController,
    Admin\StoreController,
    Admin\ProductController,
    Admin\AddressController,
    Admin\CategoryController,
    Admin\StatusController,
    Admin\PermissionController,
    Admin\ProfileController,
    Admin\CartController,
    Admin\OrderController
};
use App\Http\Controllers\Admin\LoginController;

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
    //Route::get('category', [CategoryController::class, 'index']);
    Route::resource('order', OrderController::class);
    Route::resource('status', StatusController::class);
    Route::resource('user', UserController::class);
    Route::resource('address', AddressController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('item', ItemController::class);
    Route::resource('cart', CartController::class);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
