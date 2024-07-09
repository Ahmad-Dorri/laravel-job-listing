@props(['size' => 'sm'])

@php
    switch ($size) {
        case 'sm':
            $classes = 'text-2xs font-bold bg-slate-800 rounded-3xl px-1 py-0.5 sm:px-1.5 sm:py-1 md:px-2 md:py-1';
            break;
            case 'md':
                $classes = 'text-xs font-bold bg-slate-800 rounded-3xl px-3 py-1.5';
                break;
                case 'lg':
                    $classes = 'text-sm font-bold bg-slate-800 rounded-3xl px-4 py-2';
                    break;
    }
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }}
</a>
