<footer class="bg-blue-950 border-t border-blue-900/60 text-blue-300/80 pt-16 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
            
            {{-- Col 1: Brand Info --}}
            <div class="md:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-900 border border-blue-700 flex items-center justify-center text-white font-bold">
                        UN
                    </div>
                    <span class="text-2xl font-bold text-white tracking-wider">Unknown</span>
                </div>
                <p class="text-sm leading-relaxed text-blue-300/70 max-w-sm">
                    Studio jahit busana kustom dan permak pakaian berdedikasi tinggi. Menggabungkan ketelitian pola klasik dengan siluet modern untuk kenyamanan dan kepercayaan diri Anda.
                </p>
                <div class="pt-2 flex items-center gap-3 text-xs text-blue-400">
                    <span class="px-2.5 py-1 rounded bg-blue-900/50 border border-blue-800/60">✂️ Presisi Ukuran</span>
                    <span class="px-2.5 py-1 rounded bg-blue-900/50 border border-blue-800/60">🧵 Bahan Pilihan</span>
                </div>
            </div>

            {{-- Col 2: Navigasi Cepat --}}
            <div>
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Navigasi Halaman</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Tentang Kami</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Layanan & Harga</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-white transition-colors">Galeri Karya</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Kontak & Lokasi</a></li>
                </ul>
            </div>

            {{-- Col 3: Jam Operasional & Kontak --}}
            <div>
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Waktu Operasional</h4>
                <div class="space-y-2 text-sm">
                    <p class="text-white">Senin - Sabtu: <span class="text-blue-300">08.30 - 18.00 WIB</span></p>
                    <p class="text-white">Minggu: <span class="text-amber-300">Dengan Perjanjian</span></p>
                    <div class="pt-4">
                        <p class="text-xs text-blue-400">Alamat Studio:</p>
                        <p class="text-sm text-blue-200">Jl. Kaliurang KM 5, Sleman, D.I. Yogyakarta</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="pt-8 border-t border-blue-900/40 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-blue-400/60">
            <p>&copy; {{ date('Y') }} Unknown Tailor & Bespoke. Hak Cipta Dilindungi.</p>
            <p>Dibangun untuk Praktikum Konstruksi & Evolusi Perangkat Lunak</p>
        </div>
    </div>
</footer>
