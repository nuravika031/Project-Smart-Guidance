@extends('layouts.public')
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">

        <!-- Title -->
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-800 mb-3 sm:mb-4">
            KENAPA PILIH SMART GUIDANCE?
        </h1>

        <!-- Subtitle -->
        <p class="text-sm sm:text-base text-gray-600 max-w-xl mx-auto mb-10 sm:mb-20">
            Mari temukan program studi yang paling sesuai dengan ambisi dan potensimu ! Sudah siap menentukan arah?
        </p>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 lg:gap-10 mb-10 sm:mb-16">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="flex justify-center mb-4 sm:mb-6 text-4xl sm:text-5xl">
                    🔍
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2 sm:mb-3">
                    Pencarian Cepat
                </h3>
                <p class="text-sm sm:text-base text-gray-600">
                    Akses data jurusan yang kamu butuhkan secara instan tanpa ribet.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="flex justify-center mb-4 sm:mb-6 text-4xl sm:text-5xl">
                    📊
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2 sm:mb-3">
                    Informasi Lengkap
                </h3>
                <p class="text-sm sm:text-base text-gray-600">
                    Bedah tuntas setiap program studi agar langkahmu jadi lebih pasti
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="flex justify-center mb-4 sm:mb-6 text-4xl sm:text-5xl">
                    💡
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2 sm:mb-3">
                    Berdasarkan Minat
                </h3>
                <p class="text-sm sm:text-base text-gray-600">
                    Temukan kecocokanmu! Pilih kategori Saintek, Soshum, atau Seni yang paling sesuai dengan dirimu
                </p>
            </div>

        </div>

        <!-- CTA Button -->
        <a href="{{ route('categories') }}"
            class="inline-block bg-primary text-white px-6 sm:px-10 py-2 sm:py-4 rounded-full text-base sm:text-lg font-semibold shadow-md hover:bg-blue-600 transition">
            Mulai Sekarang
        </a>

    </div>
@endsection
