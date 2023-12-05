<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }

    public function biodata()
    {
        return view('pages.biodata');
    }
}
