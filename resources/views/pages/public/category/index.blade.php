@extends('layouts.public')
@section('content')
    <div class="max-w-7xl mx-auto px-6">

        <!-- Title -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-3">
                CARI KATEGORI
            </h1>
            <p class="text-gray-600">
                Pilih kategori pendidikan untuk melihat kelompok jurusan sesuai bidang minat dan keahlian.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-4xl mx-auto mb-16">
            <div class="flex items-center bg-white rounded-xl shadow-md overflow-hidden">
                <div class="px-5 text-gray-400 text-xl">
                    🔍
                </div>
                <input type="text" placeholder="Cari Kategori" class="flex-1 py-4 px-2 outline-none text-gray-700">
                <button class="bg-primary text-white px-8 py-3 m-2 rounded-lg font-medium hover:bg-blue-600 transition">
                    Cari
                </button>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-16">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                <div class="mb-6 text-5xl">💻</div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">
                    Teknologi & Informasi
                </h3>
                <p class="text-gray-600 text-sm">
                    lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                <div class="mb-6 text-5xl">➕</div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">
                    Kesehatan
                </h3>
                <p class="text-gray-600 text-sm">
                    lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                <div class="mb-6 text-5xl">⚖️</div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">
                    Hukum & Politik
                </h3>
                <p class="text-gray-600 text-sm">
                    lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                <div class="mb-6 text-5xl">🎓</div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">
                    Pendidikan
                </h3>
                <p class="text-gray-600 text-sm">
                    lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                </p>
            </div>

        </div>

        <!-- Pagination Dots -->
        <div class="flex justify-center gap-4">
            <span class="w-4 h-4 rounded-full bg-gray-300"></span>
            <span class="w-4 h-4 rounded-full bg-primary"></span>
            <span class="w-4 h-4 rounded-full bg-gray-300"></span>
            <span class="w-4 h-4 rounded-full bg-gray-300"></span>
        </div>

    </div>
@endsection
