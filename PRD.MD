# PRD — Company Profile Karang Taruna 13 Rawa Buaya

**Versi:** 1.0
**Tipe produk:** Landing page company profile (single Laravel app, multi-section/page)
**Status:** Draft untuk eksekusi AI Agent

---

## 1. Latar Belakang & Tujuan

Karang Taruna RT 13 Rawa Buaya sudah memiliki identitas visual (logo, warna, font) yang dirancang dengan makna filosofis kuat (bunga teratai = kejernihan hati & pikiran, warna lebah = kerja kolektif, 6 kelopak = 6 gang di RT 13, tali melingkar = kebersamaan & soliditas). Saat ini organisasi belum punya representasi digital.

**Tujuan produk:**
1. Memberi Karang Taruna 13 sebuah website company profile yang profesional, mencerminkan identitas visual yang sudah ada.
2. Menjadi media informasi publik tentang siapa organisasi ini, kegiatan apa yang sudah/sedang berjalan, dan program kerja yang direncanakan.
3. Memudahkan warga/pihak luar (RW, kelurahan, sponsor, calon anggota) memahami struktur dan cara menghubungi organisasi.

**Yang BUKAN tujuan v1 ini:**
- Bukan sistem keanggotaan/login member.
- Bukan e-commerce/donasi online.
- Bukan CMS dinamis (admin panel) — itu masuk roadmap v2.

---

## 2. Target Pengguna

| Persona | Kebutuhan |
|---|---|
| Warga RT 13 / RW setempat | Cari info kegiatan terbaru, kontak pengurus |
| Pengurus RW/Kelurahan | Verifikasi keberadaan & legitimasi organisasi, lihat proker |
| Calon anggota muda (remaja/pemuda RT 13) | Tertarik gabung, lihat kegiatan seperti apa |
| Sponsor/donatur potensial | Lihat track record kegiatan, struktur organisasi yang jelas |

---

## 3. Scope Halaman

Landing page **satu domain**, dengan navigasi ke 7 section/halaman berikut. Bisa diimplementasikan sebagai **single-page scroll dengan anchor** ATAU **multi-route Laravel** (lihat keputusan teknis di §6) — direkomendasikan **multi-route** agar SEO lebih baik dan tiap halaman punya URL sendiri (`/`, `/tentang`, `/kegiatan`, `/proker`, `/galeri`, `/struktur-organisasi`, `/kontak`).

### 3.1 Home (`/`)
**Tujuan:** First impression — branding kuat, ringkasan, CTA ke halaman lain.

Komponen:
- **Hero section**: Logo besar, nama "Karang Taruna 13 Rawa Buaya", tagline singkat (boleh diambil dari makna teratai: "Kejernihan Hati, Kekuatan Bersama" atau sejenis — beri 2-3 opsi tagline), background dengan aksen warna oranye amber/hitam.
- **Sekilas Tentang** (ringkasan 2-3 kalimat dari halaman Tentang + tombol "Selengkapnya").
- **Highlight Kegiatan Terbaru** (3-4 card kegiatan terbaru, link ke halaman Kegiatan).
- **Highlight Program Kerja** (ringkas, 3-4 poin proker utama, link ke halaman Proker).
- **Preview Galeri** (grid 6-8 foto kecil, link ke halaman Galeri penuh).
- **Statistik singkat** (opsional tapi disarankan): jumlah anggota, jumlah kegiatan tahun ini, jumlah gang/wilayah (6, sesuai makna logo), tahun berdiri.
- **CTA Kontak/Gabung** sebelum footer.

### 3.2 Tentang Kami (`/tentang`)
**Tujuan:** Jelaskan identitas, sejarah, visi-misi, dan FILOSOFI LOGO (nilai jual konten unik dari PDF yang diupload).

Komponen:
- **Sejarah singkat** organisasi (placeholder teks yang user isi sendiri nanti).
- **Visi & Misi** (placeholder, format list yang jelas).
- **Filosofi Logo** — section khusus, WAJIB ada, isinya:
  - Makna bunga teratai (kejernihan hati & pikiran)
  - Makna warna oranye+hitam (warna lebah, kehidupan berkelompok)
  - Makna 6 kelopak (6 gang di pemukiman RT 13)
  - Makna kata "Trayodasa" (Sanskerta = 13, nomor RT)
  - Makna untaian tali melingkar (keutuhan & kebersamaan)
  - Tampilkan logo besar di sini sebagai sentral visual.
- **Nilai-nilai organisasi** (3-4 value card, misal: Kebersamaan, Kejernihan, Soliditas, Kerja Keras — diturunkan dari filosofi logo).

### 3.3 Kegiatan (`/kegiatan`)
**Tujuan:** Showcase kegiatan yang sudah dilaksanakan (dokumentasi).

Komponen:
- Grid/list card kegiatan, tiap card: judul kegiatan, tanggal, 1 foto thumbnail, deskripsi singkat (2 baris), link "Lihat detail" (boleh modal Alpine.js, tidak perlu halaman detail terpisah di v1).
- Filter sederhana by kategori (misal: Sosial, Olahraga, Keagamaan, Lingkungan) — pakai Alpine.js client-side filter (data statis, tidak perlu backend filter).
- Minimal sediakan 6 data dummy/contoh kegiatan yang user nanti ganti dengan data asli.

### 3.4 Program Kerja / Proker (`/proker`)
**Tujuan:** Tampilkan rencana kerja terstruktur, biasanya per divisi/bidang.

Komponen:
- Dikelompokkan per **Bidang** (umumnya Karang Taruna punya bidang seperti: Bidang Keagamaan, Bidang Olahraga & Seni, Bidang Sosial & Lingkungan, Bidang Pendidikan & Pelatihan, Bidang Ekonomi/Usaha) — user nanti sesuaikan nama bidang aslinya.
- Tiap bidang: card/accordion berisi list proker (nama proker, target waktu, status: Direncanakan/Berjalan/Selesai — pakai badge warna).
- Gunakan Alpine.js untuk accordion expand/collapse per bidang.

### 3.5 Galeri (`/galeri`)
**Tujuan:** Dokumentasi visual kegiatan dalam format gallery.

Komponen:
- Grid foto (masonry atau grid rapi 3-4 kolom desktop, 2 kolom mobile).
- Lightbox sederhana pakai Alpine.js (klik foto → modal fullscreen, bisa next/prev).
- Filter kategori (opsional, sama seperti kegiatan) jika diperlukan — bisa reuse data dari kegiatan.

### 3.6 Struktur Organisasi (`/struktur-organisasi`)
**Tujuan:** Transparansi kepengurusan.

Komponen:
- Diagram/chart struktur organisasi (Ketua → Wakil Ketua → Sekretaris/Bendahara → Koordinator Bidang) — bisa pakai layout CSS grid/flex sederhana berbentuk hierarki, TIDAK perlu library diagram berat.
- Tiap posisi: foto (placeholder avatar jika belum ada foto asli), nama, jabatan.
- Sediakan struktur dummy 7-10 posisi sebagai contoh yang user nanti edit.

### 3.7 Kontak (`/kontak`)
**Tujuan:** Memudahkan orang menghubungi organisasi.

Komponen:
- Alamat sekretariat (placeholder).
- Nomor telepon/WhatsApp (dengan link `wa.me`).
- Email.
- Media sosial (Instagram, dll — icon links).
- Google Maps embed (iframe statis, placeholder lokasi).
- Form kontak sederhana (UI saja di v1, action bisa `mailto:` atau dummy submit — TIDAK perlu backend mail processing kompleks di v1; catat sebagai "Future Enhancement" jika user mau backend form processing).

---

## 4. Design System (diturunkan dari Brand Guideline PDF)

### 4.1 Warna
| Nama | HEX | RGB | Penggunaan |
|---|---|---|---|
| Black | `#282829` | 40, 40, 41 | Teks utama, background gelap, navbar/footer |
| White | `#FFFFFF` | 254, 254, 254 | Background terang, teks di atas dark bg |
| Orange Amber | `#F9B41A` | 248, 180, 26 | Aksen, CTA button, highlight, hover state |

Tambahan warna pendukung (boleh derive otomatis via Tailwind shade generator dari amber di atas) untuk kebutuhan UI (border halus, background section abu-abu muda, dll) — gunakan `gray-50` s/d `gray-200` Tailwind default untuk netral pendukung, JANGAN tambah warna brand baru di luar 3 warna ini.

### 4.2 Tipografi
- **Font utama:** Montserrat (SemiBold untuk heading, Regular/Medium untuk body) — load via Google Fonts.
- Heading: Montserrat SemiBold/Bold.
- Body text: Montserrat Regular.

### 4.3 Elemen Visual Khas (dari brand asset)
- **Logo**: bentuk lingkar (seal/badge style) dengan teratai oranye-hitam di tengah, dikelilingi untaian tali (rope pattern) dan teks melingkar "KARANG TARUNA 13" + "RAWA BUAYA".
- **Motif tali melingkar**: bisa dipakai ulang sebagai elemen dekoratif border/divider di section tertentu (opsional, jangan berlebihan).
- **Aksen geometris diagonal hitam-oranye-putih** (terlihat di mockup letterhead) — bisa diadaptasi jadi shape dekoratif di hero section atau section divider.

### 4.4 Aset yang tersedia
File PDF berisi: logo final (badge bulat), color palette, contoh mockup di t-shirt, lanyard+ID card, dan kop surat. **Catatan penting untuk Agent**: PDF ini hanya referensi visual/brand guideline — bukan source file logo dalam format vector (svg/png/ai). User PERLU menyediakan file logo terpisah (PNG transparan/SVG) sebagai asset nyata yang dipakai di kode. Jika belum ada, gunakan placeholder logo (lingkaran dengan teks "LOGO" atau text-based logo sementara) dan beri catatan TODO di kode untuk ganti asset asli.

---

## 5. Non-Functional Requirements

- **Responsive**: mobile-first, breakpoint Tailwind standar (sm/md/lg/xl). Mayoritas pengunjung diasumsikan akses dari HP.
- **Performance**: gunakan lazy-load untuk gambar galeri (`loading="lazy"`), minify asset via Vite build.
- **Accessibility dasar**: alt text di semua gambar, kontras warna aman (oranye amber di atas hitam/putih sudah cukup kontras, hindari teks oranye di atas putih untuk body text panjang karena kontras kurang — gunakan oranye hanya untuk aksen/CTA).
- **SEO dasar**: tiap halaman punya `<title>` dan meta description unik, gunakan semantic HTML (`<header>`, `<main>`, `<section>`, `<footer>`).
- **Browser support**: modern evergreen browsers (Chrome, Firefox, Safari, Edge terbaru).

---

## 6. Keputusan Teknis (Tech Stack)

| Aspek | Keputusan |
|---|---|
| Backend framework | Laravel (versi 11.x terbaru stable) |
| Templating | Blade |
| CSS framework | Tailwind CSS (v3.x, via Vite) |
| Interaktivitas | Alpine.js (filter, accordion, modal/lightbox, mobile nav toggle) |
| Data source | **Statis** — hardcode di Blade view atau PHP array/config file (lihat §6.1) |
| Routing | Multi-route (bukan single-page scroll) — tiap section = halaman Laravel sendiri dengan route name jelas |
| Asset build | Vite (default Laravel) |
| Database | TIDAK dipakai di v1 (tidak perlu migration/model untuk konten utama) |

### 6.1 Strategi Data Statis
Karena dipilih "statis dulu, cepat jadi", **JANGAN hardcode array data langsung di dalam file Blade** (sulit dipelihara). Sebagai gantinya:
- Buat file `config/content.php` ATAU `app/Data/` berisi PHP array/class untuk data kegiatan, proker, galeri, dan struktur organisasi.
- Controller mengambil dari sana dan pass ke view via `compact()` atau `View::share`.
- Tujuannya: ketika nanti upgrade ke database (v2), tinggal ganti sumber data di Controller, **Blade view dan struktur HTML tidak perlu diubah** karena variable name yang dipass ke view tetap sama.

---

## 7. Roadmap (Future Enhancement — TIDAK dikerjakan di v1)

- v2: Migrasi data statis → database (migration + model untuk Kegiatan, Proker, Galeri, Anggota).
- v2: Admin panel/dashboard (Laravel Breeze/Filament) untuk CRUD konten tanpa edit kode.
- v2: Form kontak terintegrasi backend (kirim email via `Mail` facade / simpan ke DB).
- v3: Multi-bahasa (ID/EN) jika diperlukan untuk sponsor asing.

---

## 8. Kriteria Selesai (Definition of Done) untuk v1

- [ ] 7 halaman (Home, Tentang, Kegiatan, Proker, Galeri, Struktur Organisasi, Kontak) bisa diakses via route masing-masing dan tidak ada error.
- [ ] Navbar konsisten di semua halaman, responsive (hamburger menu di mobile via Alpine.js), highlight halaman aktif.
- [ ] Footer konsisten di semua halaman (copyright, link sosial media, kontak singkat).
- [ ] Warna, font, dan elemen visual sesuai brand guideline (§4).
- [ ] Filosofi logo dari PDF sumber ditampilkan utuh dan akurat di halaman Tentang Kami.
- [ ] Semua data dummy/placeholder jelas ditandai (komentar di kode atau teks "Lorem"/"Contoh") supaya user tahu mana yang harus diganti dengan data asli.
- [ ] Tidak ada error console JS, tidak ada broken image (gunakan placeholder image service jika asset asli belum ada).
- [ ] Build produksi (`npm run build`) sukses tanpa error.