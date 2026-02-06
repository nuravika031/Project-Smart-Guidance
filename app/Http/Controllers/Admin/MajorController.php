<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MajorRequest;
use App\Models\Category;
use App\Services\ActivityService;
use App\Services\MajorService;
use Illuminate\Support\Facades\DB;

class MajorController extends Controller
{
    protected $activityService;
    protected $majorService;

    public function __construct(ActivityService $activityService, MajorService $majorService)
    {
        $this->activityService = $activityService;
        $this->majorService = $majorService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $major = $this->majorService->getPaginate();
        return view('pages.admin.major.index', compact('major'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('pages.admin.major.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MajorRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();

            $this->majorService->store($data);
            $this->activityService->log('major', auth()->id(), 'created', 'Membuat jurusan: ' . $data['name']);

            DB::commit();
            return to_route('admin.majors.index')->with('success', 'Jurusan berhasil ditambahkan.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
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
        $major = $this->majorService->findById($id);
        $categories = Category::latest()->get();
        return view('pages.admin.major.edit', compact('major', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MajorRequest $request, string $id)
    {
        try {
            $data = $request->validated();

            $this->majorService->update($data, $id);
            $this->activityService->log('major', auth()->id(), 'updated', 'Memperbarui jurusan: ' . $data['name']);

            return to_route('admin.majors.index')->with('success', 'Jurusan berhasil diperbarui.');
        } catch (\Throwable $th) {
            return back()->withInput()->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $major = $this->majorService->findById($id);
            $majorName = $major->name;

            $this->majorService->delete($id);
            $this->activityService->log('major', auth()->id(), 'deleted', 'Menghapus jurusan: ' . $majorName);

            return to_route('admin.majors.index')->with('success', 'Jurusan berhasil dihapus.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }
}
