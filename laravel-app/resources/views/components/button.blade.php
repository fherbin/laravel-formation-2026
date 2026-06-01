@if($href)
<a {{ $attributes->merge(['class' => $getVariantColorClasses() . ' text-white font-bold py-2 px-4 rounded', 'href' => $href]) }}>
    {{ $slot }}
</a>
@else
<button {{ $attributes->merge(['class' => $getVariantColorClasses() . ' text-white font-bold py-2 px-4 rounded']) }}>
    {{ $slot }}
</button>
@endif
