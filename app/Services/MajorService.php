<?php

namespace App\Services;

use App\Models\Major;
use Illuminate\Support\Str;

class MajorService
{
    /**
     * Get all majors
     */
    public function getPaginate()
    {
        return Major::with('category')->latest()->paginate(10);
    }

    /**
     * Find major by ID
     */
    public function findById($id)
    {
        return Major::with('category')->findOrFail($id);
    }

    /**
     * Store a new major
     */
    public function store(array $data)
    {
        $data['slug'] = Str::slug($data['name']);

        return Major::create($data);
    }

    /**
     * Update an existing major
     */
    public function update(array $data, $id)
    {
        $major = $this->findById($id);
        $data['slug'] = Str::slug($data['name']);

        $major->update($data);
        return $major;
    }

    /**
     * Delete a major
     */
    public function delete($id)
    {
        $major = $this->findById($id);
        return $major->delete();
    }
}
