@extends('layouts.public')
@section('content')
    <div class="max-w-7xl mx-auto px-6 text-center">

        <!-- Title -->
        <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
            KENAPA PILIH SMART GUIDANCE?
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-600 max-w-xl mx-auto mb-20">
            Mari temukan program studi yang paling sesuai dengan ambisi dan potensimu ! Sudah siap menentukan arah?
        </p>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-16">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-10">
                <div class="flex justify-center mb-6 text-5xl">
                    🔍
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Pencarian Cepat
                </h3>
                <p class="text-gray-600">
                    Akses data jurusan yang kamu butuhkan secara instan tanpa ribet.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-10">
                <div class="flex justify-center mb-6 text-5xl">
                    📊
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Informasi Lengkap
                </h3>
                <p class="text-gray-600">
                    Bedah tuntas setiap program studi agar langkahmu jadi lebih pasti
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-10">
                <div class="flex justify-center mb-6 text-5xl">
                    💡
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    Berdasarkan Minat
                </h3>
                <p class="text-gray-600">
                    Temukan kecocokanmu! Pilih kategori Saintek, Soshum, atau Seni yang paling sesuai dengan dirimu
                </p>
            </div>

        </div>

        <!-- CTA Button -->
        <button
            class="bg-primary text-white px-10 py-4 rounded-full text-lg font-semibold shadow-md hover:bg-blue-600 transition">
            <a href="{{ route('categories') }}">Mulai Sekarang</a>
        </button>

    </div>
@endsection
