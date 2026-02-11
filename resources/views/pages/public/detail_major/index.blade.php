@extends('layouts.public')
@section('content')
    <!-- ===== Header Jurusan ===== -->
    <section class="bg-white rounded-xl shadow p-4 sm:p-6 md:p-8">
        <p class="text-xs sm:text-sm text-blue-600 font-medium mb-2">
            Kategori &bull; {{ $major->category->name ?? '-' }}
        </p>
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4">{{ $major->name }}</h1>
        <p class="text-sm sm:text-base text-gray-600 max-w-3xl">
            {!! $major->description ?: 'Deskripsi jurusan belum tersedia.' !!}
        </p>
    </section>

    <!-- ===== Profil Jurusan ===== -->
    <section class="bg-slate-100 rounded-xl shadow p-4 sm:p-6 md:p-8">
        <h2 class="text-lg sm:text-xl font-semibold mb-4 sm:mb-6">Profil Jurusan</h2>

        <div class="grid grid-cols-1 gap-4 sm:gap-6">
            <div class="bg-white rounded-xl shadow p-4 sm:p-6 text-sm sm:text-base">
                {!! $major->profile ?: 'Profil jurusan belum tersedia.' !!}
            </div>
        </div>
    </section>

    <!-- ===== Kompetensi Lulusan ===== -->
    <section class="bg-white rounded-xl shadow p-4 sm:p-6 md:p-8">
        <h2 class="text-lg sm:text-xl font-semibold mb-4 sm:mb-6">Kompetensi Lulusan</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
            <div class="bg-slate-100 rounded-xl p-4 sm:p-6 min-h-[200px]">
                <h3 class="text-blue-600 font-semibold mb-3 text-sm sm:text-base">Hard Skill</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm sm:text-base">
                    @forelse ($competitions['hardskill'] as $item)
                        <li>{{ $item->name }}</li>
                    @empty
                        <li class="text-gray-400">Belum ada hard skill.</li>
                    @endforelse
                </ul>
            </div>

            <div class="bg-slate-100 rounded-xl p-4 sm:p-6 min-h-[200px]">
                <h3 class="text-blue-600 font-semibold mb-3 text-sm sm:text-base">Soft Skill</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm sm:text-base">
                    @forelse ($competitions['softskill'] as $item)
                        <li>{{ $item->name }}</li>
                    @empty
                        <li class="text-gray-400">Belum ada soft skill.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>

    <!-- ===== Struktur Kurikulum ===== -->
    <section class="bg-slate-100 rounded-xl shadow p-4 sm:p-6 md:p-8">
        <h2 class="text-lg sm:text-xl font-semibold mb-4 sm:mb-6">Struktur Kurikulum</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
            <div class="bg-white rounded-xl shadow p-4 sm:p-6">
                <h3 class="text-blue-600 font-semibold mb-3 text-sm sm:text-base">Mata Kuliah Dasar</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-1 text-xs sm:text-sm">
                    @forelse ($curiculums['matakuliah_dasar'] as $item)
                        <li>{{ $item->name }}</li>
                    @empty
                        <li class="text-gray-400">Belum ada matakuliah dasar.</li>
                    @endforelse
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow p-4 sm:p-6">
                <h3 class="text-blue-600 font-semibold mb-3 text-sm sm:text-base">Mata Kuliah Inti</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-1 text-xs sm:text-sm">
                    @forelse ($curiculums['matakuliah_inti'] as $item)
                        <li>{{ $item->name }}</li>
                    @empty
                        <li class="text-gray-400">Belum ada matakuliah inti.</li>
                    @endforelse
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow p-4 sm:p-6">
                <h3 class="text-blue-600 font-semibold mb-3 text-sm sm:text-base">Mata Kuliah Pilihan</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-1 text-xs sm:text-sm">
                    @forelse ($curiculums['matakuliah_pilihan'] as $item)
                        <li>{{ $item->name }}</li>
                    @empty
                        <li class="text-gray-400">Belum ada matakuliah pilihan.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>

    <!-- ===== Durasi Studi ===== -->
    <section class="bg-white rounded-xl shadow p-4 sm:p-6 md:p-8">
        <h2 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Durasi Studi</h2>
        <div class="bg-blue-100 rounded-xl shadow p-4 sm:p-6">
            <p class="text-sm sm:text-base text-gray-700">
                {{ $major->study_duration ?: 'Durasi studi belum tersedia.' }}
            </p>
        </div>

    </section>

    <!-- ===== Bidang Industri ===== -->
    <section class="bg-white rounded-xl shadow p-4 sm:p-6 md:p-8">
        <h2 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Bidang Industri Terkait</h2>
        <div class="bg-blue-100 rounded-xl shadow p-4 sm:p-6">
            <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm sm:text-base">
                @forelse ($major->relatedIndustru as $item)
                    <li>{{ $item->name }}</li>
                @empty
                    <li class="text-gray-400">Belum ada industri terkait.</li>
                @endforelse
            </ul>
        </div>
    </section>

    <section class="bg-white rounded-xl shadow p-4 sm:p-6 md:p-8">
        <h2 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Perkiraan Kisaran Karir</h2>
        <div class="bg-blue-100 rounded-xl shadow p-4 sm:p-6">
            <ul class="list-disc list-inside text-gray-700 space-y-1 text-sm sm:text-base">
                @forelse ($major->cariers as $item)
                    <li>{{ $item->name }}</li>
                @empty
                    <li class="text-gray-400">Belum ada karir terkait.</li>
                @endforelse
            </ul>
        </div>
    </section>
@endsection
