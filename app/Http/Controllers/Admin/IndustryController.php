<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Related_Industry;
use App\Models\Major;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     * (Tidak digunakan — industri ditampilkan di detail jurusan)
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

        return view('pages.admin.related_industry.create', compact('major'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'major_id' => 'required|exists:majors,id',
            'names' => 'required|string',
        ]);

        // pecah input berdasarkan baris
        $names = preg_split("/\r\n|\n|\r/", $request->names);

        foreach ($names as $name) {
            $name = trim($name);

            if ($name !== '') {
                Related_Industry::create([
                    'major_id' => $request->major_id,
                    'name' => $name,
                ]);
            }
        }

        return redirect()
            ->route('admin.majors.show', $request->major_id)
            ->with('success', 'Industri terkait berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * (Tidak digunakan — tidak ada halaman detail industri terpisah)
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
        $industry = Related_Industry::findOrFail($id);

        return view('pages.admin.related_industry.edit', compact('industry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $industry = Related_Industry::findOrFail($id);

        $validated = $request->validate([
            'major_id' => 'required|exists:majors,id',
            'name' => 'required|string|max:255',
        ]);

        $industry->update($validated);

        return redirect()
            ->route('admin.majors.show', $industry->major_id)
            ->with('success', 'Industri terkait berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $industry = Related_Industry::findOrFail($id);
        $majorId = $industry->major_id;

        $industry->delete();

        return redirect()
            ->route('admin.majors.show', $majorId)
            ->with('success', 'Industri terkait berhasil dihapus.');
    }
}
