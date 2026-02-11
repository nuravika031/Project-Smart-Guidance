<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('image/logoSmartGuidence.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('image/logoSmartGuidence.png') }}">
    <title>Smart Guidance</title>
    @include('layouts._partials.public.styles')
    @stack("styles")

</head>
<body class="bg-gray-100 font-sans">

    <!-- ================= NAVBAR ================= -->
    @include('layouts._partials.public.navbar')

    <!-- ================= MAIN SECTION ================= -->
    <main class="py-8 sm:py-12 md:py-20 space-y-6 sm:space-y-8 md:space-y-12">
        @yield('content')
    </main>

    <!-- ================= FOOTER ================= -->
    <footer class="mt-16 sm:mt-20 border-t border-gray-200">
        <div class="bg-white py-8 sm:py-10 md:py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="text-center">
                    <!-- Copyright -->
                    <p class="text-gray-700 font-medium text-sm sm:text-base mb-3 sm:mb-4">
                        © 2026 <span class="text-primary font-semibold">Smart School</span>
                    </p>
                    
                    <!-- Team Members -->
                    <p class="text-gray-500 text-xs sm:text-sm leading-relaxed hover:text-gray-700 transition-colors duration-300">
                        Tim KPI — 
                        <span class="hover:text-primary transition-colors duration-300 cursor-pointer">Greis Banne Liling</span> | 
                        <span class="hover:text-primary transition-colors duration-300 cursor-pointer">Nur Avika</span> | 
                        <span class="hover:text-primary transition-colors duration-300 cursor-pointer">Ratri Pramudita</span> | 
                        <span class="hover:text-primary transition-colors duration-300 cursor-pointer">Rifqah. S</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <style>
        .text-primary {
            color: #3B82F6;
        }
        
        .hover\:text-primary:hover {
            color: #3B82F6;
        }
    </style>

    @stack("scripts")
</body>
</html>
