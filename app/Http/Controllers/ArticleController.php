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
        return view('auth.login');
    }
    public function kelas10()
    {
        return view('pages.10');
    }
    public function kelas11()
    {
        return view('pages.11');
    }
    public function kelas12()
    {
        return view('pages.12');
    }
}
