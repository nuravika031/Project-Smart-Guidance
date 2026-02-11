@extends('layouts.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Profile Saya
            </h4>
            <a href="{{ route('admin.profile.edit') }}" class="btn btn-primary">
                <i class="bx bx-edit-alt me-1"></i> Edit Profile
            </a>
        </div>

        {{-- Alert Success --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Alert Error --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">

                <div class="row">

                    {{-- Avatar Default --}}
                    <div class="col-md-4 text-center border-end">
                        <div class="mb-3">
                            <div class="avatar avatar-xl mx-auto">
                                <div class="avatar avatar-xl mx-auto">
                                    @if ($user->photo)
                                        <img src="{{ asset('storage/' . $user->photo) }}" class="rounded-circle"
                                            width="120" height="120" style="object-fit: cover;">
                                    @else
                                        <span class="avatar-initial rounded-circle bg-label-primary fs-2">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </span>
                                    @endif
                                </div>

                            </div>
                        </div>

                        <h5 class="mb-1">{{ $user->name }}</h5>

                    </div>

                    {{-- Detail Informasi --}}
                    <div class="col-md-8">
                        <h5 class="mb-3">Informasi Akun</h5>

                        <table class="table table-borderless">
                            <tr>
                                <th width="35%">ID User</th>
                                <td>: {{ $user->id }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>: {{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: {{ $user->email }}</td>
                            </tr>

                            <tr>
                                <th>Tanggal Registrasi</th>
                                <td>: {{ $user->created_at->format('d M Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Terakhir Update</th>
                                <td>: {{ $user->updated_at->format('d M Y H:i') }}</td>
                            </tr>
                        </table>

                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
