@extends('layouts.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Tambah Kurikulum
            </h4>
            <a href="{{ route('admin.majors.show', $major->id) }}" class="btn btn-secondary">
                <i class="bx bx-arrow-back"></i> Kembali
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
            <h5 class="card-header">Form Tambah Kurikulum</h5>
            <div class="card-body">

                <form action="{{ route('admin.curiculums.store') }}" method="POST">
                    @csrf

                    {{-- hidden major_id --}}
                    <input type="hidden" name="major_id" value="{{ $major->id }}">

                    {{-- pilih type --}}
                    <div class="mb-3">
                        <label class="form-label">Jenis Kurikulum</label>
                        <select name="type" class="form-control" required>
                            <option value="">-- Pilih Jenis --</option>
                            <option value="matakuliah_dasar">Matakuliah Dasar</option>
                            <option value="matakuliah_inti">Matakuliah Inti</option>
                            <option value="matakuliah_pilihan">Matakuliah Pilihan</option>
                        </select>
                    </div>

                    {{-- input banyak kurikulum --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Daftar Kurikulum
                            <small class="text-muted">(satu baris = satu mata kuliah)</small>
                        </label>
                        <textarea name="names" class="form-control" rows="5"
                            placeholder="Contoh:
Kalkulus
Algoritma dan Pemrograman
Basis Data" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
