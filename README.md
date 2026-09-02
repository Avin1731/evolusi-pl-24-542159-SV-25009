# 🧵 Unknown Tailor & Bespoke — Web Company Profile

Aplikasi web profil usaha jahit dan busana kustom (*bespoke tailor*) berbasis **Laravel 11**, **TailwindCSS**, dan **Laravel Breeze**. Repositori ini dikembangkan sebagai pemenuhan tugas praktikum mata kuliah **Konstruksi dan Evolusi Perangkat Lunak**.

---

## 🌟 Fitur Utama Aplikasi

1. **Interactive Splash & Landing Screen**:
   - Fase animasi pembuka dinamis menggunakan CSS murni (GPU-accelerated).
   - Pemilihan jalur masuk: Pengunjung umum atau Administrator.
2. **Multi-Page Public Company Profile**:
   - **Beranda (`/p`)**: Informasi studio, statistik kepuasan, dan pilar keunggulan jahitan.
   - **Tentang Kami (`/p/about`)**: Sejarah dedikasi seni pola klasik dan visi-misi studio.
   - **Layanan & Estimasi (`/p/services`)**: Katalog jasa (Bespoke, Permak, Jas, Seragam) berserta alur 4 tahap pemesanan.
   - **Galeri Portofolio Interaktif (`/p/gallery`)**:
     - *Hover-to-reveal*: Arahkan kursor untuk melihat spesifikasi bahan dan potongan busana.
     - *Click-to-lock*: Mengunci kartu informasi agar tetap terbaca tanpa khawatir kursor bergeser.
     - *Single-lock active*: Mengklik area lain otomatis memulihkan tampilan ke kondisi awal tanpa penumpukan animasi.
   - **Kontak & Janji Temu (`/p/contact`)**: Alamat fisik studio di Sleman, tautan WhatsApp, dan simulasi formulir janji fitting.
3. **Arsitektur Rute Modular**:
   - Pemisahan rute menjadi `routes/public.php` dan `routes/admin.php` untuk meminimalkan potensi konflik merge antar branch kerja.

---

## 📌 Status Fitur & Roadmap Rilis

### ✅ Versi 1.0 (Rilis Saat Ini)
- [x] Layar Pembuka Interaktif (Interactive Splash Screen & Animasi CSS)
- [x] Halaman Profil Perusahaan Multi-page (Beranda, Tentang Kami, Layanan, Kontak)
- [x] Galeri Portofolio Dinamis (Interaksi Hover & Kunci Detail Foto Single-Lock)
- [x] Arsitektur Rute Modular (`public.php` & `admin.php`)
- [x] Otomasi Alur Kerja Git & GitHub Actions CI/CD (Linting & Testing Otomatis)

### 🔜 Rencana Versi Mendatang (v2.0)
- [ ] Integrasi Login Admin via Google OAuth (Socialite)
- [ ] Panel Dashboard Manajemen Konten (Admin CRUD)
- [ ] Unggah Media Gambar Dinamis ke Penyimpanan Cloud/Storage

---

## 🛠️ Tech Stack

- **Backend**: PHP 8.3+, Laravel 11.x
- **Frontend / Styling**: TailwindCSS, Alpine.js, Blade Component Architecture
- **Auth**: Laravel Breeze
- **Database**: MySQL (Laragon Local Environment)
- **Tooling**: Composer, PNPM, Vite, GitHub CLI (`gh`)

---

## 🚀 Panduan Menjalankan Proyek Secara Lokal

### 1. Kloning Repositori
```bash
git clone https://github.com/Avin1731/evolusi-pl-24-542159-SV-25009.git
cd evolusi-pl-24-542159-SV-25009
```

### 2. Instalasi Dependensi PHP & Node
```bash
composer install
pnpm install
```

### 3. Konfigurasi Lingkungan (.env)
Salin file konfigurasi lingkungan dan sesuaikan kredensial basis data Anda:
```bash
cp .env.example .env
php artisan key:generate
```

Pastikan konfigurasi database di `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=evolusi_pl
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Migrasi Database & Storage Link
```bash
php artisan migrate
php artisan storage:link
```

### 5. Kompilasi Aset & Jalankan Server
Jalankan compiler Vite dan development server Laravel:
```bash
pnpm run build
php artisan serve
```
Buka browser di `http://localhost:8000` atau `http://evolusi-pl-24-542159-sv-25009.test`.

---

## 🌿 Struktur Percabangan (Branching Model)

- `main` ➔ Branch rilis stabil (dilindungi Branch Protection).
- `dev` ➔ Branch utama integrasi pengembangan fitur.
- `feature/*` ➔ Branch pengerjaan fitur individual yang digabungkan ke `dev` melalui mekanisme Pull Request resmi.
- `refactor/*` ➔ Branch penyelarasan desain dan penyempurnaan kode.
