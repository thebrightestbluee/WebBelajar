<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('welcome');
});

Route::get('/main', [MainController::class, 'index']);
Route::get('/login', [MainController::class, 'login']);
