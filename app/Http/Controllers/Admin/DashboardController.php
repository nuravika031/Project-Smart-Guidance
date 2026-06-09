<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Major;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalMajors = Major::count();
        $averageMajors = $totalCategories > 0 ? ceil($totalMajors / $totalCategories) : 0;

        // Get majors grouped by category with count
        $majorsByCategory = Category::withCount('majors')->get();

        return view('pages.admin.dashboard.index', compact(
            'totalCategories',
            'totalMajors',
            'averageMajors',
            'majorsByCategory'
        ));
    }
}
