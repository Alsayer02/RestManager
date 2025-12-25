<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\ImageController;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::get('profile', 'profile')->middleware('auth:sanctum');
    Route::get('logout', 'logout')->middleware('auth:sanctum');
    Route::post('changePassword', 'changePassword')->middleware('auth:sanctum');
});
Route::controller(OrderController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('index_order', 'index');
    Route::post('store', 'store');
    Route::get('show/{id}', 'profile');
    Route::put('update_order/{id}', 'update');
    Route::delete('delete_order/{id}', 'destroy');
});
Route::controller(MenuController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('index_menu', 'index');
    Route::post('store_menu', 'store');
    Route::get('show_menu/{id}', 'show');
    Route::put('update_menu/{id}', 'update');
    Route::delete('delete/{id}', 'destroy');
});
Route::post('upload_image/{id}',[ImageController::class, 'uploadImage'])->middleware('auth:sanctum');
