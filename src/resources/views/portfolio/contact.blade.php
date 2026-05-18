@extends('layouts.portfolio')
@section('title', 'Contact')

@section('content')
<section class="max-w-2xl mx-auto px-4 py-16">
    <h1 class="text-4xl font-bold mb-3">Contact Me</h1>
    <p class="text-gray-400 mb-10">Ada project atau kolaborasi? Hubungi saya!</p>

    @if(session('success'))
    <div class="bg-green-900/50 border border-green-500 text-green-300 rounded-lg px-4 py-3 mb-6">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block text-sm text-gray-400 mb-1">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-3
                          focus:outline-none focus:ring-2 focus:ring-indigo-500 text-white"
                   placeholder="John Doe">
            @error('name') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}"
                   class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-3
                          focus:outline-none focus:ring-2 focus:ring-indigo-500 text-white"
                   placeholder="john@email.com">
            @error('email') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-1">Subject</label>
            <input type="text" name="subject" value="{{ old('subject') }}"
                   class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-3
                          focus:outline-none focus:ring-2 focus:ring-indigo-500 text-white"
                   placeholder="Kolaborasi Project">
        </div>

        <div>
            <label class="block text-sm text-gray-400 mb-1">Pesan</label>
            <textarea name="message" rows="5"
                      class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-3
                             focus:outline-none focus:ring-2 focus:ring-indigo-500 text-white resize-none"
                      placeholder="Tulis pesanmu...">{{ old('message') }}</textarea>
            @error('message') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 transition py-3 rounded-lg font-semibold">
            Kirim Pesan 🚀
        </button>
    </form>
</section>
@endsection