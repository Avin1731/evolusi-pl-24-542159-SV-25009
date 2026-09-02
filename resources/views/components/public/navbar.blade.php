<nav class="sticky top-0 z-50 bg-blue-950/90 backdrop-blur-md border-b border-blue-900/60 shadow-lg shadow-blue-950/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            {{-- Brand Logo / Name --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-full bg-blue-900 border border-blue-700/80 flex items-center justify-center text-white font-bold text-lg shadow-inner group-hover:bg-blue-800 transition-colors">
                    UN
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-white tracking-wider group-hover:text-blue-300 transition-colors">Unknown</span>
                    <span class="text-[10px] uppercase tracking-[0.25em] text-blue-400">Jahit & Busana Kustom</span>
                </div>
            </a>

            {{-- Desktop Nav Menu --}}
            <div class="hidden md:flex items-center gap-1">
                @php
                    $navs = [
                        ['name' => 'Beranda', 'route' => 'home'],
                        ['name' => 'Tentang Kami', 'route' => 'about'],
                        ['name' => 'Layanan', 'route' => 'services'],
                        ['name' => 'Galeri Karya', 'route' => 'gallery'],
                        ['name' => 'Kontak', 'route' => 'contact'],
                    ];
                @endphp

                @foreach($navs as $nav)
                    <a href="{{ route($nav['route']) }}"
                       class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200
                              {{ request()->routeIs($nav['route']) 
                                 ? 'bg-blue-800/80 text-white shadow-sm shadow-blue-900/40 border border-blue-700/50' 
                                 : 'text-blue-200 hover:text-white hover:bg-blue-900/40' }}">
                        {{ $nav['name'] }}
                    </a>
                @endforeach
            </div>

            {{-- Quick Action CTA --}}
            <div class="hidden md:flex items-center gap-3">
                <a href="{{ route('contact') }}" 
                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider bg-white text-blue-950 hover:bg-blue-50 transition-all shadow-md hover:scale-105">
                    Konsultasi Gratis
                </a>
                <a href="{{ route('splash') }}" title="Kembali ke Layar Pembuka"
                   class="p-2.5 rounded-full text-blue-300 hover:text-white hover:bg-blue-900/60 transition-colors border border-blue-800/60">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/>
                    </svg>
                </a>
            </div>

            {{-- Mobile hamburger button (Alpine toggle) --}}
            <div class="flex md:hidden" x-data="{ open: false }">
                <button @click="open = !open" type="button" class="text-blue-300 hover:text-white p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <div x-show="open" 
                     @click.away="open = false"
                     x-transition
                     class="absolute top-20 left-0 right-0 bg-blue-950/95 border-b border-blue-900 p-4 space-y-2 flex flex-col shadow-2xl">
                    @foreach($navs as $nav)
                        <a href="{{ route($nav['route']) }}"
                           class="px-4 py-2.5 rounded-md text-sm font-medium {{ request()->routeIs($nav['route']) ? 'bg-blue-800 text-white' : 'text-blue-200' }}">
                            {{ $nav['name'] }}
                        </a>
                    @endforeach
                    <a href="{{ route('contact') }}" class="w-full text-center mt-2 px-4 py-2.5 rounded-md bg-white text-blue-950 font-semibold text-sm">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>

        </div>
    </div>
</nav>
