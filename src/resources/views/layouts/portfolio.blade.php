<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 font-sans antialiased">

    {{-- NAVBAR --}}
    <nav x-data="{ open: false }" class="fixed top-0 w-full bg-white/90 backdrop-blur-md border-b border-gray-200 z-50 shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-blue-700 tracking-tight">
                Portofolio
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex gap-8 text-sm font-medium text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-blue-700 transition">Home</a>
                <a href="{{ route('projects') }}" class="hover:text-blue-700 transition">Projects</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-700 transition">Contact</a>
            </div>

            {{-- Hamburger Button (mobile only) --}}
            <button @click="open = !open" class="md:hidden flex flex-col gap-1.5 p-2">
                <span :class="open ? 'rotate-45 translate-y-2' : ''"
                      class="block w-6 h-0.5 bg-gray-700 transition-transform duration-300"></span>
                <span :class="open ? 'opacity-0' : ''"
                      class="block w-6 h-0.5 bg-gray-700 transition-opacity duration-300"></span>
                <span :class="open ? '-rotate-45 -translate-y-2' : ''"
                      class="block w-6 h-0.5 bg-gray-700 transition-transform duration-300"></span>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="open"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden border-t border-gray-200 bg-white px-6 py-4 flex flex-col gap-4 text-sm font-medium text-gray-600">
            <a href="{{ route('home') }}" @click="open = false" class="hover:text-blue-700 transition">Home</a>
            <a href="{{ route('projects') }}" @click="open = false" class="hover:text-blue-700 transition">Projects</a>
            <a href="{{ route('contact') }}" @click="open = false" class="hover:text-blue-700 transition">Contact</a>
        </div>
    </nav>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer class="bg-gray-50 border-t border-gray-200 mt-20">
        <div class="max-w-6xl mx-auto px-6 py-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="font-bold text-blue-700">Portofolio</span>
            <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} — Dibangun dengan Laravel & Filament</p>
            <div class="flex gap-4 text-sm text-gray-500">
                <a href="{{ route('home') }}" class="hover:text-blue-700 transition">Home</a>
                <a href="{{ route('projects') }}" class="hover:text-blue-700 transition">Projects</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-700 transition">Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>