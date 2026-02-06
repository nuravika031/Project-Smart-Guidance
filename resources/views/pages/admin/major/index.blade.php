@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold mb-0">
                <span class="text-muted fw-light"></span> Data Jurusan
            </h4>
            <a
                href="{{ route('admin.majors.create') }}"
                class="btn btn-primary"
            >Tambah Data</a>
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

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Daftar Jurusan </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Kategori</th>
                            <th>Nama Jurusan</th>
                            <th>Deskripsi</th>
                            <th>Profile</th>
                            <th>Durasi Studi</th>
                            <th>Actions</th>
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
                                <td>
                                    {{ $item->description ?? '-' }}
                                </td>
                                <td>
                                    {{ $item->profile ?? '-' }}
                                </td>
                                <td>
                                    {{ $item->study_duration ?? '-' }}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            type="button"
                                            class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"
                                        >
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a
                                                class="dropdown-item"
                                                href="{{ route('admin.majors.edit', $item->id) }}"
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form
                                                id="delete-form-{{ $item->id }}"
                                                action="{{ route('admin.majors.destroy', $item->id) }}"
                                                method="POST"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    type="button"
                                                class="dropdown-item btn-delete"
                                                data-id="{{ $item->id }}"
                                                data-name="{{ $item->name }}"
                                            ><i class="bx bx-trash me-1"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td
                                    colspan="7"
                                    class="text-center"
                                >Tidak ada data jurusan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->

        <!-- Pagination -->
        <div class="d-flex justify-content-end align-items-center mt-3">
            <div>
                {{ $major->links() }}
            </div>
        </div>
        <!--/ Pagination -->

        <!--/ Responsive Table -->
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
