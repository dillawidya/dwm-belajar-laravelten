<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        //eloquent
        $categories = Category::all();

        //query builder
        // $categories = DB::table("categories")->get()->toArray();

        return view('category.index');
    }
}
