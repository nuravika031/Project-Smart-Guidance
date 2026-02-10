@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Data Jurusan
            </h4>
            <a href="{{ route('admin.majors.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        {{-- alert success --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- alert error --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="card">
            <h5 class="card-header">Daftar Jurusan </h5>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Kategori</th>
                            <th>Nama Jurusan</th>
                            <th style="width: 40%;">Deskripsi</th>
                            <th style="width: 50%;">Profile</th>
                            <th>Durasi Studi</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($major as $item)
                            <tr>
                                <td>
                                    {{ ($major->currentPage() - 1) * $major->perPage() + $loop->iteration }}
                                </td>
                                <td>
                                    {{ $item->category->name ?? '-' }}
                                </td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td class="text-wrap align-top"
                                    style="max-width: 760px; white-space: normal; word-break: break-word;">
                                    {{ $item->description ?? '-' }}
                                </td>
                                <td class="text-wrap align-top"
                                    style="max-width: 760px; white-space: normal; word-break: break-word;">
                                    {{ $item->profile ?? '-' }}
                                </td>
                                <td>
                                    {{ $item->study_duration ?? '-' }}
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        {{-- Tombol Detail --}}
                                        <a href="{{ route('admin.majors.show', $item->id) }}" 
                                           class="btn btn-info btn-sm text-white">
                                            <i class="bx bx-detail me-1"></i> Detail
                                        </a>

                                        {{-- Tombol Edit --}}
                                        <a href="{{ route('admin.majors.edit', $item->id) }}" 
                                           class="btn btn-warning btn-sm">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>

                                        {{-- Tombol Delete --}}
                                        <form id="delete-form-{{ $item->id }}"
                                              action="{{ route('admin.majors.destroy', $item->id) }}" 
                                              method="POST" 
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm btn-delete"
                                                    data-id="{{ $item->id }}" 
                                                    data-name="{{ $item->name }}">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data jurusan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center mt-3">
            <div>
                {{ $major->links() }}
            </div>
        </div>
        </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.dataset.id;
                    const name = this.dataset.name;

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: `Jurusan "${name}" akan dihapus secara permanen!`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('delete-form-' + id).submit();
                        }
                    });
                });
            });
        });
    </script>
@endpush
