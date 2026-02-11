@extends('layouts.public')
@section('content')
    <div class="relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-10 left-1/3 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute top-10 right-1/3 w-64 h-64 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute bottom-10 left-1/2 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-10 pt-4">
                @if (!empty($category))
                    <!-- Category Badge -->
                    <div
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-primary/10 to-purple-500/10 text-primary px-4 py-2 rounded-full text-sm font-medium mb-4 border border-primary/20">
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
                        Kategori: {{ $category->name }}
                    </div>
                @else
                    <!-- General Badge -->
                    <div
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500/10 to-teal-500/10 text-emerald-600 px-4 py-2 rounded-full text-sm font-medium mb-4 border border-emerald-200">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
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
                        Semua Jurusan
                    </div>
                @endif

                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4">
                    @if (!empty($category))
                        <span class="text-gray-800">Jurusan </span>
                        <span
                            class="bg-gradient-to-r from-primary via-purple-600 to-pink-600 bg-clip-text text-transparent">{{ $category->name }}</span>
                    @else
                        <span class="text-gray-800">Temukan </span>
                        <span
                            class="bg-gradient-to-r from-primary via-blue-600 to-purple-600 bg-clip-text text-transparent">Jurusan
                            Impianmu</span>
                    @endif
                </h1>
                <p class="text-sm sm:text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    @if (!empty($category))
                        Jelajahi program studi terbaik dalam kategori {{ $category->name }} dan temukan yang paling sesuai
                        dengan minatmu.
                    @else
                        Cari dan pelajari jurusan secara detail untuk menentukan pilihan pendidikan dan karier masa depan
                        yang cerah.
                    @endif
                </p>
            </div>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto mb-8 sm:mb-10">
                <div class="relative group">
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-primary to-purple-600 rounded-2xl blur opacity-20 group-hover:opacity-30 transition duration-300">
                    </div>
                    <div
                        class="relative flex items-center gap-2 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 focus-within:border-primary/50 transition-all">
                        <div class="pl-4 sm:pl-6 text-gray-400 flex-shrink-0">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 sm:h-6 sm:w-6"
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
                        <input
                            id="majorInput"
                            type="text"
                            placeholder="Cari jurusan yang kamu minati..."
                            class="flex-1 py-3 sm:py-4 px-2 outline-none text-sm sm:text-base text-gray-700 placeholder-gray-400"
                        >
                        <button
                            id="majorSearchBtn"
                            class="bg-gradient-to-r from-primary to-blue-600 text-white px-4 sm:px-6 py-3 sm:py-4 m-1 sm:m-2 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 transition-all shadow-md hover:shadow-lg text-sm sm:text-base flex-shrink-0 whitespace-nowrap"
                        >
                            Cari
                        </button>
                    </div>
                </div>
            </div>

            <!-- Filter & Sort Section (Optional) -->
            <div class="flex items-center justify-between mb-6 sm:mb-8">
                <div class="flex items-center gap-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-gray-600"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16"
                        />
                    </svg>
                    <h2 class="text-lg sm:text-xl font-bold text-gray-800">
                        Daftar Jurusan
                    </h2>
                </div>
                <div class="text-sm text-gray-500 bg-white px-3 py-1.5 rounded-full border border-gray-200">
                    <span
                        class="font-semibold text-primary"
                        id="majorCount"
                    >{{ count($majors) }}</span> Jurusan
                </div>
            </div>

            <!-- Major List -->
            <div
                id="majorList"
                class="space-y-4 sm:space-y-5"
            >
                @forelse ($majors as $index => $major)
                    @php
                        $gradients = [
                            'from-blue-500 to-cyan-500',
                            'from-purple-500 to-pink-500',
                            'from-amber-500 to-orange-500',
                            'from-emerald-500 to-teal-500',
                            'from-rose-500 to-red-500',
                            'from-indigo-500 to-purple-500',
                        ];
                        $gradient = $gradients[$index % count($gradients)];
                    @endphp
                    <div
                        class="major-item group relative bg-white rounded-2xl shadow-md hover:shadow-2xl px-5 sm:px-8 py-5 sm:py-6 flex flex-col sm:flex-row gap-4 sm:gap-6 sm:justify-between sm:items-center transition-all duration-300 border border-gray-100 hover:border-transparent overflow-hidden"
                        data-name="{{ strtolower($major->name) }}"
                    >
                        <!-- Background Decoration -->
                        <div
                            class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br {{ $gradient }} opacity-0 group-hover:opacity-5 rounded-full -mr-20 -mt-20 transition-opacity duration-500">
                        </div>

                        <div class="flex-1 relative z-10">
                            <div class="flex items-start sm:items-center gap-3 sm:gap-4 mb-3">
                                <!-- Icon -->
                                <div
                                    class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br {{ $gradient }} rounded-xl flex items-center justify-center text-white shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 flex-shrink-0">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6 sm:h-7 sm:w-7"
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

                                <!-- Title -->
                                <div class="flex-1 min-w-0">
                                    <h3
                                        class="major-name text-lg sm:text-xl font-bold text-gray-800 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:{{ $gradient }} group-hover:bg-clip-text transition-all duration-300 mb-1">
                                        {{ $major->name }}
                                    </h3>
                                    <!-- Category Tag (if available) -->
                                    @if ($major->category)
                                        <span
                                            class="inline-block text-xs font-medium text-gray-500 bg-gray-100 px-2 py-1 rounded-full"
                                        >
                                            {{ $major->category->name }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Description -->
                            <p class="text-sm sm:text-base text-gray-600 leading-relaxed pl-0 sm:pl-[68px]">
                                {{ Str::limit($major->description, 150, '...') ?? 'Deskripsi jurusan belum tersedia.' }}
                            </p>
                        </div>

                        <!-- CTA Button -->
                        <a
                            href="{{ route('detail', $major->slug) }}"
                            class="relative z-10 inline-flex items-center justify-center gap-2 bg-gradient-to-r {{ $gradient }} text-white px-5 sm:px-7 py-3 sm:py-3.5 rounded-xl text-sm font-bold hover:shadow-xl transition-all duration-300 hover:-translate-y-1 hover:scale-105 self-start sm:self-center whitespace-nowrap group/btn"
                        >
                            <span>Lihat Detail</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 group-hover/btn:translate-x-1 transition-transform"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"
                                />
                            </svg>
                        </a>
                    </div>
                @empty
                    <div
                        class="text-center py-20 bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl border-2 border-dashed border-gray-200">
                        <div
                            class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 text-gray-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
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
                        <h3 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Jurusan</h3>
                        <p class="text-gray-500 mb-6">Saat ini belum ada data jurusan yang tersedia.</p>
                        <a
                            href="{{ route('categories') }}"
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all"
                        >
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
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"
                                />
                            </svg>
                            Kembali ke Kategori
                        </a>
                    </div>
                @endforelse

                <!-- No Results Message -->
                <div
                    id="noMajorFound"
                    class="hidden text-center py-16 bg-gradient-to-br from-orange-50 to-red-50 rounded-3xl border-2 border-dashed border-orange-200"
                >
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-10 w-10 text-orange-400"
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
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Jurusan Tidak Ditemukan</h3>
                    <p class="text-gray-600 mb-2">
                        Jurusan "<strong class="text-orange-600"><span id="queryText"></span></strong>" tidak ditemukan.
                    </p>
                    <p class="text-sm text-gray-500">Coba gunakan kata kunci yang berbeda atau lihat semua jurusan.</p>
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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('majorInput');
            const button = document.getElementById('majorSearchBtn');
            const majorItems = document.querySelectorAll('.major-item');
            const noResults = document.getElementById('noMajorFound');
            const queryText = document.getElementById('queryText');
            const majorCount = document.getElementById('majorCount');

            const filterMajors = () => {
                const query = input.value.toLowerCase().trim();
                let hasMatch = 0;

                majorItems.forEach(item => {
                    const name = item.getAttribute('data-name');

                    if (name.includes(query)) {
                        item.classList.remove('hidden');
                        item.style.display = '';
                        hasMatch++;
                    } else {
                        item.classList.add('hidden');
                        item.style.display = 'none';
                    }
                });

                // Update count
                if (majorCount) {
                    majorCount.textContent = hasMatch;
                }

                // Tampilkan pesan "Tidak Ditemukan" jika tidak ada yang cocok
                if (!hasMatch && query !== "") {
                    noResults.classList.remove('hidden');
                    queryText.innerText = input.value;
                } else {
                    noResults.classList.add('hidden');
                }
            };

            // Jalankan fungsi saat mengetik (Real-time)
            input.addEventListener('input', filterMajors);

            // Jalankan fungsi saat tombol klik
            button.addEventListener('click', filterMajors);

            // Menangani tekan tombol Enter
            input.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    filterMajors();
                }
            });
        });
    </script>
@endpush
