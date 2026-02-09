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
                    &#128269;
                </div>
                <input id="categorySearch" type="text" placeholder="Cari Kategori"
                    class="flex-1 py-4 px-2 outline-none text-gray-700">
                <button id="categorySearchBtn"
                    class="bg-primary text-white px-8 py-3 m-2 rounded-lg font-medium hover:bg-blue-600 transition">
                    Cari
                </button>
            </div>
        </div>

        <!-- Cards (3 visible, swipe/scroll to slide) -->
        <div class="relative mb-6">
            <div id="categoryViewport"
                class="mx-auto w-full md:max-w-[700px] lg:max-w-[1040px] overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4">
                <div id="categoryTrack" class="flex gap-10 w-full">
                    @forelse ($categories as $item)
                        <div class="category-card bg-white rounded-2xl shadow-lg p-8 text-center w-full sm:w-[320px] flex-shrink-0 snap-start"
                            data-name="{{ strtolower($item->name) }}"
                            data-desc="{{ strtolower($item->description ?? '') }}">
                            <div class="mb-6 text-5xl flex justify-center">
                                <img src="{{ asset('storage/' . $item->icon) }}" alt="{{ $item->name }}" width="50">
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">
                                {{ $item->name }}
                            </h3>
                            <p class="text-gray-600 text-sm">
                                {{ $item->description }}
                            </p>
                        </div>
                    @empty
                        <div class="text-center text-gray-500 w-full">
                            Belum ada data kategori.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Pagination Dots -->
        <div id="categoryDots" class="flex justify-center gap-4"></div>

    </div>
@endsection

@push('styles')
    <style>
        #categoryViewport {
            scrollbar-width: none;
        }
        #categoryViewport::-webkit-scrollbar {
            display: none;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('categorySearch');
            const button = document.getElementById('categorySearchBtn');
            const cards = Array.from(document.querySelectorAll('.category-card'));
            const track = document.getElementById('categoryTrack');
            const viewport = document.getElementById('categoryViewport');
            const dotsContainer = document.getElementById('categoryDots');
            const perPage = 3;
            let currentPage = 0;

            const applyHoverMotion = () => {
                cards.forEach(card => {
                    card.classList.add('transition-transform', 'duration-300');
                    card.addEventListener('mouseenter', () => {
                        card.classList.add('-translate-y-1');
                        card.classList.add('shadow-xl');
                    });
                    card.addEventListener('mouseleave', () => {
                        card.classList.remove('-translate-y-1');
                        card.classList.remove('shadow-xl');
                    });
                });
            };

            const filterCards = () => {
                const q = (input.value || '').trim().toLowerCase();

                cards.forEach(card => {
                    const name = card.dataset.name || '';
                    const desc = card.dataset.desc || '';
                    const match = q === '' || name.includes(q) || desc.includes(q);
                    card.classList.toggle('hidden', !match);
                });

                currentPage = 0;
                renderDots();
                scrollToPage(0);
            };

            input.addEventListener('input', filterCards);
            button.addEventListener('click', filterCards);

            const getVisibleCards = () => cards.filter(c => !c.classList.contains('hidden'));

            const getPageCount = () => {
                const visibleCount = getVisibleCards().length;
                return Math.max(1, Math.ceil(visibleCount / perPage));
            };

            const applyBalance = () => {
                const visibleCount = getVisibleCards().length;
                const shouldCenter = visibleCount <= perPage;
                track.classList.toggle('justify-center', shouldCenter);
            };

            const getCardStep = () => {
                const first = getVisibleCards()[0];
                if (!first) return 0;
                const cardWidth = first.getBoundingClientRect().width;
                const gap = 40;
                return cardWidth + gap;
            };

            const scrollToPage = (page) => {
                const step = getCardStep();
                const offset = step * perPage * page;
                viewport.scrollTo({ left: offset, behavior: 'smooth' });
            };

            const renderDots = () => {
                const pageCount = getPageCount();
                dotsContainer.innerHTML = '';

                for (let i = 0; i < pageCount; i += 1) {
                    const dot = document.createElement('button');
                    dot.type = 'button';
                    dot.className = 'w-4 h-4 rounded-full ' + (i === currentPage ? 'bg-primary' : 'bg-gray-300');
                    dot.addEventListener('click', () => {
                        currentPage = i;
                        renderDots();
                        scrollToPage(i);
                    });
                    dotsContainer.appendChild(dot);
                }
            };

            const syncDotsOnScroll = () => {
                const step = getCardStep();
                if (step === 0) return;
                const page = Math.round(viewport.scrollLeft / (step * perPage));
                if (page !== currentPage) {
                    currentPage = page;
                    renderDots();
                }
            };

            applyHoverMotion();
            applyBalance();
            renderDots();
            viewport.addEventListener('scroll', () => {
                window.requestAnimationFrame(syncDotsOnScroll);
            });
            window.addEventListener('resize', () => {
                applyBalance();
                renderDots();
                scrollToPage(currentPage);
            });
        });
    </script>
@endpush
