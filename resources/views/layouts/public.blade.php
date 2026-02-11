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
    @stack("scripts")
</body>
</html>
