<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/api/test-me", function () {
    return response()->json(['Hello' => 'world']);
});

Route::get('/api/posts', [PostController::class, 'index']);
Route::get('/posts/delete/{id}', [PostController::class, 'delete']);
Route::get('/posts/get/{id}', [PostController::class, 'get']);
Route::post('/api/posts/save', [PostController::class, 'save']);
Route::post('/posts/update', [PostController::class, 'update']);


Route::get('/{vue_capture?}', function () {
    return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');
