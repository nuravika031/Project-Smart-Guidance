<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\ActivityService;
use App\Services\CategoryService;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $activityService;
    protected $categoryService;

    public function __construct(ActivityService $activityService, CategoryService $categoryService)
    {
        $this->activityService = $activityService;
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryService->getPaginate();
        return view('pages.admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();

            if ($request->hasFile('icon')) {
                $data['icon'] = $request->file('icon');
            }

            $this->categoryService->store($data);
            $this->activityService->log('category', auth()->id(), 'created', 'Membuat kategori: ' . $data['name']);

            DB::commit();
            return to_route('admin.categories.index')->with('success', 'Kategori berhasil ditambahkan.');
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
        // Not implemented
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = $this->categoryService->findById($id);
        return view('pages.admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        try {
            $data = $request->validated();

            if ($request->hasFile('icon')) {
                $data['icon'] = $request->file('icon');
            }

            $this->categoryService->update($data, $id);
            $this->activityService->log('category', auth()->id(), 'updated', 'Memperbarui kategori: ' . $data['name']);

            return to_route('admin.categories.index')->with('success', 'Kategori berhasil diperbarui.');
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
            $category = $this->categoryService->findById($id);
            $categoryName = $category->name;

            $this->categoryService->delete($id);
            $this->activityService->log('category', auth()->id(), 'deleted', 'Menghapus kategori: ' . $categoryName);

            return to_route('admin.categories.index')->with('success', 'Kategori berhasil dihapus.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Terjadi kesalahan: ' . $th->getMessage());
        }
    }
}
