<x-public-layout title="Layanan & Estimasi">
    <section class="bg-blue-950/60 border-b border-blue-900/40 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Pilihan Jasa</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-2 mb-4">Layanan Jahit Kami</h1>
            <p class="text-slate-300 max-w-xl mx-auto text-sm sm:text-base leading-relaxed">
                Dari permak cepat hingga pembuatan setelan jas formal eksklusif dengan pilihan bahan terbaik.
            </p>
        </div>
    </section>

    <section class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($services as $service)
                    <div class="p-8 rounded-2xl bg-slate-800/50 border border-slate-700/60 hover:border-blue-700/80 transition-all flex flex-col justify-between group hover:shadow-xl hover:shadow-blue-950/40">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-900/60 text-blue-300 border border-blue-800">
                                    Layanan #0{{ $service['id'] }}
                                </span>
                                <span class="text-sm font-bold text-amber-400">
                                    {{ $service['price'] }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-white group-hover:text-blue-300 transition-colors mb-3">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                {{ $service['description'] }}
                            </p>
                        </div>
                        <div class="pt-4 border-t border-slate-700/50 flex items-center justify-between">
                            <span class="text-xs text-slate-500">Estimasi pengerjaan: 3 - 7 Hari</span>
                            <a href="{{ route('contact') }}" class="text-xs font-semibold text-blue-400 hover:text-blue-300 flex items-center gap-1">
                                Pesan Layanan ➔
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Alur Pemesanan --}}
            <div class="mt-20 p-8 sm:p-12 rounded-2xl bg-gradient-to-r from-blue-950/60 via-slate-800/40 to-blue-950/60 border border-blue-900/60">
                <h3 class="text-xl font-bold text-white text-center mb-10">Tahapan Pembuatan Busana</h3>
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-6 text-center">
                    <div class="space-y-2">
                        <div class="w-10 h-10 mx-auto rounded-full bg-blue-800 text-white font-bold flex items-center justify-center text-sm">1</div>
                        <h4 class="text-white text-sm font-semibold">Konsultasi Desain</h4>
                        <p class="text-xs text-slate-400">Pilih model & bawa/pilih kain di studio.</p>
                    </div>
                    <div class="space-y-2">
                        <div class="w-10 h-10 mx-auto rounded-full bg-blue-800 text-white font-bold flex items-center justify-center text-sm">2</div>
                        <h4 class="text-white text-sm font-semibold">Pengukuran Tubuh</h4>
                        <p class="text-xs text-slate-400">Pengukuran akurat 15 titik tubuh.</p>
                    </div>
                    <div class="space-y-2">
                        <div class="w-10 h-10 mx-auto rounded-full bg-blue-800 text-white font-bold flex items-center justify-center text-sm">3</div>
                        <h4 class="text-white text-sm font-semibold">Fitting Pertama</h4>
                        <p class="text-xs text-slate-400">Mencoba pakaian setengah jadi.</p>
                    </div>
                    <div class="space-y-2">
                        <div class="w-10 h-10 mx-auto rounded-full bg-blue-800 text-white font-bold flex items-center justify-center text-sm">4</div>
                        <h4 class="text-white text-sm font-semibold">Finishing & Serah Terima</h4>
                        <p class="text-xs text-slate-400">Penyempurnaan akhir dan siap pakai.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
