@props(['size' => 'sm'])

@php
    switch ($size) {
        case 'sm':
            $classes = 'text-sm font-bold bg-slate-400 rounded-3xl px-2 py-1 sm:px-3 sm:py-1.5 md:px-4 md:py-2';
            break;
            case 'md':
                $classes = 'text-base font-bold bg-slate-400 rounded-3xl px-6 py-3';
                break;
                case 'lg':
                    $classes = 'text-lg font-bold bg-slate-400 rounded-3xl px-8 py-4';
                    break;
    }
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }}
</a>
