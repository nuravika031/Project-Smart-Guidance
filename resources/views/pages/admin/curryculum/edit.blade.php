@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold mb-0">
            <span class="text-muted fw-light"></span> Edit Kurikulum
        </h4>
        <a
            href="{{ route('admin.majors.show', $curiculum->major_id) }}"
            class="btn btn-secondary"
        >
            <i class="bx bx-arrow-back"></i>
            Kembali
        </a>
    </div>

    {{-- Alert error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Form Edit Kurikulum</h5>
        <div class="card-body">

            <form
                action="{{ route('admin.curiculums.update', $curiculum->id) }}"
                method="POST"
            >
                @csrf
                @method('PUT')

                {{-- major_id --}}
                <input
                    type="hidden"
                    name="major_id"
                    value="{{ $curiculum->major_id }}"
                >

                {{-- Type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">
                        Jenis Kurikulum <i class="text-danger">*</i>
                    </label>
                    <select
                        name="type"
                        id="type"
                        class="form-control"
                        required
                    >
                        <option value="">Pilih Jenis</option>
                        <option value="matakuliah_dasar"
                            {{ old('type', $curiculum->type) == 'matakuliah_dasar' ? 'selected' : '' }}>
                            Matakuliah Dasar
                        </option>
                        <option value="matakuliah_inti"
                            {{ old('type', $curiculum->type) == 'matakuliah_inti' ? 'selected' : '' }}>
                            Matakuliah Inti
                        </option>
                        <option value="matakuliah_pilihan"
                            {{ old('type', $curiculum->type) == 'matakuliah_pilihan' ? 'selected' : '' }}>
                            Matakuliah Pilihan
                        </option>
                    </select>
                </div>

                {{-- Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label">
                        Nama Mata Kuliah <i class="text-danger">*</i>
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Contoh: Kalkulus, Algoritma, Basis Data"
                        value="{{ old('name', $curiculum->name) }}"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>

            </form>

        </div>
    </div>
</div>
@endsection
