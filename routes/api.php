<?php

use App\Http\Controllers\NoticiasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [NoticiasController::class, 'list']);
Route::post('/post', [NoticiasController::class, 'store']);
