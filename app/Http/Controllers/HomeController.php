<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = Category::all();

        return view('index', ['categories' => $allCategories]);
    }
}
