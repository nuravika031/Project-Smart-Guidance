@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Tambah Data Kategori
            </h4>
            <a
                href="{{ route('admin.categories.index') }}"
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
            <h5 class="card-header">Tambah Data Kategori </h5>
            <div class="card-body">
                <form
                    action="{{ route('admin.categories.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
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
                        ></textarea>
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
                            required
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
