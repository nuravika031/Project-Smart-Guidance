@extends('layouts.public')
@section('content')
    <div class="relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-10 left-1/4 w-64 h-64 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute top-10 right-1/4 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="text-center mb-8 sm:mb-12 pt-4">
                <!-- Badge -->
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
                    Kategori Pendidikan
                </div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4">
                    <span class="text-gray-800">Pilih </span>
                    <span
                        class="bg-gradient-to-r from-primary via-purple-600 to-pink-600 bg-clip-text text-transparent">Kategori
                        Minatmu</span>
                </h1>
                <p class="text-sm sm:text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Temukan kelompok jurusan sesuai bidang minat dan keahlianmu. Mulai eksplorasi dari kategori yang paling
                    sesuai dengan passionmu!
                </p>
            </div>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto mb-10 sm:mb-14">
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
                            id="categorySearch"
                            type="text"
                            placeholder="Cari kategori yang kamu inginkan..."
                            class="flex-1 py-3 sm:py-4 px-2 outline-none text-sm sm:text-base text-gray-700 placeholder-gray-400"
                        >
                        <button
                            id="categorySearchBtn"
                            class="bg-gradient-to-r from-primary to-blue-600 text-white px-4 sm:px-6 py-3 sm:py-4 m-1 sm:m-2 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 transition-all shadow-md hover:shadow-lg text-sm sm:text-base flex-shrink-0 whitespace-nowrap"
                        >
                            Cari
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category Cards Section -->
            <div class="relative mb-8">
                <div
                    id="categoryViewport"
                    class="mx-auto w-full overflow-x-auto scroll-smooth snap-x snap-mandatory pb-6"
                >

                    <div
                        id="categoryTrack"
                        class="flex gap-4 sm:gap-6 lg:gap-8 w-full transition-all duration-300"
                    >
                        @forelse ($categories as $index => $item)
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
                            <a
                                href="{{ route('majors', ['category' => $item->slug]) }}"
                                class="category-card group relative bg-white rounded-3xl shadow-lg p-6 sm:p-8 text-center w-full min-[500px]:w-[calc(50%-1rem)] lg:w-[calc(33.333%-2.67rem)] flex-shrink-0 snap-start border border-gray-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 overflow-hidden"
                                data-name="{{ strtolower($item->name) }}"
                                data-desc="{{ strtolower($item->description ?? '') }}"
                            >

                                <!-- Background Decoration -->
                                <div
                                    class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br {{ $gradient }} opacity-10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500">
                                </div>

                                <div class="relative">
                                    <!-- Icon Container -->
                                    <div class="mb-6 flex justify-center">
                                        <div
                                            class="w-20 h-20 sm:w-24 sm:h-24 bg-gradient-to-br {{ $gradient }} rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 p-4">
                                            <img
                                                src="{{ asset('storage/' . $item->icon) }}"
                                                alt="{{ $item->name }}"
                                                class="w-full h-full object-contain filter brightness-0 invert"
                                            >
                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <h3
                                        class="text-xl sm:text-2xl font-bold text-gray-800 mb-3 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:{{ $gradient }} group-hover:bg-clip-text transition-all duration-300">
                                        {{ $item->name }}
                                    </h3>

                                    <!-- Description -->
                                    <p class="text-gray-600 text-sm sm:text-base category-desc mb-4 leading-relaxed">
                                        {{ $item->description }}
                                    </p>

                                    <!-- Arrow Button -->
                                    <div
                                        class="inline-flex items-center gap-2 text-sm font-semibold text-transparent bg-gradient-to-r {{ $gradient }} bg-clip-text opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <span>Lihat Jurusan</span>
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
                                                d="M13 7l5 5m0 0l-5 5m5-5H6"
                                            />
                                        </svg>
                                    </div>

                                    <!-- Jumlah Jurusan Badge -->
                                    <div
                                        class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full shadow-md border border-gray-100">
                                        <span class="text-xs font-bold text-gray-700">{{ $item->majors->count() ?? 0 }}
                                            Jurusan</span>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div
                                class="text-center text-gray-500 w-full py-16 bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200">
                                <div
                                    class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8 text-gray-400"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"
                                        />
                                    </svg>
                                </div>
                                <p class="font-medium">Belum ada data kategori.</p>
                            </div>
                        @endforelse

                        <div
                            id="noResults"
                            class="hidden text-center text-gray-500 w-full py-16 bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200"
                        >
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-8 w-8 text-gray-400"
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
                            <p class="font-medium text-lg mb-2">Kategori tidak ditemukan</p>
                            <p class="text-sm text-gray-400">Coba gunakan kata kunci yang berbeda</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Dots -->
            <div
                id="categoryDots"
                class="flex justify-center gap-2 sm:gap-3 mt-6 mb-8"
            ></div>

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
    </style>
@endsection

@push('styles')
    <style>
        #categoryViewport {
            scrollbar-width: none;
            /* Firefox */
        }

        #categoryViewport::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, Opera */
        }

        .bg-primary {
            background-color: #3b82f6;
        }

        /* Pastikan warna primary terdefinisi */
        .category-desc {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            word-break: break-word;
        }

        @media (min-width: 768px) {
            .category-desc {
                -webkit-line-clamp: 4;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('categorySearch');
            const button = document.getElementById('categorySearchBtn');
            const track = document.getElementById('categoryTrack');
            const viewport = document.getElementById('categoryViewport');
            const dotsContainer = document.getElementById('categoryDots');
            const noResults = document.getElementById('noResults');

            // Mengambil semua kartu asli
            const allCards = Array.from(document.querySelectorAll('.category-card'));
            let currentPage = 0;

            // Hitung perPage berdasarkan ukuran layar
            const getPerPage = () => {
                if (window.innerWidth < 500) return 1;
                if (window.innerWidth < 1024) return 2;
                return 3;
            };

            // --- 1. FUNGSI FILTER ---
            const filterCards = () => {
                const query = input.value.toLowerCase().trim();
                let matchCount = 0;

                allCards.forEach(card => {
                    const name = card.dataset.name || '';
                    const desc = card.dataset.desc || '';

                    if (query === '' || name.includes(query) || desc.includes(query)) {
                        card.classList.remove('hidden');
                        card.style.display = '';
                        matchCount++;
                    } else {
                        card.classList.add('hidden');
                        card.style.display = 'none';
                    }
                });

                // Tampilkan pesan jika tidak ada hasil
                noResults.classList.toggle('hidden', matchCount > 0);

                // Reset navigasi
                currentPage = 0;
                refreshUI();
            };

            // --- 2. FUNGSI LAYOUT & NAVIGASI ---
            const getVisibleCards = () => allCards.filter(c => !c.classList.contains('hidden'));

            const refreshUI = () => {
                const visibleCards = getVisibleCards();
                const perPage = getPerPage();

                // Atur agar kartu ke tengah jika jumlahnya sedikit
                if (visibleCards.length <= perPage) {
                    track.style.justifyContent = 'center';
                } else {
                    track.style.justifyContent = 'flex-start';
                }

                renderDots();
                scrollToPage(0);
            };

            const getCardStep = () => {
                const visible = getVisibleCards();
                if (visible.length === 0) return 0;
                const card = visible[0];
                const gap = window.innerWidth < 500 ? 12 : (window.innerWidth < 1024 ? 24 : 40);
                return card.offsetWidth + gap;
            };

            const renderDots = () => {
                const visibleCount = getVisibleCards().length;
                const perPage = getPerPage();
                const pageCount = Math.ceil(visibleCount / perPage);
                dotsContainer.innerHTML = '';

                if (pageCount <= 1) return;

                for (let i = 0; i < pageCount; i++) {
                    const dot = document.createElement('button');
                    dot.className =
                        `rounded-full transition-all duration-300 hover:scale-110 ${i === currentPage ? 'bg-gradient-to-r from-primary to-purple-600 w-10 h-3 shadow-lg' : 'bg-gray-300 hover:bg-gray-400 w-3 h-3'}`;
                    dot.addEventListener('click', () => {
                        currentPage = i;
                        scrollToPage(i);
                        updateActiveDot();
                    });
                    dotsContainer.appendChild(dot);
                }
            };

            const updateActiveDot = () => {
                const dots = dotsContainer.querySelectorAll('button');
                dots.forEach((dot, index) => {
                    if (index === currentPage) {
                        dot.className =
                            'rounded-full transition-all duration-300 hover:scale-110 bg-gradient-to-r from-primary to-purple-600 w-10 h-3 shadow-lg';
                    } else {
                        dot.className =
                            'rounded-full transition-all duration-300 hover:scale-110 bg-gray-300 hover:bg-gray-400 w-3 h-3';
                    }
                });
            };

            const scrollToPage = (page) => {
                const step = getCardStep();
                const perPage = getPerPage();
                viewport.scrollTo({
                    left: step * perPage * page,
                    behavior: 'smooth'
                });
            };

            // --- 3. EVENT LISTENERS ---
            input.addEventListener('input', filterCards);
            button.addEventListener('click', filterCards);

            // Sync dots saat user scroll manual (swipe)
            viewport.addEventListener('scroll', () => {
                const step = getCardStep();
                const perPage = getPerPage();
                if (step === 0) return;
                const newPage = Math.round(viewport.scrollLeft / (step * perPage));
                if (newPage !== currentPage) {
                    currentPage = newPage;
                    updateActiveDot();
                }
            });

            // Handle resize untuk responsive
            window.addEventListener('resize', () => {
                currentPage = 0;
                refreshUI();
            });

            // Inisialisasi awal
            refreshUI();
        });
    </script>
@endpush
