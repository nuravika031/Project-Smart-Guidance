@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Edit Data Kategori
            </h4>
            <a
                href="{{ route('admin.categories.index') }}"
                class="btn btn-secondary"
            >
                <i class="bx bx-arrow-back"></i>
                Kembali
            </a>
        </div>

        <div class="card">
            <h5 class="card-header">Edit Data Kategori </h5>
            <div class="card-body">
                <form
                    action="{{ route('admin.categories.update', $category->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label
                            for="name"
                            class="form-label"
                        >Nama Kategori
                            <i class="text-danger">*</i>
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Nama Kategori"
                            required
                            value="{{ old('name', $category->name) }}"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="description"
                            class="form-label"
                        >Deskripsi</label>
                        <textarea
                            class="form-control"
                            id="description"
                            name="description"
                            rows="3"
                            placeholder="Deskripsi Kategori"
                        >{!! old('description', $category->description) !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label
                            for="current_icon"
                            class="form-label"
                        >Icon Saat Ini</label>
                        <div>
                            <img
                                src="{{ asset('storage/' . $category->icon) }}"
                                alt="Current Icon"
                                width="100"
                            >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label
                            for="icon"
                            class="form-label"
                        >Icon</label>
                        <input
                            type="file"
                            class="form-control"
                            id="icon"
                            name="icon"
                        >
                        <small>Biarkan kosong jika tidak ingin mengubah icon</small>
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
