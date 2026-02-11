<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $countCategories = \App\Models\Category::count();
        $countMajors = \App\Models\Major::count();
        return view('pages.public.home.index', compact('countCategories', 'countMajors'));
    }
}
