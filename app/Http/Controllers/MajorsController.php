<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function index(Request $request)
    {
        $category = null;
        $majorsQuery = Major::with('category');

        $categoryParam = $request->input('category');
        if (!empty($categoryParam)) {
            $category = Category::where('slug', $categoryParam)
                ->orWhere('name', $categoryParam)
                ->first();

            $majorsQuery->whereHas('category', function ($query) use ($categoryParam) {
                $query->where('slug', $categoryParam)
                    ->orWhere('name', $categoryParam);
            });
        }

        $majors = $majorsQuery->get();

        return view('pages.public.majors.index', compact('majors', 'category'));
    }
}
