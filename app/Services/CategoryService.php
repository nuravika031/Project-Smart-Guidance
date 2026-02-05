<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryService
{
    /**
     * Get all categories
     */
    public function getPaginate()
    {
        return Category::latest()->paginate(10);
    }

    /**
     * Find category by ID
     */
    public function findById($id)
    {
        return Category::findOrFail($id);
    }

    /**
     * Store a new category
     */
    public function store(array $data)
    {
        $data['slug'] = Str::slug($data['name']);

        if (isset($data['icon']) && $data['icon']) {
            $data['icon'] = $this->uploadIcon($data['icon']);
        }

        return Category::create($data);
    }

    /**
     * Update an existing category
     */
    public function update(array $data, $id)
    {
        $category = $this->findById($id);
        $data['slug'] = Str::slug($data['name']);

        if (isset($data['icon']) && $data['icon']) {
            // Delete old icon if exists
            $this->deleteIcon($category->icon);
            $data['icon'] = $this->uploadIcon($data['icon']);
        }

        $category->update($data);
        return $category;
    }

    /**
     * Delete a category
     */
    public function delete($id)
    {
        $category = $this->findById($id);

        // Delete icon if exists
        $this->deleteIcon($category->icon);

        return $category->delete();
    }

    /**
     * Upload icon file
     */
    private function uploadIcon($icon)
    {
        $filename = time() . '_' . Str::random(10) . '.' . $icon->getClientOriginalExtension();
        $icon->storeAs('categories', $filename, 'public');
        return 'categories/' . $filename;
    }

    /**
     * Delete icon file
     */
    private function deleteIcon($iconPath)
    {
        if ($iconPath && Storage::disk('public')->exists($iconPath)) {
            Storage::disk('public')->delete($iconPath);
        }
    }
}
