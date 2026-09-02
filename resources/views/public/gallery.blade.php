<x-public-layout title="Galeri Karya">
    <section class="bg-blue-950/60 border-b border-blue-900/40 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Portofolio Studio</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-2 mb-4">Galeri Hasil Jahitan</h1>
            <p class="text-slate-300 max-w-xl mx-auto text-sm sm:text-base leading-relaxed">
                Arahkan kursor untuk melihat detail, atau <span class="text-blue-400 font-semibold underline decoration-blue-500">klik pada foto untuk mengunci keterangan</span>. Klik di luar untuk melepas kunci.
            </p>
        </div>
    </section>

    {{-- Gallery Grid with Alpine.js Hover + Click-to-Lock mechanism --}}
    <section class="py-20 bg-slate-900" 
             x-data="galleryManager()"
             @click.away="lockedId = null">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Status bar indikator interaksi --}}
            <div class="mb-8 flex items-center justify-between text-xs text-slate-400 border-b border-slate-800 pb-4">
                <div>
                    Menampilkan <span class="text-white font-semibold">{{ count($galleries) }} Koleksi</span> Hasil Karya
                </div>
                <div class="flex items-center gap-2">
                    <span class="inline-block w-2 h-2 rounded-full" :class="lockedId ? 'bg-amber-400 animate-ping' : 'bg-blue-400'"></span>
                    <span x-text="lockedId ? 'Status: Detail Terkunci (Klik foto lain atau area luar untuk melepas)' : 'Petunjuk: Hover untuk preview / Klik untuk kunci'"></span>
                </div>
            </div>

            {{-- Grid Item --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($galleries as $item)
                    <div class="group relative rounded-2xl overflow-hidden bg-slate-800 border border-slate-700/80 shadow-xl shadow-blue-950/30 cursor-pointer select-none transition-all duration-300"
                         :class="lockedId === {{ $item['id'] }} ? 'ring-4 ring-blue-500 scale-[1.02] z-20' : 'hover:border-blue-600/60'"
                         @mouseenter="hoveredId = {{ $item['id'] }}"
                         @mouseleave="hoveredId = null"
                         @click.stop="toggleLock({{ $item['id'] }})">
                        
                        {{-- Gambar Foto --}}
                        <div class="aspect-[4/5] w-full overflow-hidden bg-slate-950">
                            <img src="{{ $item['image_url'] }}" 
                                 alt="{{ $item['title'] }}" 
                                 class="w-full h-full object-cover transition-transform duration-500 ease-out"
                                 :class="(hoveredId === {{ $item['id'] }} || lockedId === {{ $item['id'] }}) ? 'scale-110 blur-[2px]' : 'scale-100'">
                        </div>

                        {{-- Badge Kunci / Kategori di Pojok Atas --}}
                        <div class="absolute top-4 left-4 right-4 flex items-center justify-between pointer-events-none z-10">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-950/80 text-blue-300 border border-blue-800/80 backdrop-blur-md">
                                {{ $item['category'] }}
                            </span>

                            {{-- Ikon Gembok jika Terkunci --}}
                            <span x-show="lockedId === {{ $item['id'] }}"
                                  x-transition:enter="transition ease-out duration-200"
                                  x-transition:enter-start="opacity-0 scale-75"
                                  x-transition:enter-end="opacity-100 scale-100"
                                  class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-amber-500 text-slate-950 flex items-center gap-1 shadow-md">
                                🔒 Terkunci
                            </span>
                        </div>

                        {{-- Overlay Detail: Muncul saat hover ATAU saat lockedId cocok --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-950/95 via-blue-950/80 to-transparent p-6 flex flex-col justify-end transition-all duration-300 pointer-events-none"
                             :class="(hoveredId === {{ $item['id'] }} || lockedId === {{ $item['id'] }}) ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'">
                            
                            <div class="space-y-2">
                                <h3 class="text-xl font-bold text-white leading-snug">
                                    {{ $item['title'] }}
                                </h3>

                                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                                    {{ $item['description'] }}
                                </p>

                                <div class="pt-3 flex items-center justify-between text-[11px] text-blue-300 border-t border-blue-800/50">
                                    <span x-show="lockedId !== {{ $item['id'] }}">💡 Klik untuk mengunci info</span>
                                    <span x-show="lockedId === {{ $item['id'] }}" class="text-amber-300">✓ Keterangan terkunci</span>
                                    <span class="underline">Jahit Model Ini ➔</span>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- Alpine Script untuk Logika Mengunci Detail Galeri --}}
    <script>
        function galleryManager() {
            return {
                hoveredId: null,
                lockedId: null,

                toggleLock(id) {
                    // Jika item yang sama diklik lagi, lepas kuncinya
                    if (this.lockedId === id) {
                        this.lockedId = null;
                    } else {
                        // Kunci hanya item ini (otomatis melepas item lain, mencegah penumpukan animasi)
                        this.lockedId = id;
                    }
                }
            }
        }
    </script>
</x-public-layout>
