<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curiculum;
use App\Models\Major;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
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

        return view('pages.admin.curryculum.create', compact('major'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $typeMap = [
            'matakuliah dasar' => 'matakuliah_dasar',
            'matakuliah inti' => 'matakuliah_inti',
            'matakuliah pilihan' => 'matakuliah_pilihan',
        ];
        $rawType = strtolower(trim((string) $request->type));
        $normalizedType = $typeMap[$rawType] ?? $request->type;
        $request->merge(['type' => $normalizedType]);

        $request->validate([
            'major_id' => 'required|exists:majors,id',
            'type' => 'required|in:matakuliah_dasar,matakuliah_inti,matakuliah_pilihan',
            'names' => 'required|string',
        ]);

        $names = preg_split("/\r\n|\n|\r/", $request->names);

        foreach ($names as $name) {
            $name = trim($name);

            if ($name !== '') {
                Curiculum::create([
                    'major_id' => $request->major_id,
                    'type' => $request->type,
                    'name' => $name,
                ]);
            }
        }

        return redirect()
            ->route('admin.majors.show', $request->major_id)
            ->with('success', 'Kurikulum berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
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
        $curiculum = Curiculum::findOrFail($id);

        return view('pages.admin.curryculum.edit', compact('curiculum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curiculum = Curiculum::findOrFail($id);

        $typeMap = [
            'matakuliah dasar' => 'matakuliah_dasar',
            'matakuliah inti' => 'matakuliah_inti',
            'matakuliah pilihan' => 'matakuliah_pilihan',
        ];
        $rawType = strtolower(trim((string) $request->type));
        $normalizedType = $typeMap[$rawType] ?? $request->type;
        $request->merge(['type' => $normalizedType]);

        $validated = $request->validate([
            'major_id' => 'required|exists:majors,id',
            'type' => 'required|in:matakuliah_dasar,matakuliah_inti,matakuliah_pilihan',
            'name' => 'required|string|max:255',
        ]);

        $curiculum->update($validated);

        return redirect()
            ->route('admin.majors.show', $curiculum->major_id)
            ->with('success', 'Kurikulum berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curiculum = Curiculum::findOrFail($id);
        $majorId = $curiculum->major_id;

        $curiculum->delete();

        return redirect()
            ->route('admin.majors.show', $majorId)
            ->with('success', 'Kurikulum berhasil dihapus.');
    }
}
