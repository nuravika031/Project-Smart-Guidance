@extends('layouts.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Tambah Kompetensi
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
            <h5 class="card-header">Form Tambah Kompetensi</h5>
            <div class="card-body">

                <form action="{{ route('admin.competitions.store') }}" method="POST">
                    @csrf

                    {{-- hidden major_id --}}
                    <input type="hidden" name="major_id" value="{{ $major->id }}">

                    {{-- pilih type --}}
                    <div class="mb-3">
                        <label class="form-label">Jenis Kompetensi</label>
                        <select name="type" class="form-control" required>
                            <option value="">-- Pilih Jenis --</option>
                            <option value="hardskill">Hard Skill</option>
                            <option value="softskill">Soft Skill</option>
                        </select>
                    </div>

                    {{-- input banyak kompetensi --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Daftar Kompetensi
                            <small class="text-muted">(satu baris = satu kompetensi)</small>
                        </label>
                        <textarea name="names" class="form-control" rows="5"
                            placeholder="Contoh:
Programming
Data Analysis
Problem Solving" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </form>

                {{-- <form action="{{ route('admin.competitions.store') }}" method="POST">
                    @csrf


                    <input type="hidden" name="major_id" value="{{ $major->id }}">

                    <div class="mb-3">
                        <label for="type" class="form-label">
                            Jenis Kompetensi <i class="text-danger">*</i>
                        </label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="">Pilih Jenis</option>
                            <option value="hardskill" {{ old('type') == 'hardskill' ? 'selected' : '' }}>
                                Hard Skill
                            </option>
                            <option value="softskill" {{ old('type') == 'softskill' ? 'selected' : '' }}>
                                Soft Skill
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Nama Kompetensi <i class="text-danger">*</i>
                        </label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Contoh: Programming, Problem Solving" value="{{ old('name') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                </form> --}}

            </div>
        </div>
    </div>
@endsection
