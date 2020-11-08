<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.main');
});

Route::get('/1', function () {
    return view('auth.login');
});



Route::get('/main', [ArticleController::class, 'index']);
Route::get('/10', [ArticleController::class, 'kelas10']);
Route::get('/11', [ArticleController::class, 'kelas11']);
Route::get('/12', [ArticleController::class, 'kelas12']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");
