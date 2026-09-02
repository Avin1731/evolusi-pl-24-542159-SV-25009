<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Beranda' }} — Unknown Tailor & Bespoke</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col antialiased selection:bg-blue-600 selection:text-white">

    {{-- Navigasi Atas --}}
    <x-public.navbar />

    {{-- Konten Dinamis Halaman --}}
    <main class="flex-grow">
        {{ $slot }}
    </main>

    {{-- Footer Bawah --}}
    <x-public.footer />

</body>
</html>
