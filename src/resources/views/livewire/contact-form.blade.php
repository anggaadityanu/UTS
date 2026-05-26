<div x-data="{ focused: null }">

    {{-- Success Message dengan Alpine.js animation --}}
    @if($submitted)
    <div
        x-data="{ show: true }"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        class="bg-green-50 border border-green-300 text-green-700 rounded-xl px-5 py-4 mb-6 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <span class="text-xl">✅</span>
            <span class="font-medium">Pesan berhasil dikirim! Terima kasih, kami akan segera merespons.</span>
        </div>
        <button @click="show = false; $wire.set('submitted', false)"
                class="text-green-500 hover:text-green-700 text-lg font-bold">×</button>
    </div>
    @endif

    <form wire:submit="send" class="space-y-5">

        {{-- Name & Email --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            {{-- Name --}}
            <div x-data="{}">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nama <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input
                        type="text"
                        wire:model.live="name"
                        @focus="focused = 'name'"
                        @blur="focused = null"
                        :class="focused === 'name' ? 'ring-2 ring-blue-500 border-transparent' : ''"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none transition"
                        placeholder="John Doe">
                    {{-- Loading indicator --}}
                    <div wire:loading wire:target="name"
                         class="absolute right-3 top-3.5 w-4 h-4 border-2 border-blue-500 border-t-transparent rounded-full animate-spin">
                    </div>
                </div>
                @error('name')
                <p x-data="{}"
                   x-transition:enter="transition ease-out duration-200"
                   x-transition:enter-start="opacity-0 transform -translate-y-1"
                   x-transition:enter-end="opacity-100 transform translate-y-0"
                   class="text-red-500 text-xs mt-1 flex items-center gap-1">
                    <span>⚠️</span> {{ $message }}
                </p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input
                        type="email"
                        wire:model.live="email"
                        @focus="focused = 'email'"
                        @blur="focused = null"
                        :class="focused === 'email' ? 'ring-2 ring-blue-500 border-transparent' : ''"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none transition"
                        placeholder="john@email.com">
                    <div wire:loading wire:target="email"
                         class="absolute right-3 top-3.5 w-4 h-4 border-2 border-blue-500 border-t-transparent rounded-full animate-spin">
                    </div>
                </div>
                @error('email')
                <p x-transition:enter="transition ease-out duration-200"
                   x-transition:enter-start="opacity-0 transform -translate-y-1"
                   x-transition:enter-end="opacity-100 transform translate-y-0"
                   class="text-red-500 text-xs mt-1 flex items-center gap-1">
                    <span>⚠️</span> {{ $message }}
                </p>
                @enderror
            </div>
        </div>

        {{-- Subject --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
            <input
                type="text"
                wire:model.live="subject"
                @focus="focused = 'subject'"
                @blur="focused = null"
                :class="focused === 'subject' ? 'ring-2 ring-blue-500 border-transparent' : ''"
                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none transition"
                placeholder="Kolaborasi Project">
        </div>

        {{-- Message --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Pesan <span class="text-red-500">*</span>
                {{-- Character counter dengan Alpine.js --}}
                <span x-data="{ count: 0 }"
                      x-text="count + ' karakter'"
                      @input.window="count = $event.target.value?.length || 0"
                      class="text-gray-400 font-normal ml-2 text-xs">
                </span>
            </label>
            <div class="relative">
                <textarea
                    wire:model.live="message"
                    @focus="focused = 'message'"
                    @blur="focused = null"
                    :class="focused === 'message' ? 'ring-2 ring-blue-500 border-transparent' : ''"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none transition resize-none"
                    rows="5"
                    placeholder="Tulis pesanmu..."></textarea>
            </div>
            @error('message')
            <p x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 transform -translate-y-1"
               x-transition:enter-end="opacity-100 transform translate-y-0"
               class="text-red-500 text-xs mt-1 flex items-center gap-1">
                <span>⚠️</span> {{ $message }}
            </p>
            @enderror
        </div>

        {{-- Submit Button --}}
        <button
            type="submit"
            wire:loading.attr="disabled"
            wire:loading.class="opacity-75 cursor-not-allowed"
            class="w-full bg-blue-700 hover:bg-blue-800 text-white py-3 rounded-lg font-semibold shadow-md transition flex items-center justify-center gap-2">

            {{-- Loading state --}}
            <span wire:loading wire:target="send"
                  class="w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin">
            </span>
            <span wire:loading wire:target="send">Mengirim...</span>
            <span wire:loading.remove wire:target="send">Kirim Pesan →</span>
        </button>

    </form>
</div>