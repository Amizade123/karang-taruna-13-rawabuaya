@extends('layouts.app')

@section('title', 'Tentang Kami - Karang Taruna 13 Rawa Buaya')

@section('meta_desc', 'Pelajari tentang sejarah, visi-misi, dan filosofi logo Karang Taruna 13 Rawa Buaya — organisasi pemuda RT 13 yang berlandaskan kejernihan hati dan kebersamaan.')

@section('content')
    {{-- Page Header --}}
    <section class="relative bg-brand-black text-brand-white py-20 sm:py-24 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-amber/10 transform -skew-x-12 translate-x-10"></div>
            <div class="absolute bottom-0 left-0 w-1/4 h-1/2 bg-brand-amber/5 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-brand-amber/15 text-brand-amber text-sm font-semibold rounded-full mb-4">Profil Organisasi</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">Tentang Kami</h1>
            <div class="w-16 h-1 bg-brand-amber mx-auto mb-4 rounded-full"></div>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Mengenal lebih dekat Karang Taruna 13 Rawa Buaya — sejarah, visi, nilai, dan filosofi yang menjadi dasar setiap langkah kami.
            </p>
        </div>
    </section>

    {{-- Sejarah Singkat --}}
    {{-- TODO: ganti seluruh konten sejarah dengan data asli organisasi --}}
    <section class="py-20 sm:py-24 bg-white reveal-on-scroll">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="inline-block px-4 py-1.5 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full mb-4">Sejarah</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-brand-black mb-8">Sejarah Singkat</h2>
            <div class="w-16 h-1 bg-brand-amber mb-8 rounded-full"></div>
            <div class="space-y-4 text-gray-600 leading-relaxed text-lg">
                <p>
                    Karang Taruna 13 Rawa Buaya terbentuk sebagai wadah organisasi kepemudaan di lingkungan RT 13, Kelurahan Rawa Buaya, Kecamatan Cengkareng, Jakarta Barat. Berawal dari kegelisahan para pemuda akan minimnya kegiatan positif yang terorganisir di lingkungan sekitar, sekelompok pemuda merintis perkumpulan yang kemudian resmi dideklarasikan sebagai Karang Taruna RT 13 pada tahun 2020.
                </p>
                <p>
                    Sejak saat itu, organisasi terus berkembang dengan berbagai program kerja dan kegiatan yang melibatkan pemuda dari enam gang di wilayah RT 13. Semangat gotong royong dan kebersamaan yang diwariskan oleh para pendiri masih terus dijaga hingga kini.
                </p>
                <p>
                    {{-- TODO: tambahkan sejarah detail asli dari pengurus --}}
                    [Isi sejarah lengkap organisasi — tahun berdiri, tokoh pendiri, milestone penting]
                </p>
            </div>
        </div>
    </section>

    {{-- Visi & Misi --}}
    {{-- TODO: ganti dengan visi-misi asli organisasi --}}
    <section class="py-20 sm:py-24 bg-gray-50 reveal-on-scroll">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-1.5 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full mb-4">Visi &amp; Misi</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-brand-black mb-4">Visi &amp; Misi</h2>
                <div class="w-16 h-1 bg-brand-amber mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-xl hover:border-brand-amber/30 transition-all duration-300 cursor-pointer hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-xl bg-brand-amber flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-brand-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-black mb-3">Visi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{-- TODO: ganti dengan visi asli --}}
                        "Mewujudkan pemuda RT 13 yang berakhlak mulia, kreatif, dan berdaya saing tinggi melalui semangat kebersamaan dan kejernihan hati."
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 hover:shadow-xl hover:border-brand-amber/30 transition-all duration-300 cursor-pointer hover:-translate-y-1">
                    <div class="w-14 h-14 rounded-xl bg-brand-amber flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-brand-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-black mb-3">Misi</h3>
                    <ul class="space-y-3 text-gray-600">
                        {{-- TODO: ganti dengan misi asli --}}
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-brand-amber/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Menyelenggarakan kegiatan keagamaan dan sosial yang membangun karakter pemuda.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-brand-amber/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Mengembangkan potensi pemuda melalui pelatihan dan pendidikan non-formal.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-brand-amber/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Memperkuat solidaritas dan kebersamaan antar pemuda lintas gang di RT 13.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-brand-amber/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Menjalin kemitraan dengan pihak RW, kelurahan, dan mitra strategis lainnya.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Filosofi Logo --}}
    {{-- Animasi khusus: logo dengan pulse & glow, makna dengan stagger delay --}}
    <section class="py-20 sm:py-24 bg-white reveal-on-scroll">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <span class="inline-block px-4 py-1.5 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full mb-4">Filosofi</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-brand-black mb-4">Filosofi Logo</h2>
                <div class="w-16 h-1 bg-brand-amber mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Setiap elemen dalam logo Karang Taruna 13 Rawa Buaya mengandung makna filosofis yang mencerminkan jati diri dan semangat organisasi.
                </p>
            </div>

            <div class="lg:flex lg:items-center lg:space-x-12">
                {{-- Logo Besar dengan animasi khusus --}}
                <div class="lg:w-1/3 mb-12 lg:mb-0 flex justify-center">
                    <img src="/images/logo/logo.png" alt="Logo Karang Taruna 13 Rawa Buaya" class="w-40 h-40 sm:w-48 sm:h-48 lg:w-56 lg:h-56 rounded-full object-cover shadow-2xl shadow-brand-amber/30">
                </div>

                {{-- Makna dengan stagger delay --}}
                <div class="lg:w-2/3 space-y-6">
                    <div class="relative pl-14 reveal-on-scroll" style="transition-delay: 0.1s;">
                        <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-brand-amber flex items-center justify-center text-brand-black font-bold text-sm">1</div>
                        <h3 class="font-semibold text-lg text-brand-black">Bunga Teratai — Kejernihan Hati &amp; Pikiran</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Bunga teratai dipilih sebagai simbol utama karena dikenal tumbuh di air keruh namun tetap mekar dengan indah dan bersih. Ini melambangkan bahwa Karang Taruna 13 senantiasa menjaga kejernihan hati dan pikiran dalam setiap langkah, tidak terpengaruh oleh lingkungan yang kurang baik, serta selalu berusaha memberikan yang terbaik bagi masyarakat.
                        </p>
                    </div>

                    <div class="relative pl-14 reveal-on-scroll" style="transition-delay: 0.2s;">
                        <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-brand-amber flex items-center justify-center text-brand-black font-bold text-sm">2</div>
                        <h3 class="font-semibold text-lg text-brand-black">Enam Kelopak — Enam Gang di RT 13</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Enam helai daun teratai pada logo merepresentasikan enam gang yang ada di pemukiman RT 13 Rawa Buaya. Setiap kelopak memiliki kedudukan yang setara, menggambarkan bahwa seluruh warga dari setiap gang memiliki peran dan suara yang sama dalam organisasi.
                        </p>
                    </div>

                    <div class="relative pl-14 reveal-on-scroll" style="transition-delay: 0.3s;">
                        <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-brand-amber flex items-center justify-center text-brand-black font-bold text-sm">3</div>
                        <h3 class="font-semibold text-lg text-brand-black">Warna Oranye &amp; Hitam — Semangat Kehidupan Berkelompok</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Kombinasi warna oranye dan hitam mencerminkan corak khas lebah, serangga yang dikenal dengan kehidupan berkelompok yang sangat terorganisir. Setiap lebah memiliki peran dan bekerja sama untuk kepentingan koloni, persis seperti semangat Karang Taruna yang mengedepankan gotong royong, kerja keras, dan soliditas dalam kebersamaan.
                        </p>
                    </div>

                    <div class="relative pl-14 reveal-on-scroll" style="transition-delay: 0.4s;">
                        <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-brand-amber flex items-center justify-center text-brand-black font-bold text-sm">4</div>
                        <h3 class="font-semibold text-lg text-brand-black">"Trayodasa" — Angka 13 dalam Sanskerta</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Elemen di tengah logo menggunakan istilah Sanskerta "Trayodasa" yang berarti angka 13. Pemilihan istilah Sanskerta bukan tanpa alasan — bahasa ini identik dengan nilai-nilai luhur dan tradisi intelektual Nusantara kuno. "Trayodasa" sekaligus merujuk pada nomor RT, yaitu RT 13 Rawa Buaya, yang menjadi basis dan kebanggaan organisasi.
                        </p>
                    </div>

                    <div class="relative pl-14 reveal-on-scroll" style="transition-delay: 0.5s;">
                        <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-brand-amber flex items-center justify-center text-brand-black font-bold text-sm">5</div>
                        <h3 class="font-semibold text-lg text-brand-black">"Rawa Buaya" — Identitas Wilayah</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Nama "Rawa Buaya" yang tercantum dalam logo menegaskan identitas dan akar organisasi yang tidak terpisahkan dari wilayah Rawa Buaya, Cengkareng, Jakarta Barat. Ini adalah pengakuan bahwa Karang Taruna 13 lahir, tumbuh, dan berdedikasi untuk lingkungan tempat anggotanya tinggal dan beraktivitas sehari-hari.
                        </p>
                    </div>

                    <div class="relative pl-14 reveal-on-scroll" style="transition-delay: 0.6s;">
                        <div class="absolute left-0 top-0 w-10 h-10 rounded-full bg-brand-amber flex items-center justify-center text-brand-black font-bold text-sm">6</div>
                        <h3 class="font-semibold text-lg text-brand-black">Untaian Tali Melingkar — Keutuhan &amp; Kebersamaan</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Untaian tali yang melingkari logo merupakan simbol yang sangat kuat. Setiap helian tali yang saling menjalin melambangkan bahwa melalui keutuhan dan semangat kebersamaan yang kokoh, Karang Taruna 13 dapat terpelihara sebagai organisasi yang solid, utuh, dan senantiasa berjaya dalam menjalankan perannya di masyarakat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Nilai-nilai Organisasi --}}
    <section class="py-20 sm:py-24 bg-gray-50 reveal-on-scroll">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <span class="inline-block px-4 py-1.5 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full mb-4">Nilai</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-brand-black mb-4">Nilai-nilai Organisasi</h2>
                <div class="w-16 h-1 bg-brand-amber mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Nilai-nilai yang menjadi fondasi setiap kegiatan dan program kerja Karang Taruna 13 Rawa Buaya, diturunkan langsung dari filosofi logo.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Kebersamaan --}}
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 text-center hover:shadow-xl hover:border-brand-amber/30 hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mx-auto rounded-xl bg-brand-amber/15 flex items-center justify-center mb-5">
                        <svg class="w-8 h-8 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg text-brand-black mb-2">Kebersamaan</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Bersatu padu bagaikan untaian tali yang saling menguatkan, karena tidak ada pencapaian besar yang lahir dari kerja sendiri.
                    </p>
                </div>

                {{-- Kejernihan --}}
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 text-center hover:shadow-xl hover:border-brand-amber/30 hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mx-auto rounded-xl bg-brand-amber/15 flex items-center justify-center mb-5">
                        <svg class="w-8 h-8 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg text-brand-black mb-2">Kejernihan</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Berpegang pada ketulusan hati dan pikiran yang jernih bak bunga teratai, dalam setiap niat, ucapan, dan tindakan.
                    </p>
                </div>

                {{-- Soliditas --}}
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 text-center hover:shadow-xl hover:border-brand-amber/30 hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mx-auto rounded-xl bg-brand-amber/15 flex items-center justify-center mb-5">
                        <svg class="w-8 h-8 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg text-brand-black mb-2">Soliditas</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Kekompakan yang kokoh seperti koloni lebah, di mana setiap anggota memiliki peran dan saling mendukung untuk tujuan bersama.
                    </p>
                </div>

                {{-- Kerja Keras --}}
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 text-center hover:shadow-xl hover:border-brand-amber/30 hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 mx-auto rounded-xl bg-brand-amber/15 flex items-center justify-center mb-5">
                        <svg class="w-8 h-8 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg text-brand-black mb-2">Kerja Keras</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Semangat pantang menyerah dan dedikasi tinggi dalam setiap program, karena perubahan nyata hanya lahir dari usaha yang sungguh-sungguh.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
