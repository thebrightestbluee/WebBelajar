<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('pages.main');
    }
    public function login()
    {
        return view('pages.login');
    }
}