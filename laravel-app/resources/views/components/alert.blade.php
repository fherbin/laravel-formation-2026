<div {{ $attributes->merge(['class' => $getTypeColorClasses() . 'border px-4 py-3 rounded relative', 'role' => 'alert']) }}>
    {{ $slot }}
</div>
