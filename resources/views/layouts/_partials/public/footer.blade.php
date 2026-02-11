<footer class="mt-16 sm:mt-20 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50"></div>
    <div class="absolute inset-0 opacity-30">
        <div
            class="absolute bottom-0 left-0 w-64 h-64 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-20 -mb-32 -ml-32">
        </div>
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 -mt-32 -mr-32">
        </div>
    </div>

    <div class="relative z-10">
        <!-- Main Footer Content -->
        <div class="border-t border-gray-200 bg-white/50 backdrop-blur-sm py-10 sm:py-12 md:py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">

                    <!-- Brand Section -->
                    <div class="text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start gap-3 mb-4">
                            <img
                                src="{{ asset('image/logoSmartGuidence.png') }}"
                                alt="Logo"
                                class="h-10 sm:h-11 w-auto"
                            >
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Platform bimbingan karir terpercaya untuk membantu siswa menemukan jurusan yang tepat sesuai
                            minat dan bakat mereka.
                        </p>
                    </div>

                    <!-- Quick Links -->
                    <div class="text-center">
                        <h4 class="text-gray-800 font-bold text-base mb-4">Navigasi Cepat</h4>
                        <ul class="space-y-2">
                            <li>
                                <a
                                    href="{{ route('home') }}"
                                    class="text-gray-600 hover:text-primary text-sm inline-flex items-center gap-2 transition-colors group"
                                >
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a
                                    href="{{ route('categories') }}"
                                    class="text-gray-600 hover:text-primary text-sm inline-flex items-center gap-2 transition-colors group"
                                >
                                    Kategori
                                </a>
                            </li>
                            <li>
                                <a
                                    href="{{ route('majors') }}"
                                    class="text-gray-600 hover:text-primary text-sm inline-flex items-center gap-2 transition-colors group"
                                >
                                    Semua Jurusan
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Team Section -->
                    <div class="text-center md:text-right">
                        <h4 class="text-gray-800 font-bold text-base mb-4">Tim Pengembang</h4>
                        <div
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-primary/10 to-purple-500/10 text-primary px-3 py-1.5 rounded-full text-xs font-medium mb-3 border border-primary/20">
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
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                                />
                            </svg>
                            Tim KPI
                        </div>
                        <div class="space-y-2">
                            <p class="text-gray-600 text-sm flex items-center justify-center md:justify-end gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-primary to-purple-600 rounded-full"></span>
                                Greis Banne Liling
                            </p>
                            <p class="text-gray-600 text-sm flex items-center justify-center md:justify-end gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-primary to-purple-600 rounded-full"></span>
                                Nur Avika
                            </p>
                            <p class="text-gray-600 text-sm flex items-center justify-center md:justify-end gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-primary to-purple-600 rounded-full"></span>
                                Ratri Pramudita
                            </p>
                            <p class="text-gray-600 text-sm flex items-center justify-center md:justify-end gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-primary to-purple-600 rounded-full"></span>
                                Rifqah. S
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-gray-200 pt-6">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <!-- Copyright -->
                        <p class="text-gray-600 text-sm text-center md:text-left">
                            © {{ date('Y') }} <span
                                class="font-semibold bg-gradient-to-r from-primary to-purple-600 bg-clip-text text-transparent"
                            >Smart Guidance</span> by <span
                                class="font-semibold bg-gradient-to-r from-primary to-orange-600 bg-clip-text text-transparent"
                            >Smart School</span>. All rights reserved.
                        </p>

                        <!-- Social Links or Additional Info -->
                        {{-- <div class="flex items-center gap-4">
                            <span class="text-gray-500 text-xs">Dibuat dengan</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-red-500 animate-pulse"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="text-gray-500 text-xs">di Indonesia</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
