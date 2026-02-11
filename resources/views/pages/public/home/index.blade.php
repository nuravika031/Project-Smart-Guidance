@extends('layouts.public')
@section('content')
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-0 left-1/4 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob">
            </div>
            <div
                class="absolute top-0 right-1/4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute bottom-0 left-1/2 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <!-- Hero Content -->
            <div class="text-center py-8 sm:py-12">
                <!-- Badge -->
                <div
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-primary/10 to-blue-500/10 text-primary px-4 py-2 rounded-full text-sm font-medium mb-6 border border-primary/20">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    Platform Bimbingan Karir Terpercaya
                </div>

                <!-- Title with Gradient -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 sm:mb-6">
                    <span class="text-gray-800">Temukan </span>
                    <span
                        class="bg-gradient-to-r from-primary via-blue-600 to-purple-600 bg-clip-text text-transparent">Jurusan
                        Impianmu</span>
                    <br class="hidden sm:block">
                    <span class="text-gray-800">Bersama </span>
                    <span
                        class="bg-gradient-to-r from-purple-600 via-pink-500 to-red-500 bg-clip-text text-transparent">Smart
                        Guidance</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto mb-8 sm:mb-10 leading-relaxed">
                    Mari temukan program studi yang paling sesuai dengan ambisi dan potensimu!
                    Jelajahi berbagai pilihan jurusan dan raih masa depan cerahmu.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12 sm:mb-16">
                    <a
                        href="{{ route('categories') }}"
                        class="group inline-flex items-center gap-2 bg-gradient-to-r from-primary to-blue-600 text-white px-8 py-4 rounded-full text-base sm:text-lg font-semibold shadow-lg hover:shadow-xl hover:shadow-primary/25 transition-all duration-300 hover:-translate-y-1"
                    >
                        <span>Mulai Eksplorasi</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 group-hover:translate-x-1 transition-transform"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"
                            />
                        </svg>
                    </a>
                    <a
                        href="{{ route('majors') }}"
                        class="inline-flex items-center gap-2 bg-white text-gray-700 px-8 py-4 rounded-full text-base sm:text-lg font-semibold shadow-md hover:shadow-lg border border-gray-200 hover:border-primary/30 transition-all duration-300 hover:-translate-y-1"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-primary"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                            />
                        </svg>
                        <span>Cari Jurusan</span>
                    </a>
                </div>

                <!-- Stats Section -->
                <div class="grid grid-cols-3 gap-4 sm:gap-8 max-w-2xl mx-auto mb-12 sm:mb-16">
                    <div class="text-center p-4 rounded-2xl bg-white/60 backdrop-blur-sm border border-gray-100 shadow-sm">
                        <div
                            class="text-2xl sm:text-3xl md:text-4xl font-bold bg-gradient-to-r from-primary to-blue-600 bg-clip-text text-transparent">
                            {{ $countMajors }}+</div>
                        <div class="text-xs sm:text-sm text-gray-600 mt-1">Jurusan Tersedia</div>
                    </div>
                    <div class="text-center p-4 rounded-2xl bg-white/60 backdrop-blur-sm border border-gray-100 shadow-sm">
                        <div
                            class="text-2xl sm:text-3xl md:text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">
                            {{ $countCategories }}+</div>
                        <div class="text-xs sm:text-sm text-gray-600 mt-1">Kategori Minat</div>
                    </div>
                    <div class="text-center p-4 rounded-2xl bg-white/60 backdrop-blur-sm border border-gray-100 shadow-sm">
                        <div
                            class="text-2xl sm:text-3xl md:text-4xl font-bold bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent">
                            100%</div>
                        <div class="text-xs sm:text-sm text-gray-600 mt-1">Gratis</div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="py-8 sm:py-12">
                <div class="text-center mb-10 sm:mb-14">
                    <span
                        class="inline-block bg-gradient-to-r from-emerald-500/10 to-teal-500/10 text-emerald-600 px-4 py-1.5 rounded-full text-sm font-medium mb-4 border border-emerald-200"
                    >
                        Keunggulan Kami
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
                        Kenapa Pilih <span class="text-primary">Smart Guidance</span>?
                    </h2>
                    <p class="text-gray-600 max-w-xl mx-auto">
                        Platform terlengkap untuk membantu kamu menemukan jurusan yang tepat
                    </p>
                </div>

                <!-- Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 mb-12 sm:mb-16">

                    <!-- Card 1 - Pencarian Cepat -->
                    <div
                        class="group relative bg-white rounded-3xl shadow-lg p-6 sm:p-8 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 border border-gray-100 overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-cyan-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div class="relative">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-8 w-8 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                    />
                                </svg>
                            </div>
                            <h3
                                class="text-xl sm:text-2xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">
                                Pencarian Cepat
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Akses data jurusan yang kamu butuhkan secara instan tanpa ribet. Cukup ketik dan temukan!
                            </p>
                            <div
                                class="mt-6 flex items-center text-blue-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span>Pelajari Lebih</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 ml-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 5l7 7-7 7"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 - Informasi Lengkap -->
                    <div
                        class="group relative bg-white rounded-3xl shadow-lg p-6 sm:p-8 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 border border-gray-100 overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/10 to-pink-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div class="relative">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-8 w-8 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                    />
                                </svg>
                            </div>
                            <h3
                                class="text-xl sm:text-2xl font-bold text-gray-800 mb-3 group-hover:text-purple-600 transition-colors">
                                Informasi Lengkap
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Bedah tuntas setiap program studi mulai dari kurikulum, kompetensi, hingga prospek karir.
                            </p>
                            <div
                                class="mt-6 flex items-center text-purple-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span>Pelajari Lebih</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 ml-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 5l7 7-7 7"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 - Berdasarkan Minat -->
                    <div
                        class="group relative bg-white rounded-3xl shadow-lg p-6 sm:p-8 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 border border-gray-100 overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-amber-500/10 to-orange-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                        </div>
                        <div class="relative">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-8 w-8 text-white"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
                                    />
                                </svg>
                            </div>
                            <h3
                                class="text-xl sm:text-2xl font-bold text-gray-800 mb-3 group-hover:text-amber-600 transition-colors">
                                Berdasarkan Minat
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Temukan kecocokanmu! Pilih kategori Saintek, Soshum, atau Seni yang paling sesuai.
                            </p>
                            <div
                                class="mt-6 flex items-center text-amber-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span>Pelajari Lebih</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 ml-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 5l7 7-7 7"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- CTA Section -->
                <div
                    class="relative bg-gradient-to-r from-primary via-blue-600 to-purple-600 rounded-3xl p-8 sm:p-12 text-center text-white overflow-hidden">
                    <div class="absolute inset-0 opacity-10">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute -right-10 -top-10 h-64 w-64"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                            />
                            <path
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                            />
                        </svg>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute -left-10 -bottom-10 h-48 w-48"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                            />
                        </svg>
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-2xl sm:text-3xl font-bold mb-4">Siap Menemukan Jurusan Impianmu?</h3>
                        <p class="text-white/90 max-w-xl mx-auto mb-8">
                            Jangan tunda lagi! Mulai eksplorasi sekarang dan temukan program studi yang sesuai dengan
                            passion-mu.
                        </p>
                        <a
                            href="{{ route('categories') }}"
                            class="inline-flex items-center gap-2 bg-white text-primary px-8 py-4 rounded-full text-lg font-bold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 hover:scale-105"
                        >
                            <span>Jelajahi Sekarang</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
@endsection
