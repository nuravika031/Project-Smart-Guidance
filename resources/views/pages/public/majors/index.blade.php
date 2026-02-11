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
            <div class="flex items-center flex-nowrap gap-1 sm:gap-2 bg-white rounded-xl shadow-md overflow-hidden border border-transparent focus-within:border-primary transition">
                <div class="px-2 sm:px-4 text-gray-400 text-base sm:text-lg flex-shrink-0">
                    🔍
                </div>
                <input id="majorInput" type="text" placeholder="Cari jurusan..." 
                    class="flex-1 py-2 sm:py-3 px-1 sm:px-2 outline-none text-xs sm:text-sm text-gray-700 min-w-0">
                <button id="majorSearchBtn" class="bg-primary text-white px-2 sm:px-4 py-2 sm:py-3 m-1 sm:m-2 rounded-lg font-medium hover:bg-blue-700 transition text-xs sm:text-sm flex-shrink-0 whitespace-nowrap">
                    Cari
                </button>
            </div>
        </div>

        <h2 class="text-lg sm:text-xl font-bold text-gray-800 mb-6">
            Daftar Jurusan
        </h2>

        <div id="majorList" class="space-y-3 sm:space-y-6">
            @forelse ($majors as $major)
                <div class="major-item bg-white rounded-xl shadow-md px-4 sm:px-8 py-4 sm:py-6 flex flex-col sm:flex-row gap-3 sm:gap-0 sm:justify-between sm:items-center transition-all duration-300 hover:shadow-lg"
                     data-name="{{ strtolower($major->name) }}">
                    <h3 class="major-name text-base sm:text-lg font-bold text-gray-800">
                        {{ $major->name }}
                    </h3>
                    <a href="{{ route('detail', $major->slug) }}"
                        class="bg-primary text-white px-4 sm:px-6 py-2 rounded-lg text-xs sm:text-sm font-medium hover:bg-blue-700 transition text-center sm:text-left">
                        Lihat Detail >>
                    </a>
                </div>
            @empty
                <div class="text-center text-gray-500 py-10">
                    Belum ada data jurusan.
                </div>
            @endforelse

            <div id="noMajorFound" class="hidden text-center text-gray-500 py-10 bg-gray-50 rounded-xl border-2 border-dashed">
                <p class="text-base sm:text-lg">Oops! Jurusan "<strong><span id="queryText"></span></strong>" tidak ditemukan.</p>
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
        input.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                filterMajors();
            }
        });
    });
</script>
@endpush
