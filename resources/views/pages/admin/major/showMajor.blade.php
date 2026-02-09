@extends('layouts.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Edit Detail Jurusan
            </h4>
            <a href="{{ route('admin.majors.index', $major->id) }}" class="btn btn-secondary">
                <i class="bx bx-arrow-back"></i>
                Kembali
            </a>
        </div>

        {{-- ================= COMPETITIONS ================= --}}
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Kompetensi</h5>
                <a href="{{ route('admin.competitions.create', ['major_id' => $major->id]) }}"
                    class="btn btn-primary btn-sm">
                    Tambah Kompetensi
                </a>

            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-uppercase text-muted">Nama Kompetensi</th>
                            <th class="text-uppercase text-muted">Jenis Kompetensi</th>
                            <th class="text-uppercase text-muted text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($competitions as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>

                                <td class="text-center">
                                    <a href="{{ route('admin.competitions.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.competitions.destroy', $item->id) }}"
                                        method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        


        {{-- ================= CURRICULUM ================= --}}
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Kurikulum</h5>
                <button class="btn btn-primary btn-sm">Tambah Kurikulum</button>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mata Kuliah Dasar</th>
                            <th>Mata Kuliah Inti</th>
                            <th>Mata Kuliah Pilihan</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>MTK D</li>
                                    <li>Pendidikan Pancasila</li>
                                    <li>Or</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>PTSD</li>
                                    <li>OR</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Monile Programing</li>
                                    <li>Vomputer Vision</li>
                                </ul>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        {{-- ================= RELATED INDUSTRIES ================= --}}
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Industri Terkait</h5>
                <button class="btn btn-primary btn-sm">Tambah Industri</button>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Industri Terkait</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Software House</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        {{-- ================= CAREERS ================= --}}
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Karir</h5>
                <button class="btn btn-primary btn-sm">Tambah Karir</button>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Karir</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Software Engineer</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    {{-- sweetalert --}}
@endpush
