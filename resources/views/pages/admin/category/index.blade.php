@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Data Kategori
            </h4>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Tambah Data</a>
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
            <h5 class="card-header">Daftar Kategori </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Icon</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($categories as $item)
                            <tr>
                                <td>
                                    {{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->iteration }}
                                </td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td class="text-wrap" style="max-width: 320px; white-space: normal; word-break: break-word;">
                                    {{ $item->description }}
                                </td>
                                <td>
                                    @if ($item->icon)
                                        <img src="{{ asset('storage/' . $item->icon) }}" 
                                             alt="{{ $item->name }}"
                                             width="40" height="40" 
                                             class="rounded shadow-sm">
                                    @else
                                        <span class="badge bg-label-secondary">No Icon</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        {{-- Tombol Edit --}}
                                        <a href="{{ route('admin.categories.edit', $item->id) }}" 
                                           class="btn btn-warning btn-sm">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>

                                        {{-- Tombol Delete --}}
                                        <form id="delete-form-{{ $item->id }}"
                                              action="{{ route('admin.categories.destroy', $item->id) }}" 
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
                                <td colspan="5" class="text-center">Tidak ada data kategori</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center mt-3">
            <div>
                {{ $categories->links() }}
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
                        text: `Kategori "${name}" akan dihapus secara permanen!`,
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
