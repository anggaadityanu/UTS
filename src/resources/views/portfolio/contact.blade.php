@extends('layouts.portfolio')
@section('title', 'Contact')

@section('content')
<section class="bg-gradient-to-b from-blue-50 to-white min-h-[calc(100vh-5rem)] py-16 md:py-20">
    <div class="max-w-2xl mx-auto px-4 sm:px-6">

        <div class="mb-10">
            <span class="text-blue-700 font-semibold text-sm uppercase tracking-widest">Get In Touch</span>
            <h1 class="text-4xl font-extrabold text-gray-900 mt-2">Hubungi Saya</h1>
            <p class="text-gray-500 mt-2">Ada project, kolaborasi, atau pertanyaan? Kirim pesan di bawah ini.</p>
        </div>

        {{-- Livewire Component --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8">
            @livewire('contact-form')
        </div>

        {{-- Info kontak --}}
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
            @if($profile?->email)
            <div class="bg-white border border-gray-200 rounded-xl p-4 flex items-center gap-3">
                <span class="text-2xl">📧</span>
                <div>
                    <p class="text-xs text-gray-500">Email</p>
                    <p class="font-medium text-gray-800">{{ $profile->email }}</p>
                </div>
            </div>
            @endif
            @if($profile?->github)
            <a href="{{ $profile->github }}" target="_blank"
               class="bg-white border border-gray-200 rounded-xl p-4 flex items-center gap-3 hover:border-blue-300 transition">
                <span class="text-2xl">🔗</span>
                <div>
                    <p class="text-xs text-gray-500">GitHub</p>
                    <p class="font-medium text-gray-800">Lihat Profile</p>
                </div>
            </a>
            @endif
        </div>
    </div>
</section>
@endsection