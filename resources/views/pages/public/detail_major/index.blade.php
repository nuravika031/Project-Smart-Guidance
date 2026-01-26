@extends('layouts.public')
@section('content')
     <!-- ===== Header Jurusan ===== -->
        <section class="bg-white rounded-xl shadow p-8">
            <p class="text-sm text-blue-600 font-medium mb-2">
                Kategori • Teknologi
            </p>
            <h1 class="text-3xl font-bold mb-4">Teknik Informatika</h1>
            <p class="text-gray-600 max-w-3xl">
                Teknik informatika adalah jurusan fokus melihat perkembangan teknologi
                dan penerapannya dalam kehidupan.
            </p>
        </section>

        <!-- ===== Profil Jurusan ===== -->
        <section class="bg-slate-100 rounded-xl shadow p-8">
            <h2 class="text-xl font-semibold mb-6">Profil Jurusan</h2>

            <div class="grid grid-cols-1 gap-6">
                <div class="bg-white rounded-xl shadow p-6">
                    Program Studi Teknik Informatika adalah jurusan yang mempelajari pengembangan dan penerapan teknologi komputer, 
                    perangkat lunak, serta sistem informasi untuk mendukung kebutuhan masyarakat dan industri di era digital.
                </div>
            </div>
        </section>


        <!-- ===== Kompetensi Lulusan ===== -->
        <section class="bg-white rounded-xl shadow p-8">
            <h2 class="text-xl font-semibold mb-6">Kompetensi Lulusan</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Hard Skill -->
                <div class="bg-slate-100 rounded-xl p-6 min-h-[200px]">
                    <h3 class="text-blue-600 font-semibold mb-3">Hard Skill</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Pemrograman</li>
                        <li>Basis Data</li>
                        <li>Pengembangan Web</li>
                    </ul>
                </div>

                <!-- Soft Skill -->
                <div class="bg-slate-100 rounded-xl p-6 min-h-[200px]">
                    <h3 class="text-blue-600 font-semibold mb-3">Soft Skill</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Problem Solving</li>
                        <li>Kerja Tim</li>
                        <li>Komunikasi</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ===== Struktur Kurikulum ===== -->
        <section class="bg-slate-100 rounded-xl shadow p-8">
            <h2 class="text-xl font-semibold mb-6">Struktur Kurikulum</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow p-6">
                    <h3 class="text-blue-600 font-semibold mb-3">Mata Kuliah Dasar</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Matematika Dasar</li>
                        <li>Bahasa Indonesia</li>
                        <li>Bahasa Indonesia</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl shadow p-6">
                    <h3 class="text-blue-600 font-semibold mb-3">Mata Kuliah Inti</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Pemrograman Web</li>
                        <li>Sistem Operasi</li>
                        <li>Analisis dan Desain Perangkat Lunak</li>
                    </ul>
                </div>

                <div class="bg-white rounded-xl shadow p-6">
                    <h3 class="text-blue-600 font-semibold mb-3">Mata Kuliah Pilihan</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Semantik Web</li>
                        <li>Sistem Pakar</li>
                        <li>Kemanan Jaringan</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ===== Durasi Studi ===== -->
        <section class="bg-white rounded-xl shadow p-8">
            <h2 class="text-xl font-semibold mb-4">Durasi Studi</h2>
            <p class="text-gray-700">
                Durasi studi normal adalah 8 semester (4 tahun), termasuk kerja praktik
                dan tugas akhir.
            </p>
        </section>

        <!-- ===== Bidang Industri ===== -->
        <section class="bg-white rounded-xl shadow p-8">
            <h2 class="text-xl font-semibold mb-4">Bidang Industri Terkait</h2>
            <div class="bg-blue-100 rounded-xl shadow p-6">
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li>Teknologi Informasi dan Komunikasi</li>
                    <li>Startup Digital</li>
                    <li>Perusahaan Perangkat Lunak</li>
                    <li>Industri Data dan Analitik</li>
                    <li>Perbankan dan Keuangan</li>
                    <li>Pendidikan dan Riset</li>
                    <li>Perusahaan Perangkat Lunak</li>
                    <li>Industri Data dan Analitik</li>
                    <li>Perbankan dan Keuangan</li>
                    <li>Pendidikan dan Riset</li>
                </ul>
            </div>
        </section>

        <section class="bg-white rounded-xl shadow p-8">
            <h2 class="text-xl font-semibold mb-4">Perkiraan Kisaran Karir</h2>
            <div class="bg-blue-100 rounded-xl shadow p-6">
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li>Software Engineer</li>
                    <li>Web Developer</li>
                    <li>Mobile App Developer</li>
                    <li>Data Analyst</li>
                    <li>System Analyst</li>
                    <li>IT Support & Network Engineer</li>
                </ul>
            </div>
        </section>

@endsection