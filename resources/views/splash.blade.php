<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unknown — Lorem ipsum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /*
         * Animasi menggunakan CSS opacity + transform transition
         * agar smooth dan GPU-accelerated — tidak patah-patah.
         */
        .splash-layer {
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1),
                        transform 0.9s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* State: tersembunyi */
        .splash-hidden {
            opacity: 0;
            transform: translateY(16px);
            pointer-events: none;
        }

        /* State: terlihat */
        .splash-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Loader: hanya opacity (tidak ada translateY) */
        .loader-layer {
            transition: opacity 0.6s ease-in-out;
        }
        .loader-hidden { opacity: 0; pointer-events: none; }
        .loader-visible { opacity: 1; }
    </style>
</head>

<body class="overflow-hidden bg-blue-950">

<div
    class="relative min-h-screen flex flex-col items-center justify-center
           bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 px-6"
    x-data="splashScreen()"
    x-init="init()"
>
    {{-- ── Dekorasi latar belakang ── --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-700/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl"></div>
        <div class="absolute top-10 right-24 w-1.5 h-1.5 bg-blue-300/40 rounded-full"></div>
        <div class="absolute bottom-24 left-20 w-1 h-1 bg-blue-400/30 rounded-full"></div>
    </div>

    {{-- ── Loader (fase loading) ── --}}
    <div
        class="absolute inset-0 flex items-center justify-center loader-layer"
        :class="loading ? 'loader-visible' : 'loader-hidden'"
    >
        <x-splash.loader />
    </div>

    {{-- ── Konten utama: Logo + CTA ── --}}
    <div class="flex flex-col items-center gap-12 w-full max-w-sm">

        {{-- Logo --}}
        <div
            class="splash-layer"
            :class="showLogo ? 'splash-visible' : 'splash-hidden'"
        >
            <x-splash.logo />
        </div>

        {{-- CTA Buttons --}}
        <div
            class="splash-layer flex flex-row flex-wrap justify-center gap-4"
            :class="showCta ? 'splash-visible' : 'splash-hidden'"
        >
            <x-splash.cta-button href="{{ route('home') }}" variant="visitor">
                Masuk sebagai Pengunjung
            </x-splash.cta-button>

            <x-splash.cta-button href="{{ route('login') }}" variant="admin">
                Masuk sebagai Admin
            </x-splash.cta-button>
        </div>

        {{-- Footnote --}}
        <p
            class="splash-layer text-white/20 text-xs tracking-widest"
            :class="showCta ? 'splash-visible' : 'splash-hidden'"
        >
            &copy; {{ date('Y') }} Unknown. All rights reserved.
        </p>
    </div>

</div>

<script>
    function splashScreen() {
        return {
            loading: true,
            showLogo: false,
            showCta:  false,

            init() {
                // Loader fade out → logo muncul
                setTimeout(() => {
                    this.loading  = false
                    this.showLogo = true
                }, 1500)

                // CTA + footnote muncul
                setTimeout(() => {
                    this.showCta = true
                }, 2800)
            }
        }
    }
</script>

</body>
</html>
