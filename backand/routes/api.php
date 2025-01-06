<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GameImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;

// Resource routes untuk masing-masing controller
Route::apiResource('customers', CustomerController::class);
Route::apiResource('games', GameController::class);
Route::apiResource('game-images', GameImageController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('order-details', OrderDetailController::class);

