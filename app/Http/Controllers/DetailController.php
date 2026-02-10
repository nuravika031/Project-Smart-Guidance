<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show(string $id)
    {
        $major = Major::with(['category', 'competitions', 'curiculum', 'relatedIndustru', 'cariers'])
            ->findOrFail($id);

        $competitions = [
            'hardskill' => $major->competitions->where('type', 'hardskill'),
            'softskill' => $major->competitions->where('type', 'softskill'),
        ];

        $curiculums = [
            'matakuliah_dasar' => $major->curiculum->where('type', 'matakuliah_dasar'),
            'matakuliah_inti' => $major->curiculum->where('type', 'matakuliah_inti'),
            'matakuliah_pilihan' => $major->curiculum->where('type', 'matakuliah_pilihan'),
        ];

        return view('pages.public.detail_major.index', compact(
            'major',
            'competitions',
            'curiculums'
        ));
    }
}
