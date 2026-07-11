@extends('layouts.portfolio')
@section('title', $project->title)

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 py-12 md:py-16">

    {{-- Back --}}
    <a href="{{ route('projects') }}"
       class="inline-flex items-center gap-1 text-blue-700 hover:underline font-medium mb-6">
        ← Kembali ke Projects
    </a>

    {{-- Header --}}
    <div class="mb-8">
        @if($project->is_final_project)
        <span class="bg-yellow-400 text-yellow-900 text-xs font-bold px-3 py-1 rounded-full mb-3 inline-block">
            ⭐ Final Project Report
        </span>
        @endif
        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">{{ $project->title }}</h1>
        <p class="text-gray-600 text-lg mb-4">{{ $project->short_description }}</p>
        <div class="flex gap-3 flex-wrap">
            <span class="px-3 py-1 rounded-full text-sm font-medium
                {{ $project->status === 'completed' ? 'bg-green-100 text-green-700' :
                   ($project->status === 'on_progress' ? 'bg-blue-100 text-blue-700' : 'bg-yellow-100 text-yellow-700') }}">
                {{ ucfirst(str_replace('_', ' ', $project->status)) }}
            </span>
            @if($project->github_url)
            <a href="{{ $project->github_url }}" target="_blank"
               class="px-3 py-1 rounded-full text-sm font-medium bg-gray-800 text-white hover:bg-gray-900 transition">
                🔗 GitHub
            </a>
            @endif
            @if($project->demo_url)
            <a href="{{ $project->demo_url }}" target="_blank"
               class="px-3 py-1 rounded-full text-sm font-medium bg-blue-700 text-white hover:bg-blue-800 transition">
                🚀 Live Demo
            </a>
            @endif
        </div>
    </div>

    {{-- Thumbnail --}}
    @if($project->thumbnail)
    <img src="{{ asset('storage/' . $project->thumbnail) }}"
         class="w-full rounded-2xl mb-10 max-h-80 object-cover border border-gray-200 shadow-sm" alt="{{ $project->title }}">
    @endif

    {{-- LAPORAN AKHIR SECTION — hanya tampil jika is_final_project --}}
    @if($project->is_final_project)

    {{-- Analisis Masalah --}}
    @if($project->problem_analysis)
    <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 md:p-8 mb-6">
        <h2 class="text-xl sm:text-2xl font-bold mb-4 text-blue-700">📋 Analisis Masalah & Kebutuhan Sistem</h2>
        <div class="prose prose-sm sm:prose max-w-none text-gray-700">
            {!! $project->problem_analysis !!}
        </div>
    </div>
    @endif

    {{-- Kebutuhan Sistem --}}
    @if($project->system_requirements)
    <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 md:p-8 mb-6">
        <h2 class="text-xl sm:text-2xl font-bold mb-4 text-blue-700">⚙️ Kebutuhan Sistem & Fitur Utama</h2>
        <div class="prose prose-sm sm:prose max-w-none text-gray-700">
            {!! $project->system_requirements !!}
        </div>
    </div>
    @endif

    {{-- Tech Stack --}}
    @if($project->tech_stack_explanation)
    <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 md:p-8 mb-6">
        <h2 class="text-xl sm:text-2xl font-bold mb-4 text-blue-700">🛠️ Arsitektur & Tech Stack</h2>
        <div class="prose prose-sm sm:prose max-w-none text-gray-700">
            {!! $project->tech_stack_explanation !!}
        </div>
    </div>
    @endif

    {{-- Diagram dengan Alpine.js Lightbox --}}
    @if($project->erd_image || $project->flowchart_image)
    <div class="bg-white border border-gray-200 rounded-2xl p-6 md:p-8 mb-6">
        <h2 class="text-xl sm:text-2xl font-bold mb-6 text-blue-700">📊 Rancangan Sistem</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @if($project->erd_image)
            <div>
                <h3 class="font-semibold mb-3 text-gray-700">Entity Relationship Diagram (ERD)</h3>
                <img src="{{ asset('storage/' . $project->erd_image) }}"
                    onclick="openLightbox(this.src, 'ERD Diagram')"
                    class="w-full rounded-xl border border-gray-200 cursor-zoom-in hover:shadow-lg transition duration-300"
                    alt="ERD">
            </div>
            @endif
            @if($project->flowchart_image)
            <div>
                <h3 class="font-semibold mb-3 text-gray-700">Flowchart Sistem</h3>
                <img src="{{ asset('storage/' . $project->flowchart_image) }}"
                    onclick="openLightbox(this.src, 'Flowchart Sistem')"
                    class="w-full rounded-xl border border-gray-200 cursor-zoom-in hover:shadow-lg transition duration-300"
                    alt="Flowchart">
            </div>
            @endif
        </div>
    </div>

    {{-- Lightbox Modal --}}
    <div id="lightbox" onclick="closeLightbox()"
        class="fixed inset-0 z-[9999] items-center justify-center p-5 bg-black/85 hidden">
        <div onclick="event.stopPropagation()" class="relative max-w-3xl w-full">
            <button onclick="closeLightbox()"
                    class="absolute -top-10 right-0 text-white text-3xl font-bold leading-none">×</button>
            <p id="lightbox-title" class="text-white text-center mb-2.5 font-semibold"></p>
            <img id="lightbox-img" src=""
                 class="max-w-full max-h-[80vh] object-contain rounded-xl shadow-2xl mx-auto"
                 alt="Diagram">
        </div>
    </div>

    <script>
    function openLightbox(src, title) {
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox-title').innerText = title;
        const lb = document.getElementById('lightbox');
        lb.classList.remove('hidden');
        lb.classList.add('flex');
    }
    function closeLightbox() {
        const lb = document.getElementById('lightbox');
        lb.classList.add('hidden');
        lb.classList.remove('flex');
    }
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeLightbox();
    });
    </script>
    @endif

    @endif {{-- end is_final_project --}}

</div>
@endsection
