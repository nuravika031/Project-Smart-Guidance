@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Edit Data Jurusan
            </h4>
            <a
                href="{{ route('admin.majors.index') }}"
                class="btn btn-secondary"
            >
                <i class="bx bx-arrow-back"></i>
                Kembali
            </a>
        </div>

        <div class="card">
            <h5 class="card-header">Edit Data Jurusan </h5>
            <div class="card-body">
                <form
                    action="{{ route('admin.majors.update', $major->id) }}"
                    method="POST"
                >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label
                            for="category_id"
                            class="form-label"
                        >Kategori
                            <i class="text-danger">*</i>
                        </label>
                        <select
                            class="form-control"
                            id="category_id"
                            name="category_id"
                            required
                        >
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option
                                    value="{{ $category->id }}"
                                    {{ (string) old('category_id', $major->category_id) === (string) $category->id ? 'selected' : '' }}
                                >
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label
                            for="name"
                            class="form-label"
                        >Nama Jurusan
                            <i class="text-danger">*</i>
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Nama Jurusan"
                            required
                            value="{{ old('name', $major->name) }}"
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
                            placeholder="Deskripsi Jurusan"
                        >{!! old('description', $major->description) !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label
                            for="profile"
                            class="form-label"
                        >Profile</label>
                        <textarea
                            class="form-control"
                            id="profile"
                            name="profile"
                            rows="3"
                            placeholder="Profile Jurusan"
                        >{!! old('profile', $major->profile) !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label
                            for="study_duration"
                            class="form-label"
                        >Durasi Study</label>
                        <input
                            type="text"
                            class="form-control"
                            id="study_duration"
                            name="study_duration"
                            placeholder="Durasi Study"
                            value="{{ old('study_duration', $major->study_duration) }}"
                        >
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
