<x-public-layout title="Kontak & Lokasi">
    <section class="bg-blue-950/60 border-b border-blue-900/40 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Hubungi Kami</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mt-2 mb-4">Konsultasi & Kunjungan Studio</h1>
            <p class="text-slate-300 max-w-xl mx-auto text-sm sm:text-base leading-relaxed">
                Punya rancangan pakaian sendiri atau butuh pengukuran langsung? Silakan hubungi kami atau kunjungi studio kami.
            </p>
        </div>
    </section>

    <section class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                {{-- Detail Kontak & Informasi --}}
                <div class="lg:col-span-5 space-y-8">
                    <div class="p-8 rounded-2xl bg-slate-800/50 border border-slate-700/60 space-y-6">
                        <h3 class="text-xl font-bold text-white mb-4">Informasi Studio Unknown</h3>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-900/60 border border-blue-700/60 flex items-center justify-center text-blue-300 text-lg shrink-0">
                                📍
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-white">Alamat Workshop</h4>
                                <p class="text-xs text-slate-400 mt-1 leading-relaxed">
                                    Jl. Kaliurang KM 5, Gang Pandega Marta No. 12, Sleman, Daerah Istimewa Yogyakarta 55281
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-900/60 border border-blue-700/60 flex items-center justify-center text-blue-300 text-lg shrink-0">
                                💬
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-white">WhatsApp & Telepon</h4>
                                <p class="text-xs text-slate-400 mt-1 leading-relaxed">
                                    +62 812-3456-7890 (Layanan Cepat Respon)
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-900/60 border border-blue-700/60 flex items-center justify-center text-blue-300 text-lg shrink-0">
                                ✉️
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-white">Email Resmi</h4>
                                <p class="text-xs text-slate-400 mt-1 leading-relaxed">
                                    halo@unknown-tailor.test
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-blue-950/40 border border-blue-900/50 flex items-center gap-4">
                        <div class="text-2xl">💡</div>
                        <p class="text-xs text-blue-300 leading-relaxed">
                            <strong>Tips Fitting:</strong> Untuk hasil fitting terbaik, disarankan mengenakan pakaian dalam atau kaus yang paling sering Anda gunakan sehari-hari saat pengukuran.
                        </p>
                    </div>
                </div>

                {{-- Formulir Kirim Pesan --}}
                <div class="lg:col-span-7">
                    <div class="p-8 sm:p-10 rounded-2xl bg-slate-800/50 border border-slate-700/60">
                        <h3 class="text-xl font-bold text-white mb-2">Kirim Pesan atau Janji Temu</h3>
                        <p class="text-xs text-slate-400 mb-8">Isi formulir berikut, kami akan merespons dalam waktu 1x24 jam kerja.</p>

                        <form action="#" method="POST" class="space-y-6" onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah diterima (Simulasi).');">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Nama Lengkap</label>
                                    <input type="text" required placeholder="Contoh: Budi Santoso" 
                                           class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Nomor WhatsApp</label>
                                    <input type="tel" required placeholder="08xxxxxxxxxx" 
                                           class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Jenis Layanan yang Diinginkan</label>
                                <select class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                    <option>Jahit Busana Kustom (Bespoke)</option>
                                    <option>Permak & Restorasi Pakaian</option>
                                    <option>Pembuatan Jas / Gaun Formal</option>
                                    <option>Seragam Komunitas / Kantor</option>
                                    <option>Lainnya / Konsultasi Dulu</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Catatan Tambahan / Model Pakaian</label>
                                <textarea rows="4" placeholder="Tuliskan detail permintaan atau jadwal rencana fitting..." 
                                          class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500"></textarea>
                            </div>

                            <button type="submit" 
                                    class="w-full py-4 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm tracking-wider uppercase transition-all shadow-lg shadow-blue-600/30">
                                Kirim Formulir Konsultasi ➔
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-public-layout>
