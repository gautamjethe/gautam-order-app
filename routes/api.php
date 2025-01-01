<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

Route::fallback(function () {
    return response()->json([
        'error' => 'Invalid API endpoint'
    ], 404);
});
Route::apiResource('customers', CustomerController::class);
Route::apiResource('products', ProductController::class);

Route::post('/orders', [OrderController::class, 'placeOrder']);
Route::put('/orders/{order_id}', [OrderController::class, 'modifyOrder']);
Route::delete('/orders/{order_id}', [OrderController::class, 'cancelOrder']);
Route::get('/customers/{customer_id}/total', [OrderController::class, 'calculateTotal']);

