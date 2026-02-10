@extends('layouts.public')
@section('content')
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-2">
                CARI JURUSAN
            </h1>
            <p class="text-gray-600">
                Cari dan pelajari jurusan secara detail untuk menentukan pilihan pendidikan dan karier masa depan.
            </p>
        </div>

        <div class="max-w-4xl mx-auto mb-10">
            <div class="flex items-center bg-white rounded-xl shadow-md overflow-hidden border border-transparent focus-within:border-primary transition">
                <div class="px-5 text-gray-400 text-xl">
                    🔍
                </div>
                <input id="majorInput" type="text" placeholder="Ketik nama jurusan... (contoh: Informatika)" 
                    class="flex-1 py-4 px-2 outline-none text-gray-700">
                <button id="majorSearchBtn" class="bg-primary text-white px-8 py-3 m-2 rounded-lg font-medium hover:bg-blue-700 transition">
                    Cari
                </button>
            </div>
        </div>

        <h2 class="text-xl font-bold text-gray-800 mb-6">
            Daftar Jurusan
        </h2>

        <div id="majorList" class="space-y-6">
            @forelse ($majors as $major)
                <div class="major-item bg-white rounded-xl shadow-md px-8 py-6 flex justify-between items-center transition-all duration-300 hover:shadow-lg"
                     data-name="{{ strtolower($major->name) }}">
                    <h3 class="major-name text-lg font-bold text-gray-800">
                        {{ $major->name }}
                    </h3>
                    <a href="{{ route('detail', $major->id) }}"
                        class="bg-primary text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition">
                        Lihat Detail >>
                    </a>
                </div>
            @empty
                <div class="text-center text-gray-500 py-10">
                    Belum ada data jurusan.
                </div>
            @endforelse

            <div id="noMajorFound" class="hidden text-center text-gray-500 py-10 bg-gray-50 rounded-xl border-2 border-dashed">
                <p class="text-lg">Oops! Jurusan "<strong><span id="queryText"></span></strong>" tidak ditemukan.</p>
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
                    // Tambahkan efek animasi sedikit agar halus
                    item.style.display = 'flex';
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