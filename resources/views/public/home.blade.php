<x-public-layout title="Beranda">
    {{-- Hero Banner Section --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-blue-950 via-slate-900 to-slate-900 py-24 sm:py-32">
        <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden opacity-30">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[500px] bg-blue-600/20 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-900/60 border border-blue-700/60 text-xs font-semibold uppercase tracking-wider text-blue-300">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        Studio Jahit & Seni Busana Pria/Wanita
                    </div>

                    <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight">
                        Kerapian Sempurna di <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-300">Setiap Jahitan</span>
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Pakaian bukan sekadar penutup tubuh, melainkan cerminan karakter dan kenyamanan personal Anda. Kami hadir menyempurnakan setiap potong kain menjadi karya busana idaman dengan ukuran yang presisi.
                    </p>

                    <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="{{ route('gallery') }}" 
                           class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-blue-600 hover:bg-blue-500 text-white font-semibold text-sm shadow-lg shadow-blue-600/30 transition-all hover:scale-105 text-center">
                            Jelajahi Galeri Karya ➔
                        </a>
                        <a href="{{ route('services') }}" 
                           class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-slate-800/80 hover:bg-slate-700 text-slate-200 border border-slate-700 font-semibold text-sm transition-all text-center">
                            Lihat Daftar Layanan
                        </a>
                    </div>

                    {{-- Mini Stats --}}
                    <div class="pt-10 grid grid-cols-3 gap-4 border-t border-slate-800 text-center lg:text-left">
                        <div>
                            <div class="text-2xl sm:text-3xl font-bold text-white">100%</div>
                            <div class="text-xs text-slate-400 mt-1">Ukuran Presisi Tubuh</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-bold text-white">500+</div>
                            <div class="text-xs text-slate-400 mt-1">Busana Diproduksi</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-bold text-white">4.9/5</div>
                            <div class="text-xs text-slate-400 mt-1">Kepuasan Pelanggan</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md rounded-2xl overflow-hidden border-2 border-blue-800/50 shadow-2xl shadow-blue-950/80">
                        <img src="https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=800&auto=format&fit=crop&q=80" 
                             alt="Atelier Tailor" 
                             class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-950/90 via-transparent to-transparent flex items-end p-6">
                            <div class="text-white">
                                <span class="text-xs uppercase tracking-widest text-blue-300 font-semibold">Unknown</span>
                                <h3 class="text-lg font-bold">Jahit & Busana Kustom</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Highlight Features --}}
    <section class="py-20 bg-slate-900 border-t border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Keunggulan Kami</span>
                <h2 class="text-3xl font-bold text-white">Mengapa Memilih Jahitan Unknown?</h2>
                <p class="text-sm text-slate-400 leading-relaxed">Ketelitian dan dedikasi pada setiap tusukan jarum untuk memastikan pakaian Anda pas dan nyaman dipakai seharian.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-2xl bg-slate-800/40 border border-slate-700/50 hover:border-blue-700/60 transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-blue-900/60 border border-blue-700/60 flex items-center justify-center text-blue-300 text-xl mb-6">
                        📏
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Pola Custom Fit</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Kami tidak menggunakan ukuran konveksi standar. Pola digambar khusus menyesuaikan anatomi bahu, dada, dan pinggul Anda.
                    </p>
                </div>

                <div class="p-8 rounded-2xl bg-slate-800/40 border border-slate-700/50 hover:border-blue-700/60 transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-blue-900/60 border border-blue-700/60 flex items-center justify-center text-blue-300 text-xl mb-6">
                        🧵
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Bahan & Benang Premium</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Pilihan kain katun, wol, sutra, dan furing yang lembut, tidak panas di kulit, serta menggunakan benang ganda yang kuat.
                    </p>
                </div>

                <div class="p-8 rounded-2xl bg-slate-800/40 border border-slate-700/50 hover:border-blue-700/60 transition-all hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-blue-900/60 border border-blue-700/60 flex items-center justify-center text-blue-300 text-xl mb-6">
                        🔄
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Garansi Fitting Gratis</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Jika pakaian belum terasa pas saat fitting pertama, kami melakukan penyesuaian ulang tanpa biaya tambahan.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
