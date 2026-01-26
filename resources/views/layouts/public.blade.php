<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Guidance</title>
    @include('layouts._partials.public.styles')
    @stack("styles")

</head>
<body class="bg-gray-100 font-sans">

    <!-- ================= NAVBAR ================= -->
    @include('layouts._partials.public.navbar')

    <!-- ================= MAIN SECTION ================= -->
    <main class="py-20">
        @yield('content')
    </main>
    @stack("scripts")
</body>
</html>
