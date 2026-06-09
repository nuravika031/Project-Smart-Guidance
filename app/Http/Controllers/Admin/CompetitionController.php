<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\Major;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     * (Tidak digunakan — kompetensi ditampilkan di detail jurusan)
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $majorId = $request->query('major_id');

        $major = Major::findOrFail($majorId);

        return view('pages.admin.competition.create', compact('major'));
    }
    /**
     * 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'major_id' => 'required|exists:majors,id',
            'type' => 'required|in:hardskill,softskill',
            'names' => 'required|string',
        ]);

        // pecah input berdasarkan baris
        $names = preg_split("/\r\n|\n|\r/", $request->names);

        foreach ($names as $name) {
            $name = trim($name);

            if ($name !== '') {
                Competition::create([
                    'major_id' => $request->major_id,
                    'type' => $request->type,
                    'name' => $name,
                ]);
            }
        }

        return redirect()
            ->route('admin.majors.show', $request->major_id)
            ->with('success', 'Kompetensi berhasil ditambahkan');

        // $validated = $request->validate([
        //     'major_id' => 'required|exists:majors,id',
        //     'type' => 'required|in:hardskill,softskill',
        //     'name' => 'required|string|max:255',
        // ]);

        // Competition::create($validated);

        // return redirect()
        //     ->route('admin.majors.show', $validated['major_id'])
        //     ->with('success', 'Kompetensi berhasil ditambahkan');


        //Ini yang baru lagi
        //$validated = $request->validate([
        //     'major_id' => 'required|exists:majors,id',
        //     'type' => 'required|in:hardskill,softskill',
        //     'name' => 'required|string|max:255',
        // ]);

        // Competition::create($validated);

        // return redirect()
        //     ->route('admin.majors.show', $validated['major_id'])
        //     ->with('success', 'Kompetensi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     * (Tidak digunakan — tidak ada halaman detail kompetensi terpisah)
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $competition = Competition::findOrFail($id);

        return view('pages.admin.competition.edit', compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $competition = Competition::findOrFail($id);

        $validated = $request->validate([
            'major_id' => 'required|exists:majors,id',
            'type' => 'required|in:hardskill,softskill',
            'name' => 'required|string|max:255',
        ]);

        $competition->update($validated);

        return redirect()
            ->route('admin.majors.show', $competition->major_id)
            ->with('success', 'Kompetensi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $competition = Competition::findOrFail($id);
        $majorId = $competition->major_id;

        $competition->delete();

        return redirect()
            ->route('admin.majors.show', $majorId)
            ->with('success', 'Kompetensi berhasil dihapus.');
    }
}
