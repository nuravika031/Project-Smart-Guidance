@extends('layouts.public')
@section('content')
    <!-- ===== Header Jurusan ===== -->
    <section
        class="bg-gradient-to-r from-primary to-blue-600 rounded-2xl shadow-xl p-6 sm:p-8 md:p-10 text-white relative overflow-hidden"
    >
        <div class="absolute top-0 right-0 opacity-10">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-48 w-48 sm:h-64 sm:w-64"
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
        </div>
        <div class="relative z-10">
            <span
                class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white text-xs sm:text-sm font-medium px-3 py-1.5 rounded-full mb-4"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"
                    />
                </svg>
                {{ $major->category->name ?? 'Kategori' }}
            </span>
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4">{{ $major->name }}</h1>
            <p class="text-sm sm:text-base text-white/90 max-w-3xl leading-relaxed">
                {!! $major->description ?: 'Deskripsi jurusan belum tersedia.' !!}
            </p>
        </div>
    </section>

    <!-- ===== Profil Jurusan ===== -->
    <section
        class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300"
    >
        <div class="flex items-center gap-3 mb-6">
            <div
                class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                    />
                </svg>
            </div>
            <h2 class="text-xl sm:text-2xl font-bold text-gray-800">Profil Jurusan</h2>
        </div>

        <div
            class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-5 sm:p-6 text-sm sm:text-base text-gray-700 leading-relaxed border border-indigo-100">
            {!! $major->profile ?: 'Profil jurusan belum tersedia.' !!}
        </div>
    </section>

    <!-- ===== Kompetensi Lulusan ===== -->
    <section
        class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300"
    >
        <div class="flex items-center gap-3 mb-6">
            <div
                class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                    />
                </svg>
            </div>
            <h2 class="text-xl sm:text-2xl font-bold text-gray-800">Kompetensi Lulusan</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 sm:gap-6">
            <div
                class="group bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-5 sm:p-6 border border-emerald-100 hover:border-emerald-300 transition-all duration-300 hover:shadow-md">
                <div class="flex items-center gap-2 mb-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-emerald-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        />
                    </svg>
                    <h3 class="text-emerald-700 font-bold text-base sm:text-lg">Hard Skill</h3>
                </div>
                <ul class="space-y-2 text-sm sm:text-base">
                    @forelse ($competitions['hardskill'] as $item)
                        <li class="flex items-start gap-2 text-gray-700">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-emerald-500 flex-shrink-0 mt-0.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7"
                                />
                            </svg>
                            {{ $item->name }}
                        </li>
                    @empty
                        <li class="text-gray-400 italic">Belum ada hard skill.</li>
                    @endforelse
                </ul>
            </div>

            <div
                class="group bg-gradient-to-br from-sky-50 to-blue-50 rounded-xl p-5 sm:p-6 border border-sky-100 hover:border-sky-300 transition-all duration-300 hover:shadow-md">
                <div class="flex items-center gap-2 mb-4">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-sky-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                    </svg>
                    <h3 class="text-sky-700 font-bold text-base sm:text-lg">Soft Skill</h3>
                </div>
                <ul class="space-y-2 text-sm sm:text-base">
                    @forelse ($competitions['softskill'] as $item)
                        <li class="flex items-start gap-2 text-gray-700">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-sky-500 flex-shrink-0 mt-0.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7"
                                />
                            </svg>
                            {{ $item->name }}
                        </li>
                    @empty
                        <li class="text-gray-400 italic">Belum ada soft skill.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>

    <!-- ===== Struktur Kurikulum ===== -->
    <section
        class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300"
    >
        <div class="flex items-center gap-3 mb-6">
            <div
                class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                    />
                </svg>
            </div>
            <h2 class="text-xl sm:text-2xl font-bold text-gray-800">Struktur Kurikulum</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6">
            <div
                class="group bg-gradient-to-br from-amber-50 to-yellow-50 rounded-xl p-5 sm:p-6 border border-amber-100 hover:border-amber-300 transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                <div class="flex items-center gap-2 mb-4">
                    <div
                        class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center text-white text-sm font-bold">
                        1</div>
                    <h3 class="text-amber-700 font-bold text-sm sm:text-base">Mata Kuliah Dasar</h3>
                </div>
                <ul class="space-y-2 text-xs sm:text-sm">
                    @forelse ($curiculums['matakuliah_dasar'] as $item)
                        <li class="flex items-start gap-2 text-gray-700">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-amber-500 flex-shrink-0 mt-0.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                />
                            </svg>
                            {{ $item->name }}
                        </li>
                    @empty
                        <li class="text-gray-400 italic">Belum ada matakuliah dasar.</li>
                    @endforelse
                </ul>
            </div>

            <div
                class="group bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-5 sm:p-6 border border-orange-100 hover:border-orange-300 transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                <div class="flex items-center gap-2 mb-4">
                    <div
                        class="w-8 h-8 bg-orange-500 rounded-lg flex items-center justify-center text-white text-sm font-bold">
                        2</div>
                    <h3 class="text-orange-700 font-bold text-sm sm:text-base">Mata Kuliah Inti</h3>
                </div>
                <ul class="space-y-2 text-xs sm:text-sm">
                    @forelse ($curiculums['matakuliah_inti'] as $item)
                        <li class="flex items-start gap-2 text-gray-700">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-orange-500 flex-shrink-0 mt-0.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                />
                            </svg>
                            {{ $item->name }}
                        </li>
                    @empty
                        <li class="text-gray-400 italic">Belum ada matakuliah inti.</li>
                    @endforelse
                </ul>
            </div>

            <div
                class="group bg-gradient-to-br from-rose-50 to-pink-50 rounded-xl p-5 sm:p-6 border border-rose-100 hover:border-rose-300 transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                <div class="flex items-center gap-2 mb-4">
                    <div
                        class="w-8 h-8 bg-rose-500 rounded-lg flex items-center justify-center text-white text-sm font-bold">
                        3</div>
                    <h3 class="text-rose-700 font-bold text-sm sm:text-base">Mata Kuliah Pilihan</h3>
                </div>
                <ul class="space-y-2 text-xs sm:text-sm">
                    @forelse ($curiculums['matakuliah_pilihan'] as $item)
                        <li class="flex items-start gap-2 text-gray-700">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-rose-500 flex-shrink-0 mt-0.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                />
                            </svg>
                            {{ $item->name }}
                        </li>
                    @empty
                        <li class="text-gray-400 italic">Belum ada matakuliah pilihan.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>

    <!-- ===== Durasi Studi ===== -->
    <section
        class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300"
    >
        <div class="flex items-center gap-3 mb-6">
            <div
                class="w-12 h-12 bg-gradient-to-br from-violet-500 to-purple-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                </svg>
            </div>
            <h2 class="text-xl sm:text-2xl font-bold text-gray-800">Durasi Studi</h2>
        </div>
        <div
            class="bg-gradient-to-br from-violet-50 to-purple-50 rounded-xl p-5 sm:p-6 border border-violet-100 flex items-center gap-4">
            <div
                class="w-16 h-16 bg-gradient-to-br from-violet-500 to-purple-600 rounded-full flex items-center justify-center text-white shadow-lg">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-8 w-8"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                    />
                </svg>
            </div>
            <div>
                <p class="text-sm text-violet-600 font-medium mb-1">Estimasi Waktu</p>
                <p class="text-lg sm:text-xl font-bold text-gray-800">
                    {{ $major->study_duration ?: 'Durasi studi belum tersedia.' }}
                </p>
            </div>
        </div>
    </section>

    <!-- ===== Bidang Industri & Karir ===== -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Bidang Industri -->
        <section
            class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300"
        >
            <div class="flex items-center gap-3 mb-6">
                <div
                    class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                        />
                    </svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold text-gray-800">Bidang Industri Terkait</h2>
            </div>
            <div class="space-y-2">
                @forelse ($major->relatedIndustru as $index => $item)
                    <div
                        class="flex items-center gap-3 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg p-3 border border-cyan-100 hover:border-cyan-300 transition-all duration-300 hover:shadow-sm">
                        <span
                            class="w-7 h-7 bg-cyan-500 text-white rounded-full flex items-center justify-center text-xs font-bold"
                        >{{ $index + 1 }}</span>
                        <span class="text-gray-700 text-sm sm:text-base">{{ $item->name }}</span>
                    </div>
                @empty
                    <div class="text-center py-8 text-gray-400">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-12 w-12 mx-auto mb-2 opacity-50"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                            />
                        </svg>
                        <p class="italic">Belum ada industri terkait.</p>
                    </div>
                @endforelse
            </div>
        </section>

        <!-- Perkiraan Karir -->
        <section
            class="bg-white rounded-2xl shadow-lg p-6 sm:p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300"
        >
            <div class="flex items-center gap-3 mb-6">
                <div
                    class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center text-white shadow-lg">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        />
                    </svg>
                </div>
                <h2 class="text-lg sm:text-xl font-bold text-gray-800">Perkiraan Kisaran Karir</h2>
            </div>
            <div class="space-y-2">
                @forelse ($major->cariers as $index => $item)
                    <div
                        class="flex items-center gap-3 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-3 border border-green-100 hover:border-green-300 transition-all duration-300 hover:shadow-sm">
                        <span
                            class="w-7 h-7 bg-green-500 text-white rounded-full flex items-center justify-center text-xs font-bold"
                        >{{ $index + 1 }}</span>
                        <span class="text-gray-700 text-sm sm:text-base">{{ $item->name }}</span>
                    </div>
                @empty
                    <div class="text-center py-8 text-gray-400">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-12 w-12 mx-auto mb-2 opacity-50"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            />
                        </svg>
                        <p class="italic">Belum ada karir terkait.</p>
                    </div>
                @endforelse
            </div>
        </section>
    </div>
@endsection
