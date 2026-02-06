@extends('layouts.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Edit Detail Jurusan
            </h4>
            <a
                href="{{ route('admin.majors.index', $major->id) }}"
                class="btn btn-secondary"
            >
                <i class="bx bx-arrow-back"></i>
                Kembali
            </a>
        </div>

        {{-- ================= COMPETITIONS ================= --}}
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Kompetensi</h5>
                <button class="btn btn-primary btn-sm">Tambah Kompetensi</button>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Hard Skill</th>
                            <th>Soft Skill</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>Programming skill</li>
                                    <li>Algoritma dan struktur data</li>
                                    <li>Or</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Logical thinking</li>
                                    <li>Problem solving</li>
                                    <li>Critical thinking</li>
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
