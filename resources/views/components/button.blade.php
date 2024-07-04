@props(['mode' => 'button'])

@php
    $classes = "bg-blue-500 px-4 py-2 rounded-lg transition-colors duration-300 hover:bg-blue-900 cursor-pointer";
@endphp

@if($mode === "button")
    <button {{ $attributes->merge(['class' => $classes]) }} >
        {{ $slot }}
    </button>
@else
    <a {{ $attributes->merge(['class' => $classes]) }} >
        {{ $slot }}
    </a>
@endif

