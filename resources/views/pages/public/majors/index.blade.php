@extends('layouts.public')
@section('content')
    <div class="max-w-6xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-8 sm:mb-10">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-800 mb-2">
                CARI JURUSAN
            </h1>
            <p class="text-sm sm:text-base text-gray-600">
                @if (!empty($category))
                    Menampilkan jurusan untuk kategori <span class="font-semibold">{{ $category->name }}</span>.
                @else
                    Cari dan pelajari jurusan secara detail untuk menentukan pilihan pendidikan dan karier masa depan.
                @endif
            </p>
        </div>

        <div class="max-w-4xl mx-auto mb-8 sm:mb-10">
            <div
                class="flex items-center flex-nowrap gap-1 sm:gap-2 bg-white rounded-xl shadow-md overflow-hidden border border-transparent focus-within:border-primary transition">
                <div class="px-2 sm:px-4 text-gray-400 text-base sm:text-lg flex-shrink-0">
                    🔍
                </div>
                <input
                    id="majorInput"
                    type="text"
                    placeholder="Cari jurusan..."
                    class="flex-1 py-2 sm:py-3 px-1 sm:px-2 outline-none text-xs sm:text-sm text-gray-700 min-w-0"
                >
                <button
                    id="majorSearchBtn"
                    class="bg-primary text-white px-2 sm:px-4 py-2 sm:py-3 m-1 sm:m-2 rounded-lg font-medium hover:bg-blue-700 transition text-xs sm:text-sm flex-shrink-0 whitespace-nowrap"
                >
                    Cari
                </button>
            </div>
        </div>

        <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-6">
            Daftar Jurusan
        </h2>

        <div
            id="majorList"
            class="space-y-3 sm:space-y-6"
        >
            @forelse ($majors as $major)
                <div
                    class="major-item group bg-white rounded-2xl shadow-md hover:shadow-xl px-5 sm:px-8 py-5 sm:py-6 flex flex-col sm:flex-row gap-4 sm:gap-6 sm:justify-between sm:items-center transition-all duration-300 border border-gray-100 hover:border-primary/20"
                    data-name="{{ strtolower($major->name) }}"
                >
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2">
                            <div
                                class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center text-white shadow-md">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 sm:h-6 sm:w-6"
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
                            <h3
                                class="major-name text-lg sm:text-xl font-bold text-gray-800 group-hover:text-primary transition-colors">
                                {{ $major->name }}
                            </h3>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed pl-0 sm:pl-[60px]">
                            {{ Str::limit($major->description, 120, '...') ?? 'Deskripsi jurusan belum tersedia.' }}
                        </p>
                    </div>
                    <a
                        href="{{ route('detail', $major->slug) }}"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-blue-600 text-white px-5 sm:px-6 py-2.5 sm:py-3 rounded-xl text-sm font-semibold hover:from-blue-700 hover:to-blue-800 transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5 self-start sm:self-center"
                    >
                        <span>Lihat Detail</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                            />
                        </svg>
                    </a>
                </div>
            @empty
                <div class="text-center py-16 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
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
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                            />
                        </svg>
                    </div>
                    <p class="text-gray-500 font-medium">Belum ada data jurusan.</p>
                </div>
            @endforelse

            <div
                id="noMajorFound"
                class="hidden text-center text-gray-500 py-10 bg-gray-50 rounded-xl border-2 border-dashed"
            >
                <p class="text-base sm:text-lg">Oops! Jurusan "<strong><span id="queryText"></span></strong>" tidak
                    ditemukan.</p>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('majorInput');
            const button = document.getElementById('majorSearchBtn');
            const majorItems = document.querySelectorAll('.major-item');
            const noResults = document.getElementById('noMajorFound');
            const queryText = document.getElementById('queryText');

            const filterMajors = () => {
                const query = input.value.toLowerCase().trim();
                let hasMatch = false;

                majorItems.forEach(item => {
                    const name = item.getAttribute('data-name');

                    if (name.includes(query)) {
                        item.classList.remove('hidden');
                        item.style.display = '';
                        hasMatch = true;
                    } else {
                        item.classList.add('hidden');
                        item.style.display = 'none';
                    }
                });

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
