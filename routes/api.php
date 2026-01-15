<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PublicContentController;

Route::get('/staff', [PublicContentController::class, 'staff']);
Route::get('/products', [PublicContentController::class, 'products']);
Route::get('/events', [PublicContentController::class, 'events']);
