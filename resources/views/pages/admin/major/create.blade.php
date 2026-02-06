@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Tambah Data Jurusan
            </h4>
            <a
                href="{{ route('admin.majors.index') }}"
                class="btn btn-secondary"
            >
                <i class="bx bx-arrow-back"></i>
                Kembali
            </a>
        </div>

        {{-- alert error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <h5 class="card-header">Tambah Data Jurusan </h5>
            <div class="card-body">
                <form
                    action="{{ route('admin.majors.store') }}"
                    method="POST"
                >
                    @csrf
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
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                        ></textarea>
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
                        ></textarea>
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
