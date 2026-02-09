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
 Rifqah
                            <th class="text-uppercase text-muted" style="text-align: right; padding-right: 50px;">Action</th>

                            <th class="text-uppercase text-muted text-center" style="width: 160px;">Action</th>
 main
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($competitions as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
 Rifqah
                                <td>{{ $item->type }}</td>

                                <td class="text-end">
                                    <a href="{{ route('admin.competitions.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.competitions.destroy', $item->id) }}"
                                        method="POST" class="d-inline"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus kompetensi ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>

                                <td>{{ $item->type_label }}</td>

                                <td class="text-center" style="width: 160px;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('admin.competitions.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form id="delete-form-competition-{{ $item->id }}"
                                            action="{{ route('admin.competitions.destroy', $item->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                class="btn btn-danger btn-sm btn-delete"
                                                data-id="competition-{{ $item->id }}"
                                                data-name="{{ $item->name }}"
                                                data-entity="Kompetensi">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
 main
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
                <a href="{{ route('admin.curiculums.create', ['major_id' => $major->id]) }}"
                    class="btn btn-primary btn-sm">
                    Tambah Kurikulum
                </a>
            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-uppercase text-muted">Nama Kurikulum</th>
                            <th class="text-uppercase text-muted">Jenis Kurikulum</th>
                            <th class="text-uppercase text-muted text-center" style="width: 160px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($curiculums as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type_label }}</td>
                                <td class="text-center" style="width: 160px;">
                                    <div class="d-inline-flex gap-1">
                                        <a href="{{ route('admin.curiculums.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form id="delete-form-curiculum-{{ $item->id }}"
                                            action="{{ route('admin.curiculums.destroy', $item->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                class="btn btn-danger btn-sm btn-delete"
                                                data-id="curiculum-{{ $item->id }}"
                                                data-name="{{ $item->name }}"
                                                data-entity="Kurikulum">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>


        {{-- ================= RELATED INDUSTRIES ================= --}}
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Industri Terkait</h5>
                <a href="{{ route('admin.industries.create', ['major_id' => $major->id]) }}"
                    class="btn btn-primary btn-sm">
                    Tambah Industri
                </a>
            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-uppercase text-muted">Industri Terkait</th>
                            <th class="text-uppercase text-muted" style="text-align: right; padding-right: 50px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($relatedIndustries as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>

                                <td class="text-end">
                                    <a href="{{ route('admin.industries.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.industries.destroy', $item->id) }}"
                                        method="POST" class="d-inline"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus industri ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted">Belum ada industri terkait</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>


        {{-- ================= CAREERS ================= --}}
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Karir</h5>
                <a href="{{ route('admin.cariers.create', ['major_id' => $major->id]) }}"
                    class="btn btn-primary btn-sm">
                    Tambah Karir
                </a>
            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-uppercase text-muted">Nama Karir</th>
                            <th class="text-uppercase text-muted text-center" style="width: 160px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($cariers as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td class="text-center" style="width: 160px;">
                                    <div class="d-inline-flex gap-1">
                                        <a href="{{ route('admin.cariers.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form id="delete-form-carier-{{ $item->id }}"
                                            action="{{ route('admin.cariers.destroy', $item->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                class="btn btn-danger btn-sm btn-delete"
                                                data-id="carier-{{ $item->id }}"
                                                data-name="{{ $item->name }}"
                                                data-entity="Karir">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
Rifqah


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.dataset.id;
                    const name = this.dataset.name;
                    const entity = this.dataset.entity;

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: `${entity} "${name}" akan dihapus secara permanen!`,
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
 main
