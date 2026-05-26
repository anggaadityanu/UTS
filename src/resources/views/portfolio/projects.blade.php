@extends('layouts.portfolio')
@section('title', 'Projects')

@section('content')
<section class="bg-gradient-to-b from-blue-50 to-white py-20">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-12">
            <span class="text-blue-700 font-semibold text-sm uppercase tracking-widest">Portofolio</span>
            <h1 class="text-4xl font-extrabold text-gray-900 mt-2">My Projects</h1>
            <p class="text-gray-500 mt-2">Semua project yang pernah & sedang saya kerjakan.</p>
        </div>

        @livewire('project-filter')
    </div>
</section>
@endsection