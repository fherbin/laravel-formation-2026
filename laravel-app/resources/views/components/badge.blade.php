@props(['color' => 'green'])
<span {{ $attributes->merge(['class' => sprintf('flex rounded-full bg-%s-500 uppercase px-2 py-1 text-xs font-bold mr-3', $color)]) }}>{{ $slot }}</span>
