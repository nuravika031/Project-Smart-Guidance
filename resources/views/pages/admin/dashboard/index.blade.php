@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

  <!-- Welcome Card -->
  <div class="row">
    <div class="col-lg-8 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Dashboard Smart Guidance 🎓</h5>
              <p class="mb-4">
                Statistik kategori dan jurusan pendidikan.
              </p>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="{{ asset('admin/assets/img/illustrations/man-with-laptop-light.png') }}"
                height="140"
                alt="Dashboard"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Statistik Ringkas -->
  <div class="row">
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5>Total Kategori</h5>
          <h2>{{ $totalCategories }}</h2>
          <small class="text-muted">Kategori Pendidikan</small>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5>Total Jurusan</h5>
          <h2>{{ $totalMajors }}</h2>
          <small class="text-muted">Seluruh Jurusan</small>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5>Rata-rata Jurusan</h5>
          <h2>{{ $averageMajors }}</h2>
          <small class="text-muted">Per Kategori</small>
        </div>
      </div>
    </div>
  </div>

  <!-- DIAGRAM STATISTIK -->
  <div class="row">

    <!-- Diagram Kategori -->
    <div class="col-12 col-lg-8 mb-4">
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">Diagram Statistik Kategori</h5>
          <small class="text-muted">Visualisasi jumlah jurusan per kategori</small>
        </div>
        <div class="card-body">
          <!-- INI YANG PENTING -->
          <div id="totalRevenueChart"></div>
        </div>
      </div>
    </div>

    <!-- Diagram Jurusan -->
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-header">
          <h5 class="mb-0">Diagram Jurusan</h5>
          <small class="text-muted">Distribusi jurusan</small>
        </div>
        <div class="card-body">
          <!-- INI JUGA PENTING -->
          <div id="orderStatisticsChart"></div>
        </div>
      </div>
    </div>

  </div>

  <!-- List Jurusan per Kategori -->
  <div class="row">
    <div class="col-lg-8 mb-4">
      <div class="card">
        <div class="card-header">
          <h5>Statistik Jurusan per Kategori</h5>
          <small class="text-muted">Daftar semua kategori dan jumlah jurusan</small>
        </div>
        <div class="card-body">
          <ul class="p-0 m-0">
            @forelse($majorsByCategory as $category)
            <li class="d-flex mb-4">
              <span class="avatar-initial rounded bg-label-primary me-3">
                <i class="bx bx-desktop"></i>
              </span>
              <div class="d-flex justify-content-between w-100">
                <div>
                  <h6 class="mb-0">{{ $category->name }}</h6>
                  <small class="text-muted">{{ $category->description }}</small>
                </div>
                <small class="fw-semibold">{{ $category->majors_count }} Jurusan</small>
              </div>
            </li>
            @empty
            <li class="text-center text-muted py-4">
              <p>Tidak ada data kategori</p>
            </li>
            @endforelse
          </ul>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
