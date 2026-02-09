<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function index()
    {
        $majors = Major::with('category')->get();
        return view('pages.public.majors.index', compact('majors'));
    }
}
