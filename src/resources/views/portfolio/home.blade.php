@extends('layouts.portfolio')
@section('title', 'Home - Portfolio')

@section('content')
{{-- HERO --}}
<section class="min-h-screen flex items-center justify-center text-center px-4">
    <div>
        @if($profile?->avatar)
            <img src="{{ asset('storage/' . $profile->avatar) }}"
                 class="w-32 h-32 rounded-full mx-auto mb-6 object-cover ring-4 ring-indigo-500" alt="Avatar">
        @endif
        <h1 class="text-5xl font-bold mb-3">
            Hi, I'm <span class="text-indigo-400">{{ $profile?->name ?? 'Your Name' }}</span>
        </h1>
        <p class="text-xl text-gray-400 mb-4">{{ $profile?->tagline ?? 'Full Stack Developer' }}</p>
        <p class="max-w-xl mx-auto text-gray-300 leading-relaxed mb-8">
            {{ $profile?->bio ?? 'Bio singkat kamu di sini.' }}
        </p>

        {{-- Skills --}}
        @if($profile?->skills)
        <div class="flex flex-wrap justify-center gap-2 mb-8">
            @foreach($profile->skills as $skill)
            <span class="px-3 py-1 bg-indigo-600/30 border border-indigo-500 rounded-full text-sm text-indigo-300">
                {{ $skill }}
            </span>
            @endforeach
        </div>
        @endif

        <div class="flex justify-center gap-4">
            <a href="{{ route('projects') }}"
               class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 rounded-lg font-semibold transition">
                Lihat Projects
            </a>
            <a href="{{ route('contact') }}"
               class="px-6 py-3 border border-indigo-500 hover:bg-indigo-900/30 rounded-lg font-semibold transition">
                Contact Me
            </a>
        </div>
    </div>
</section>

{{-- FEATURED PROJECTS --}}
<section class="max-w-6xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-center mb-12">Featured Projects</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($projects as $project)
        <a href="{{ route('projects.detail', $project->slug) }}"
           class="bg-gray-900 rounded-xl overflow-hidden hover:ring-2 hover:ring-indigo-500 transition group">
            @if($project->thumbnail)
            <img src="{{ asset('storage/' . $project->thumbnail) }}"
                 class="w-full h-48 object-cover group-hover:scale-105 transition duration-300" alt="{{ $project->title }}">
            @else
            <div class="w-full h-48 bg-indigo-900/30 flex items-center justify-center">
                <span class="text-4xl">🚀</span>
            </div>
            @endif
            <div class="p-5">
                <h3 class="font-bold text-lg mb-2">{{ $project->title }}</h3>
                <p class="text-gray-400 text-sm">{{ Str::limit($project->short_description, 100) }}</p>
                <span class="inline-block mt-3 text-xs px-2 py-1 rounded-full
                    {{ $project->status === 'completed' ? 'bg-green-900 text-green-300' :
                       ($project->status === 'on_progress' ? 'bg-blue-900 text-blue-300' : 'bg-yellow-900 text-yellow-300') }}">
                    {{ ucfirst(str_replace('_', ' ', $project->status)) }}
                </span>
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection