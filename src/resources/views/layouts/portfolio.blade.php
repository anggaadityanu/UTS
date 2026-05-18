<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-950 text-white font-sans">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 w-full bg-gray-900/80 backdrop-blur-sm border-b border-gray-800 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-400">
                &lt;MyPortfolio /&gt;
            </a>
            <div class="flex gap-6 text-sm">
                <a href="{{ route('home') }}" class="hover:text-indigo-400 transition">Home</a>
                <a href="{{ route('projects') }}" class="hover:text-indigo-400 transition">Projects</a>
                <a href="{{ route('contact') }}" class="hover:text-indigo-400 transition">Contact</a>
            </div>
        </div>
    </nav>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer class="text-center py-8 text-gray-500 text-sm border-t border-gray-800 mt-20">
        &copy; {{ date('Y') }} — Built with Laravel + Filament
    </footer>

</body>
</html>