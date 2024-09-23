<?php

use App\Http\Controllers\Api\v1\DeliveryController;
use App\Http\Controllers\Api\v1\UserDeliveryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/delivery-status/{tracking_number}', [DeliveryController::class, 'deliveryStatus']);
