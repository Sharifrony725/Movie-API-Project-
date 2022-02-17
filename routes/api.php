<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#Category API
Route::prefix('category')->group(function (){
Route::get('/', [CategoryController::class, 'index']);
Route::get('/{id}', [CategoryController::class, 'show']);
Route::post('/', [CategoryController::class, 'store']);
Route::post('update/{id}', [CategoryController::class, 'update']);
Route::delete('/{id}', [CategoryController::class, 'delete' ]);
});
