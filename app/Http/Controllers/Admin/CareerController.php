<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carier;
use App\Models\Major;
use Illuminate\Http\Request;

class CareerController extends Controller
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

        return view('pages.admin.career.create', compact('major'));
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

        $names = preg_split("/\r\n|\n|\r/", $request->names);

        foreach ($names as $name) {
            $name = trim($name);

            if ($name !== '') {
                Carier::create([
                    'major_id' => $request->major_id,
                    'name' => $name,
                ]);
            }
        }

        return redirect()
            ->route('admin.majors.show', $request->major_id)
            ->with('success', 'Karir berhasil ditambahkan.');
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
        $carier = Carier::findOrFail($id);

        return view('pages.admin.career.edit', compact('carier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carier = Carier::findOrFail($id);

        $validated = $request->validate([
            'major_id' => 'required|exists:majors,id',
            'name' => 'required|string|max:255',
        ]);

        $carier->update($validated);

        return redirect()
            ->route('admin.majors.show', $carier->major_id)
            ->with('success', 'Karir berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carier = Carier::findOrFail($id);
        $majorId = $carier->major_id;

        $carier->delete();

        return redirect()
            ->route('admin.majors.show', $majorId)
            ->with('success', 'Karir berhasil dihapus.');
    }
}
