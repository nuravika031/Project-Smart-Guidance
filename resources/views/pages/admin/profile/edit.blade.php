@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Profile</h5>

            <a href="{{ route('admin.profile.index') }}"
               class="btn btn-secondary btn-sm">
                <i class="bx bx-arrow-back"></i> Kembali
            </a>
        </div>

        <div class="card-body">

            {{-- Alert Success --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Alert Error --}}
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Update Profile --}}
            <form action="{{ route('admin.profile.update') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $user->name) }}">

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Profile</label>
                    <input type="file"
                           name="photo"
                           class="form-control @error('photo') is-invalid @enderror">

                    @error('photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>
            </form>

            <hr class="my-4">

            {{-- Update Password --}}
            <form action="{{ route('admin.profile.updatePassword') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Password Lama</label>
                    <input type="password"
                           name="current_password"
                           class="form-control @error('current_password') is-invalid @enderror">

                    @error('current_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Password Baru</label>
                    <input type="password"
                           name="new_password"
                           class="form-control @error('new_password') is-invalid @enderror">

                    @error('new_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Konfirmasi Password Baru</label>
                    <input type="password"
                           name="new_password_confirmation"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-warning">
                    Update Password
                </button>
            </form>

        </div>
    </div>
</div>
@endsection
