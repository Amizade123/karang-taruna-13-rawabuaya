@extends('layouts.app')

@section('title', 'Kontak - Karang Taruna 13 Rawa Buaya')

@section('meta_desc', 'Hubungi Karang Taruna 13 Rawa Buaya — alamat, telepon, email, dan media sosial.')

@section('content')
    {{-- Page Header --}}
    <section class="bg-brand-black text-brand-white py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">Kontak</h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Hubungi kami untuk informasi lebih lanjut, kolaborasi, atau keanggotaan.
            </p>
        </div>
    </section>

    {{-- Info + Maps --}}
    <section class="py-16 sm:py-20 bg-white reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Contact Info --}}
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-brand-black mb-8">Informasi Kontak</h2>
                    <div class="space-y-6">
                        {{-- Address --}}
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full bg-brand-amber/15 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-brand-black mb-1">Alamat</h3>
                                {{-- TODO: ganti dengan alamat sekretariat asli --}}
                                <p class="text-gray-600 leading-relaxed">
                                    RT 13, Kelurahan Rawa Buaya<br>
                                    Kecamatan Cengkareng<br>
                                    Jakarta Barat, DKI Jakarta 11740
                                </p>
                            </div>
                        </div>

                        {{-- Phone/WA --}}
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full bg-brand-amber/15 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-brand-black mb-1">Telepon / WhatsApp</h3>
                                {{-- TODO: ganti dengan nomor asli --}}
                                <a href="https://wa.me/6281234567890" target="_blank" class="text-gray-600 hover:text-brand-amber transition-colors duration-150">
                                    +62 812-3456-7890
                                </a>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full bg-brand-amber/15 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-brand-black mb-1">Email</h3>
                                {{-- TODO: ganti dengan email asli --}}
                                <a href="mailto:karangtaruna13rawabuaya@gmail.com" class="text-gray-600 hover:text-brand-amber transition-colors duration-150">
                                    karangtaruna13rawabuaya@gmail.com
                                </a>
                            </div>
                        </div>

                        {{-- Social Media --}}
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full bg-brand-amber/15 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-brand-black mb-1">Media Sosial</h3>
                                <div class="flex space-x-3">
                                    {{-- TODO: ganti href dengan link sosial media asli --}}
                                    <a href="#" target="_blank" class="text-gray-600 hover:text-brand-amber transition-all duration-150 hover:scale-110" aria-label="Instagram">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                    <a href="#" target="_blank" class="text-gray-600 hover:text-brand-amber transition-all duration-150 hover:scale-110" aria-label="Facebook">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                    <a href="#" target="_blank" class="text-gray-600 hover:text-brand-amber transition-all duration-150 hover:scale-110" aria-label="WhatsApp">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Google Maps --}}
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-brand-black mb-8">Lokasi</h2>
                    {{-- TODO: ganti src iframe dengan Google Maps embed asli dari alamat sekretariat --}}
                    <div class="rounded-xl overflow-hidden shadow-md border border-gray-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5!2d106.72!3d-6.16!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7b2e7b2e7b2%3A0x0!2sRawa+Buaya!5e0!3m2!1sid!2sid!4v1"
                            width="100%"
                            height="350"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Peta lokasi Karang Taruna 13 Rawa Buaya">
                        </iframe>
                    </div>
                    <p class="text-sm text-gray-400 mt-3">
                        {{-- TODO: ganti dengan alamat lengkap sekretariat --}}
                        RT 13, Rawa Buaya, Cengkareng, Jakarta Barat
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Form --}}
    <section class="py-16 sm:py-20 bg-gray-50 reveal-on-scroll">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-brand-black mb-4">Kirim Pesan</h2>
                <p class="text-gray-600">
                    Punya pertanyaan, saran, atau ingin bergabung? Kirim pesan melalui form di bawah.
                </p>
            </div>

            {{-- TODO: integrasikan dengan backend form processing di v2 (saat ini masih dummy UI, action=mailto:) --}}
            <form action="mailto:karangtaruna13rawabuaya@gmail.com" method="post" enctype="text/plain"
                  class="bg-white rounded-xl shadow-md border border-gray-100 p-6 sm:p-8"
                  x-data="{ submitted: false }"
                  @submit.prevent="submitted = true; setTimeout(() => submitted = false, 5000); $el.reset()">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required
                               class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-brand-amber/50 focus:border-brand-amber outline-none transition-colors duration-150 text-sm"
                               placeholder="Masukkan nama Anda">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-brand-amber/50 focus:border-brand-amber outline-none transition-colors duration-150 text-sm"
                               placeholder="Masukkan email Anda">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                    <input type="text" id="subject" name="subject" required
                           class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-brand-amber/50 focus:border-brand-amber outline-none transition-colors duration-150 text-sm"
                           placeholder="Subjek pesan">
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                    <textarea id="message" name="message" rows="5" required
                              class="w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-brand-amber/50 focus:border-brand-amber outline-none transition-colors duration-150 text-sm resize-y"
                              placeholder="Tulis pesan Anda di sini..."></textarea>
                </div>
                <button type="submit"
                        class="w-full sm:w-auto px-8 py-3 bg-brand-amber text-brand-black font-semibold rounded-lg hover:opacity-90 transition-opacity duration-150">
                    Kirim Pesan
                </button>

                {{-- Success flash --}}
                <div x-show="submitted"
                     x-cloak
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="mt-4 p-4 bg-green-50 text-green-700 text-sm rounded-lg border border-green-200">
                    {{-- ✅ --}}<svg class="inline-block w-5 h-5 mr-1 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Pesan berhasil dikirim! (Demo — form ini menggunakan mailto:, pesan akan terbuka di email client Anda)
                </div>
            </form>

            <p class="text-center text-xs text-gray-400 mt-4">
                {{-- TODO: ganti dengan keterangan yang sesuai jika backend form sudah diintegrasikan --}}
                * Form masih menggunakan mailto: — pesan akan dikirim via email client default Anda.
                Integrasi backend form akan tersedia di versi berikutnya.
            </p>
        </div>
    </section>
@endsection
