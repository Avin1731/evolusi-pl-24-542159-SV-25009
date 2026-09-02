<x-public-layout title="Tentang Kami">
    {{-- Page Header --}}
    <section class="bg-blue-950/60 border-b border-blue-900/40 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Profil Studio</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-2 mb-4">Tentang Unknown Tailor</h1>
            <p class="text-slate-300 max-w-xl mx-auto text-sm sm:text-base leading-relaxed">
                Kisah dedikasi dalam seni menjahit pakaian berkualitas, presisi ukuran, dan kenyamanan pemakainya.
            </p>
        </div>
    </section>

    {{-- Story & Vision Section --}}
    <section class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 relative">
                    <div class="rounded-2xl overflow-hidden border border-slate-700 shadow-2xl shadow-blue-950/60">
                        <img src="https://images.unsplash.com/photo-1598033129183-c4f50c736f10?w=800&auto=format&fit=crop&q=80" 
                             alt="Proses Menjahit" 
                             class="w-full h-[460px] object-cover">
                    </div>
                </div>

                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Cerita Kami</span>
                    <h2 class="text-3xl font-bold text-white leading-tight">
                        Berawal dari Cinta pada Ketelitian dan Pola Kain Klasik
                    </h2>
                    
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        Unknown Tailor didirikan berlandaskan keyakinan bahwa pakaian terbaik bukanlah pakaian yang paling mahal, melainkan pakaian yang paling pas dengan postur tubuh pemakainya.
                    </p>

                    <p class="text-slate-400 text-sm leading-relaxed">
                        Kami mengombinasikan teknik penjahitan pola tradisional yang teliti dengan pilihan material modern. Setiap pelanggan mendapatkan pengukuran mendalam yang mencakup lebih dari 15 titik tubuh, memastikan setiap helai baju melekat sempurna tanpa lipatan berlebih.
                    </p>

                    <div class="grid grid-cols-2 gap-6 pt-4 border-t border-slate-800">
                        <div>
                            <h4 class="text-white font-semibold text-base mb-1">Visi Kami</h4>
                            <p class="text-xs text-slate-400 leading-relaxed">
                                Menjadi studio jahit tepercaya yang mengangkat standar estetika busana kustom lokal ke tingkat yang elegan dan presisi.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-base mb-1">Misi Kami</h4>
                            <p class="text-xs text-slate-400 leading-relaxed">
                                Memberikan pelayanan ramah, transparansi bahan, ketepatan waktu, dan garansi pas tanpa kompromi.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-public-layout>
