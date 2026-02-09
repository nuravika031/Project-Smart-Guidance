@extends('layouts.public')
@section('content')
    <div class="max-w-6xl mx-auto px-6">

        <!-- Title -->
        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-2">
                CARI JURUSAN
            </h1>
            <p class="text-gray-600">
                Cari dan pelajari jurusan secara detail untuk menentukan pilihan pendidikan dan karier masa depan.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-4xl mx-auto mb-10">
            <div class="flex items-center bg-white rounded-xl shadow-md overflow-hidden">
                <div class="px-5 text-gray-400 text-xl">
                    🔍
                </div>
                <input type="text" placeholder="Cari Jurusan" class="flex-1 py-4 px-2 outline-none text-gray-700">
                <button class="bg-primary text-white px-8 py-3 m-2 rounded-lg font-medium hover:bg-blue-700 transition">
                    Cari
                </button>
            </div>
        </div>

        <!-- Subheading -->
        <h2 class="text-xl font-bold text-gray-800 mb-6">
            Cari Jurusan
        </h2>

        <!-- ================= LIST JURUSAN ================= -->
        <div class="space-y-6">

            <!-- Item 1 -->
            <div class="bg-white rounded-xl shadow-md px-8 py-6 flex justify-between items-center">
                <h3 class="text-lg font-bold text-gray-800">
                    TEKNIK INFORMATIKA
                </h3>
                <a href="{{ route('detail') }}"
                    class="bg-primary text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition">
                    Lihat Detail >>
                </a>
            </div>

        </div>

    </div>
@endsection
