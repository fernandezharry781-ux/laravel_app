<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\ProductController;


Route::apiResource('products', ProductController::class);

Route::apiResource('users', UserController::class);
