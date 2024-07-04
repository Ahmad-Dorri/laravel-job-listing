@props(['active'])

@php
    $defaultClasses = "px-4 py-2 rounded-lg transition-colors duration-300 cursor-pointer ";
    if($active) {
        $classes = $defaultClasses . "bg-white/40 hover:bg-white/40";
    } else {
        $classes = $defaultClasses . "bg-white/10 hover:bg-white/20";
    }
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >{{ $slot }}</a>
