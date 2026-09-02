{{-- Komponen: Loader spinner untuk fase loading splash --}}
<div class="flex flex-col items-center gap-5">
    {{-- Spinner --}}
    <div class="relative w-16 h-16">
        <div class="absolute inset-0 rounded-full border-4 border-white/10"></div>
        <div class="absolute inset-0 rounded-full border-4 border-transparent border-t-white animate-spin"></div>
    </div>

    {{-- Teks loading --}}
    <p class="text-white/40 text-xs tracking-[0.3em] uppercase animate-pulse">
        Memuat...
    </p>
</div>
