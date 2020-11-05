<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('pages.main');
});

Route::get('/main', [ArticleController::class, 'index']);
Route::get('/login', [ArticleController::class, 'login']);
