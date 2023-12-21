<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing')->with([
            'products' => Products::all()
        ]);
    }
}
