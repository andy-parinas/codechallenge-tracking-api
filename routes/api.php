<?php

use App\Http\Controllers\Api\v1\DeliveryController;
use App\Http\Controllers\Api\v1\UserDeliveryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::prefix('v1')->group(function(){

    Route::prefix('users/{userId}')->group(function(){

        Route::prefix('deliveries')->group(function(){
            Route::get('/', [UserDeliveryController::class, 'index'])->name('users.deliveries.list');
            Route::get('{deliveryId}', [UserDeliveryController::class, 'show'])->name('users.deliveries.show');

        });

    });


});