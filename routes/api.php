<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});

Route::apiResource('posts', PostController::class);
