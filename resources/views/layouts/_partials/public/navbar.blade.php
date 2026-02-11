<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 sm:py-4 flex justify-between items-center">
        <!-- Logo -->
        <div>
            <a href="{{ route('home') }}">
                <img src="{{ asset('image\logoSmartGuidence.png') }}" alt="Logo" class="h-10 sm:h-11 w-auto">
            </a>
        </div>

        <!-- Menu -->
        <nav class="hidden md:flex items-center gap-4 lg:gap-8 text-gray-700 text-sm lg:text-base">
            <a href="{{ route('home') }}"
                class="px-2 py-1 rounded transition {{ request()->routeIs('home') ? 'text-primary font-medium' : 'hover:text-primary' }}">
                HOME
            </a>
            <a href="{{ route('categories') }}"
                class="px-2 py-1 rounded transition {{ request()->routeIs('categories') ? 'text-primary font-medium' : 'hover:text-primary' }}">
                CATEGORY
            </a>
            <a href="{{ route('majors') }}"
                class="px-2 py-1 rounded transition {{ request()->routeIs('majors') ? 'text-primary font-medium' : 'hover:text-primary' }}">
                MAJOR
            </a>
        </nav>

        <!-- Mobile Menu Toggle -->
        <div class="md:hidden">
            <button id="mobileMenuBtn" class="p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">
                <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <nav id="mobileMenu" class="hidden md:hidden border-t border-gray-200 bg-white">
        <div class="px-4 py-3 space-y-2">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-primary transition {{ request()->routeIs('home') ? 'bg-blue-50 text-primary font-medium' : '' }}">
                HOME
            </a>
            <a href="{{ route('categories') }}"
                class="block px-3 py-2 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-primary transition {{ request()->routeIs('categories') ? 'bg-blue-50 text-primary font-medium' : '' }}">
                CATEGORY
            </a>
            <a href="{{ route('majors') }}"
                class="block px-3 py-2 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-primary transition {{ request()->routeIs('majors') ? 'bg-blue-50 text-primary font-medium' : '' }}">
                MAJOR
            </a>
        </div>
    </nav>
</header>

<script>
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        const menu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');
        menu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
    // Close menu when link is clicked
    document.querySelectorAll('#mobileMenu a').forEach(link => {
        link.addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.add('hidden');
            document.getElementById('menuIcon').classList.remove('hidden');
            document.getElementById('closeIcon').classList.add('hidden');
        });
    });
</script>
