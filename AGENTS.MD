# AGENTS.md — Instruksi Kerja AI Agent

Dokumen ini adalah instruksi operasional untuk AI coding agent (Claude Code, Cursor, Windsurf, dll) yang mengerjakan project **Company Profile Karang Taruna 13 Rawa Buaya**. Baca `PRD.md` dulu untuk requirement lengkap sebelum membaca file ini.

---

## 1. Identitas Project

- **Nama project**: `karang-taruna-13-rawabuaya`
- **Stack**: Laravel 11.x + Blade + Tailwind CSS v3 + Alpine.js
- **Tipe**: Landing page company profile, multi-route, data statis (tidak ada database untuk konten utama)

---

## 2. Aturan Wajib Sebelum Mulai Coding

1. **Selalu baca `PRD.md` dan `PROMPT_FLOW.md` di root project** sebelum mengeksekusi task apapun. Jangan asumsikan requirement — semua sudah didefinisikan di sana.
2. **Kerjakan secara bertahap (fase), jangan loncat ke "build semua sekaligus"**. Urutan fase ada di `PROMPT_FLOW.md`. Setiap fase harus selesai dan dikonfirmasi sebelum lanjut ke fase berikutnya.
3. **Selalu jalankan `php artisan serve` atau cek hasil build setelah perubahan signifikan** untuk memastikan tidak ada error sebelum melapor "selesai".
4. **Jangan install package di luar yang disebutkan di stack** (Laravel, Tailwind, Alpine.js) tanpa alasan kuat dan tanpa menyebutkannya secara eksplisit ke user dulu.

---

## 3. Struktur Folder yang Diharapkan

```
karang-taruna-13-rawabuaya/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── AboutController.php
│   │   ├── ActivityController.php
│   │   ├── ProgramController.php
│   │   ├── GalleryController.php
│   │   ├── OrganizationController.php
│   │   └── ContactController.php
│   └── Data/                          <- PHP class/array untuk data statis (BUKAN model DB)
│       ├── ActivityData.php
│       ├── ProgramData.php
│       ├── GalleryData.php
│       └── OrganizationData.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php          <- master layout (navbar+footer)
│   │   ├── partials/
│   │   │   ├── navbar.blade.php
│   │   │   └── footer.blade.php
│   │   ├── home.blade.php
│   │   ├── about.blade.php
│   │   ├── activities.blade.php
│   │   ├── programs.blade.php
│   │   ├── gallery.blade.php
│   │   ├── organization.blade.php
│   │   └── contact.blade.php
│   └── css/
│       └── app.css                    <- tailwind directives + custom CSS variable brand
├── public/
│   └── images/
│       ├── logo/                      <- logo asset (placeholder jika belum ada file asli)
│       └── gallery/                   <- foto galeri (placeholder)
├── routes/
│   └── web.php
└── tailwind.config.js                 <- extend warna brand di sini
```

---

## 4. Konvensi Kode

### 4.1 Laravel/PHP
- Gunakan **Controller method per halaman** (bukan closure di `web.php`) — supaya rapi dan mudah di-extend ke database di v2.
- Naming route: `kebab-case` untuk URL (`/struktur-organisasi`), `camelCase` untuk route `name()` (misal `route('organization.index')`).
- Data statis WAJIB ditaruh di `app/Data/*.php` sebagai PHP array atau class dengan static method, **bukan** langsung di dalam Blade. Contoh pola:

```php
// app/Data/ActivityData.php
class ActivityData
{
    public static function all(): array
    {
        return [
            [
                'title' => 'Kerja Bakti Lingkungan',
                'category' => 'Lingkungan',
                'date' => '2025-01-15',
                'excerpt' => 'Contoh teks — ganti dengan data asli.',
                'image' => '/images/gallery/placeholder-1.jpg',
            ],
            // ...
        ];
    }
}
```

- Controller memanggil `ActivityData::all()` dan pass ke view via `compact()`.

### 4.2 Blade
- Semua halaman **extend** `layouts.app` (jangan duplikasi `<html>`, `<head>`, navbar, footer di tiap halaman).
- Gunakan `@section` / `@yield` atau Blade Components (`<x-layouts.app>`) — pilih salah satu pola dan konsisten di semua halaman.
- Beri komentar Blade `{{-- TODO: ganti dengan data asli --}}` di setiap bagian yang masih placeholder/dummy.

### 4.3 Tailwind
- **JANGAN pakai warna Tailwind default untuk brand color** (`bg-orange-500`, dll). Extend `tailwind.config.js` dengan nama semantik:

```js
// tailwind.config.js
theme: {
  extend: {
    colors: {
      'brand-black': '#282829',
      'brand-white': '#FFFFFF',
      'brand-amber': '#F9B41A',
    },
    fontFamily: {
      sans: ['Montserrat', 'sans-serif'],
    },
  },
}
```

- Pakai `bg-brand-amber`, `text-brand-black`, dll secara konsisten.
- Mobile-first: tulis utility class default untuk mobile, lalu override dengan `md:` `lg:` untuk desktop.

### 4.4 Alpine.js
- Inisialisasi state dengan `x-data` di komponen terkecil yang relevan (jangan taruh semua state global di `<body>`).
- Pola untuk mobile nav: `x-data="{ open: false }"` di `<nav>`, toggle via `@click="open = !open"`.
- Pola untuk filter kegiatan/galeri: `x-data="{ activeFilter: 'all' }"`, lalu `x-show` per item card.

---

## 5. Larangan (Do NOT)

- ❌ JANGAN membuat migration atau model Eloquent untuk konten utama (kegiatan, proker, galeri, struktur) — ini bertentangan dengan keputusan "statis dulu" di PRD.
- ❌ JANGAN menambahkan sistem login/auth — tidak ada di scope v1.
- ❌ JANGAN reproduksi ulang gambar/teks dari PDF brand guideline secara verbatim sebagai konten hukum/legal — boleh diparafrase ulang dengan makna yang sama untuk section "Filosofi Logo" (lihat detail makna di PRD §3.2).
- ❌ JANGAN pakai CDN/library berat (Bootstrap, jQuery, dll) — stack sudah ditentukan Tailwind + Alpine.js saja.
- ❌ JANGAN bikin satu file Blade raksasa berisi semua halaman (single-page-scroll) — keputusan sudah multi-route, lihat PRD §6.
- ❌ JANGAN lupa `loading="lazy"` di gambar galeri/kegiatan untuk performa.

---

## 6. Checklist Sebelum Melapor "Selesai" ke User

Setiap kali menyelesaikan satu fase/halaman, AI agent harus mengecek:

- [ ] Halaman bisa diakses tanpa error 500/404 di route yang benar.
- [ ] Tidak ada error di console browser (cek devtools jika tool browsing tersedia, atau minta user cek).
- [ ] Responsive — minimal cek dengan asumsi breakpoint mobile (375px) dan desktop (1280px).
- [ ] Warna dan font sesuai brand guideline (§4.3 di PRD).
- [ ] Semua placeholder data diberi komentar/marker jelas.
- [ ] `npm run build` sukses tanpa error sebelum dianggap "production ready".

---

## 7. Cara Agent Melapor Progress

Setiap akhir fase, agent WAJIB melaporkan dalam format singkat:

```
✅ Selesai: [nama fase/halaman]
File yang dibuat/diubah: [list file]
Cara test: [perintah/langkah untuk user verifikasi]
Catatan/placeholder yang perlu diganti user: [list]
Lanjut ke fase berikutnya? (tunggu konfirmasi user)
```

Jangan lanjut otomatis ke fase berikutnya tanpa konfirmasi, KECUALI user secara eksplisit bilang "lanjut semua tanpa berhenti" di awal.