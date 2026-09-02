<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    /**
     * Halaman Beranda / Home
     */
    public function index()
    {
        return view('public.home');
    }

    /**
     * Halaman Tentang Kami (About)
     */
    public function about()
    {
        return view('public.about');
    }

    /**
     * Halaman Layanan (Services)
     */
    public function services()
    {
        // Data dummy sementara (nanti dihubungkan ke DB saat panel admin dibuat)
        $services = [
            [
                'id' => 1,
                'title' => 'Jahit Busana Kustom (Bespoke)',
                'description' => 'Pembuatan pakaian pria dan wanita sesuai ukuran presisi tubuh, dari pola dasar hingga pemilihan bahan premium.',
                'icon' => 'scissors',
                'price' => 'Mulai Rp 250.000',
            ],
            [
                'id' => 2,
                'title' => 'Permak & Restorasi Pakaian',
                'description' => 'Penyesuaian lingkar pinggang, panjang celana, pergantian resleting, hingga perbaikan kain tanpa merusak estetika asli.',
                'icon' => 'sparkles',
                'price' => 'Mulai Rp 35.000',
            ],
            [
                'id' => 3,
                'title' => 'Pembuatan Jas & Gaun Formal',
                'description' => 'Pengerjaan setelan jas formal, kebaya pesta, dan gaun dengan detail furing ganda serta jahitan tangan halus.',
                'icon' => 'check-badge',
                'price' => 'Mulai Rp 750.000',
            ],
            [
                'id' => 4,
                'title' => 'Seragam Organisasi & Korporat',
                'description' => 'Produksi partai kecil dan menengah untuk seragam kerja kantor, komunitas, dan organisasi dengan finishing rapi.',
                'icon' => 'user-group',
                'price' => 'Mulai Rp 120.000/pcs',
            ],
        ];

        return view('public.services', compact('services'));
    }

    /**
     * Halaman Galeri Karya (Gallery dengan interaksi hover & click-lock)
     */
    public function gallery()
    {
        // Data dummy foto karya penjahit
        $galleries = [
            [
                'id' => 1,
                'title' => 'Kemeja Katun Tenun Formal',
                'category' => 'Pakaian Pria',
                'description' => 'Kemeja lengan panjang dengan potongan slim fit dan kerah kaku modern. Menggunakan benang katun rangkap dua.',
                'image_url' => 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=700&auto=format&fit=crop&q=80',
            ],
            [
                'id' => 2,
                'title' => 'Gaun Pesta Sutra Modern',
                'category' => 'Pakaian Wanita',
                'description' => 'Gaun pesta bahan sutra kombinasi brokat premium dengan teknik draping halus di bagian pinggang.',
                'image_url' => 'https://images.unsplash.com/photo-1566174053879-31528523f8ae?w=700&auto=format&fit=crop&q=80',
            ],
            [
                'id' => 3,
                'title' => 'Setelan Jas Hitam 2-Piece',
                'category' => 'Formal Wear',
                'description' => 'Jas tuksedo wol wol Italia dengan lapel satin mengkilap, dibuat dengan teknik full canvas tradisional.',
                'image_url' => 'https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=700&auto=format&fit=crop&q=80',
            ],
            [
                'id' => 4,
                'title' => 'Blazer Kasual Semi-Formal',
                'category' => 'Outerwear',
                'description' => 'Blazer ringan tanpa bantalan bahu kaku, cocok untuk paduan santai maupun acara kantor kasual.',
                'image_url' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=700&auto=format&fit=crop&q=80',
            ],
            [
                'id' => 5,
                'title' => 'Batik Tulis Eksklusif Lining',
                'category' => 'Kain Tradisional',
                'description' => 'Penyesuaian motif batik tulis simetris di saku depan dan belahan samping dengan furing katun adem.',
                'image_url' => 'https://images.unsplash.com/photo-1598033129183-c4f50c736f10?w=700&auto=format&fit=crop&q=80',
            ],
            [
                'id' => 6,
                'title' => 'Celana Chino Custom Fit',
                'category' => 'Bawahan',
                'description' => 'Celana chino katun twill stretch dengan jahitan bar-tack di titik tumpuan saku untuk ketahanan maksimal.',
                'image_url' => 'https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?w=700&auto=format&fit=crop&q=80',
            ],
        ];

        return view('public.gallery', compact('galleries'));
    }

    /**
     * Halaman Kontak (Contact)
     */
    public function contact()
    {
        return view('public.contact');
    }
}
