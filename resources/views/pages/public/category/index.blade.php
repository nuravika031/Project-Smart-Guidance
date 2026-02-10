@extends('layouts.public')
@section('content')
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-3">
                CARI KATEGORI
            </h1>
            <p class="text-gray-600">
                Pilih kategori pendidikan untuk melihat kelompok jurusan sesuai bidang minat dan keahlian.
            </p>
        </div>

        <div class="max-w-4xl mx-auto mb-16">
            <div class="flex items-center bg-white rounded-xl shadow-md overflow-hidden border border-transparent focus-within:border-primary transition">
                <div class="px-5 text-gray-400 text-xl">
                    &#128269;
                </div>
                <input id="categorySearch" type="text" placeholder="Cari Kategori (Contoh: Teknologi, Seni...)"
                    class="flex-1 py-4 px-2 outline-none text-gray-700">
                <button id="categorySearchBtn"
                    class="bg-primary text-white px-8 py-3 m-2 rounded-lg font-medium hover:bg-blue-600 transition">
                    Cari
                </button>
            </div>
        </div>

        <div class="relative mb-6">
            <div id="categoryViewport"
                class="mx-auto w-full md:max-w-[700px] lg:max-w-[1040px] overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4">
                
                <div id="categoryTrack" class="flex gap-10 w-full transition-all duration-300">
                    @forelse ($categories as $item)
                        <a href="{{ route('majors', ['category' => $item->slug]) }}"
                            class="category-card bg-white rounded-2xl shadow-lg p-8 text-center w-full sm:w-[320px] flex-shrink-0 snap-start border border-gray-50"
                            data-name="{{ strtolower($item->name) }}"
                            data-desc="{{ strtolower($item->description ?? '') }}">
                            <div class="mb-6 text-5xl flex justify-center">
                                <img src="{{ asset('storage/' . $item->icon) }}" alt="{{ $item->name }}" class="w-16 h-16 object-contain">
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">
                                {{ $item->name }}
                            </h3>
                            <p class="text-gray-600 text-sm category-desc">
                                {{ $item->description }}
                            </p>
                        </a>
                    @empty
                        <div class="text-center text-gray-500 w-full py-10">
                            Belum ada data kategori.
                        </div>
                    @endforelse

                    <div id="noResults" class="hidden text-center text-gray-500 w-full py-10">
                        <div class="text-5xl mb-4">🔍</div>
                        Kategori yang kamu cari tidak ditemukan.
                    </div>
                </div>
            </div>
        </div>

        <div id="categoryDots" class="flex justify-center gap-4 mt-4"></div>

    </div>
@endsection

@push('styles')
    <style>
        #categoryViewport {
            scrollbar-width: none; /* Firefox */
        }
        #categoryViewport::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }
        .bg-primary { background-color: #3b82f6; } /* Pastikan warna primary terdefinisi */
        .category-desc {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            word-break: break-word;
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
            const perPage = 3;
            let currentPage = 0;

            // --- 1. FUNGSI FILTER ---
            const filterCards = () => {
                const query = input.value.toLowerCase().trim();
                let matchCount = 0;

                allCards.forEach(card => {
                    const name = card.dataset.name || '';
                    const desc = card.dataset.desc || '';
                    
                    if (query === '' || name.includes(query) || desc.includes(query)) {
                        card.classList.remove('hidden');
                        card.style.display = 'block';
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
                return visible[0].offsetWidth + 40; // width + gap (gap-10 = 40px)
            };

            const renderDots = () => {
                const visibleCount = getVisibleCards().length;
                const pageCount = Math.ceil(visibleCount / perPage);
                dotsContainer.innerHTML = '';

                if (pageCount <= 1) return;

                for (let i = 0; i < pageCount; i++) {
                    const dot = document.createElement('button');
                    dot.className = `w-3 h-3 rounded-full transition-all duration-300 ${i === currentPage ? 'bg-primary w-8' : 'bg-gray-300'}`;
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
                        dot.classList.add('bg-primary', 'w-8');
                        dot.classList.remove('bg-gray-300');
                    } else {
                        dot.classList.remove('bg-primary', 'w-8');
                        dot.classList.add('bg-gray-300');
                    }
                });
            };

            const scrollToPage = (page) => {
                const step = getCardStep();
                viewport.scrollTo({ left: step * perPage * page, behavior: 'smooth' });
            };

            // --- 3. EVENT LISTENERS ---
            input.addEventListener('input', filterCards);
            button.addEventListener('click', filterCards);

            // Sync dots saat user scroll manual (swipe)
            viewport.addEventListener('scroll', () => {
                const step = getCardStep();
                if (step === 0) return;
                const newPage = Math.round(viewport.scrollLeft / (step * perPage));
                if (newPage !== currentPage) {
                    currentPage = newPage;
                    updateActiveDot();
                }
            });

            // Efek Hover (Opsional, lebih rapi jika di JS)
            allCards.forEach(card => {
                card.addEventListener('mouseenter', () => card.classList.add('-translate-y-2', 'shadow-2xl'));
                card.addEventListener('mouseleave', () => card.classList.remove('-translate-y-2', 'shadow-2xl'));
            });

            // Inisialisasi awal
            refreshUI();
        });
    </script>
@endpush
