<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="px-6 py-4">
        @if ($title)
        <div class="font-bold text-xl mb-2">{{ $title }}</div>
        @endif
        <p class="text-gray-700 text-base">
            {{ $slot }}
        </p>
    </div>
</div>
