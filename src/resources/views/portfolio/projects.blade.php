@extends('layouts.portfolio')
@section('title', 'Projects')

@section('content')
<section class="max-w-6xl mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-2">My Projects</h1>
    <p class="text-gray-400 mb-12">Semua project yang pernah & sedang saya kerjakan.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($projects as $project)
        <a href="{{ route('projects.detail', $project->slug) }}"
           class="bg-gray-900 rounded-xl overflow-hidden hover:ring-2
           {{ $project->is_final_project ? 'hover:ring-yellow-400 ring-1 ring-yellow-600' : 'hover:ring-indigo-500' }}
           transition group relative">

            @if($project->is_final_project)
            <div class="absolute top-3 right-3 z-10 bg-yellow-500 text-black text-xs font-bold px-2 py-1 rounded">
                ⭐ Final Project
            </div>
            @endif

            @if($project->thumbnail)
            <img src="{{ asset('storage/' . $project->thumbnail) }}"
                 class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
            @else
            <div class="w-full h-48 bg-gradient-to-br from-indigo-900/50 to-purple-900/50 flex items-center justify-center">
                <span class="text-5xl">💻</span>
            </div>
            @endif

            <div class="p-5">
                <h3 class="font-bold text-lg mb-2">{{ $project->title }}</h3>
                <p class="text-gray-400 text-sm mb-3">{{ Str::limit($project->short_description, 100) }}</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs px-2 py-1 rounded-full
                        {{ $project->status === 'completed' ? 'bg-green-900 text-green-300' :
                           ($project->status === 'on_progress' ? 'bg-blue-900 text-blue-300' : 'bg-yellow-900 text-yellow-300') }}">
                        {{ ucfirst(str_replace('_', ' ', $project->status)) }}
                    </span>
                    <span class="text-indigo-400 text-sm">Lihat Detail →</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection