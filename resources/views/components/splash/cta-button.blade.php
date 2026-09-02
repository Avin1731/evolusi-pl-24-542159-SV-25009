{{-- Komponen: CTA Button untuk splash screen
     Props:
       - href   : string  — URL tujuan
       - variant: string  — 'visitor' (default) | 'admin'
       - label  : string  — teks tombol (via slot)
--}}
@props([
    'href'    => '/',
    'variant' => 'visitor',
])

@php
$base = 'group inline-flex items-center gap-3 px-8 py-4 rounded-full font-semibold
         text-base transition-all duration-300 ease-in-out focus:outline-none
         focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-950';

$styles = match($variant) {
    'admin'   => $base . ' bg-transparent border-2 border-white/40 text-white
                           hover:bg-white/10 hover:border-white/70 focus:ring-white/50',
    default   => $base . ' bg-white text-blue-900 shadow-lg shadow-blue-900/40
                           hover:bg-blue-50 hover:shadow-xl hover:scale-105 focus:ring-white',
};
@endphp

<a href="{{ $href }}" class="{{ $styles }}">

    {{-- Icon visitor --}}
    @if($variant === 'visitor')
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0 transition-transform
             duration-300 group-hover:-translate-x-0.5" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943
                     9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
        </svg>
    @endif

    {{-- Icon admin --}}
    @if($variant === 'admin')
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0 transition-transform
             duration-300 group-hover:rotate-12" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0
                     00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
        </svg>
    @endif

    {{ $slot }}
</a>
