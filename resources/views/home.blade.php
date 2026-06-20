@extends('layouts.app')

@section('title', 'Beranda - Karang Taruna 13 Rawa Buaya')

@section('meta_desc', 'Company Profile Karang Taruna 13 Rawa Buaya — organisasi pemuda RT 13 Rawa Buaya yang berdedikasi untuk kebersamaan dan kejernihan hati.')

@section('content')
    {{-- Hero Section --}}
    {{--
        Opsi tagline lain (berdasarkan filosofi teratai "kejernihan hati & pikiran"):
        1. "Bersih Hati, Kuat Bersama, Berani Berkarya"
        2. "Bersatu dalam Kejernihan, Bertumbuh dalam Kebersamaan"
    --}}
    <section class="relative text-brand-white min-h-screen md:min-h-[90vh] flex items-center overflow-hidden">
        {{-- Background Carousel --}}
        <div class="absolute inset-0 z-0" x-data="{
            currentIndex: 0,
            images: [
                '/images/gallery/17-agustus/17-agustus-1.jpg',
                '/images/gallery/17-agustus/17-agustus-7.jpg',
                '/images/gallery/17-agustus/17-agustus-14.jpg',
                '/images/gallery/halal-bihalal/halal-bihalal-1.jpg',
                '/images/gallery/halal-bihalal/halal-bihalal-2.jpg',
            ],
            init() {
                // Preload images
                this.images.forEach(src => {
                    const img = new Image();
                    img.src = src;
                });
                // Auto slide
                this.interval = setInterval(() => this.next(), 6000);
            },
            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            },
            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            }
        }">
            <template x-for="(img, i) in images" :key="i">
                <img :src="img"
                     alt="Hero background"
                     class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000"
                     :class="i === currentIndex ? 'opacity-100' : 'opacity-0'"
                     loading="lazy">
            </template>
            {{-- Overlay gelap biar teks terbaca --}}
            <div class="absolute inset-0 bg-gradient-to-r from-brand-black/80 via-brand-black/60 to-brand-black/50"></div>
        </div>

        {{-- Content --}}
        <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20 text-center lg:text-left">
            <div class="lg:flex lg:items-center lg:space-x-16" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 200)">
                <div class="lg:w-1/2 mb-10 lg:mb-0">
                    <img src="/images/logo/logo.png" alt="Karang Taruna 13 Rawa Buaya"
                         class="w-24 h-24 sm:w-32 sm:h-32 lg:w-40 lg:h-40 rounded-full object-cover shadow-2xl shadow-brand-amber/30 mb-6 md:mb-8"
                         :class="loaded ? 'opacity-100 scale-100' : 'opacity-0 scale-90'"
                         style="transition: all 0.6s cubic-bezier(0.2, 0.8, 0.2, 1);">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 md:mb-8"
                        :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                        style="transition: all 0.6s cubic-bezier(0.2, 0.8, 0.2, 1); transition-delay: 0.2s;">
                        Karang Taruna <span class="text-brand-amber">13</span><br>Rawa Buaya
                    </h1>
                    <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center lg:justify-start"
                         :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                         style="transition: all 0.6s cubic-bezier(0.2, 0.8, 0.2, 1); transition-delay: 0.4s;">
                        <a href="{{ route('about') }}" class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-2.5 md:py-3 bg-brand-amber text-brand-black font-semibold rounded-lg hover:bg-brand-amber/90 hover:shadow-lg hover:shadow-brand-amber/30 transition-all duration-200 cursor-pointer text-sm md:text-base">
                            Tentang Kami
                        </a>
                        <a href="{{ route('contact.index') }}" class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-2.5 md:py-3 border-2 border-brand-white/30 text-brand-white font-semibold rounded-lg hover:bg-brand-white hover:text-brand-black transition-all duration-200 cursor-pointer text-sm md:text-base">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                <div class="hidden lg:flex lg:w-1/2 items-center justify-center"
                     :class="loaded ? 'opacity-100 scale-100' : 'opacity-0 scale-90'"
                     style="transition: all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1); transition-delay: 0.3s;">
                    {{-- TODO: ganti dengan elemen visual khas (motif tali, aksen geometris) jika ada asset --}}
                    <div class="relative">
                        <div class="w-72 xl:w-80 mx-auto rounded-full border-[6px] border-brand-amber/20 flex items-center justify-center animate-logo-glow">
                            <div class="w-56 xl:w-64 rounded-full border-[6px] border-brand-amber/40 flex items-center justify-center">
                                <div class="w-44 xl:w-48 rounded-full border-[6px] border-brand-amber/60 flex items-center justify-center">
                                    <div class="w-32 xl:w-36 rounded-full bg-brand-amber/10 flex items-center justify-center">
                                        <span class="text-5xl xl:text-6xl font-black text-brand-amber">13</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -top-4 -right-4 w-14 xl:w-16 h-14 xl:h-16 rounded-full bg-brand-amber/20 flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-6 xl:w-8 h-6 xl:h-8 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div class="absolute -bottom-3 -left-3 w-10 xl:w-12 h-10 xl:h-12 rounded-full bg-brand-amber/15 flex items-center justify-center backdrop-blur-sm">
                            <span class="text-base xl:text-lg font-black text-brand-amber">6</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-10 animate-bounce">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
        </div>
    </section>

    {{-- Sekilas Tentang --}}
    <section class="py-14 md:py-20 lg:py-24 bg-white reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:w-3/4 mx-auto text-center">
                <span class="inline-block px-4 py-1.5 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full mb-4">Tentang Kami</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-brand-black mb-4">Sekilas Tentang Kami</h2>
                <div class="w-16 h-1 bg-brand-amber mx-auto mb-6 rounded-full"></div>
                <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl mx-auto">
                    {{-- TODO: ganti dengan deskripsi asli organisasi --}}
                    Karang Taruna 13 Rawa Buaya adalah organisasi kepemudaan yang beranggotakan remaja dan pemuda RT 13, Kelurahan Rawa Buaya, Kecamatan Cengkareng, Jakarta Barat. Berdiri dengan semangat kebersamaan dan kejernihan hati, kami berkomitmen untuk menjadi wadah pengembangan potensi pemuda serta berkontribusi positif bagi lingkungan sekitar.
                </p>
                <a href="{{ route('about') }}" class="group inline-flex items-center gap-2 px-6 py-3 bg-brand-amber text-brand-black font-semibold rounded-lg hover:bg-brand-amber/90 hover:shadow-lg hover:shadow-brand-amber/30 transition-all duration-200 cursor-pointer">
                    <span>Selengkapnya</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Highlight Kegiatan Terbaru --}}
    <section class="py-14 md:py-20 lg:py-24 bg-gray-50 reveal-on-scroll"
             x-data="{ selected: null, imgIndex: 0, activities: @json($activities) }"
             x-init="$watch('selected', val => { if (val !== null) imgIndex = 0 })"
             @keydown.escape.window="selected = null"
             @keydown.arrow-left.window="if (selected !== null && imgIndex > 0) imgIndex--"
             @keydown.arrow-right.window="if (selected !== null && imgIndex < selected.images.length - 1) imgIndex++">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-8 md:mb-12">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full mb-4">Kegiatan</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-brand-black">Kegiatan Terbaru</h2>
                </div>
                <a href="{{ route('activity.index') }}" class="group hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-brand-amber text-brand-black font-semibold rounded-lg hover:bg-brand-amber/90 transition-all duration-200 cursor-pointer text-sm">
                    <span>Lihat Semua</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                @foreach($activities as $idx => $activity)
                    <div @click="selected = activities[{{ $idx }}]; imgIndex = 0"
                         class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer hover:-translate-y-1">
                        <div class="relative overflow-hidden aspect-[4/3]">
                            <img src="{{ $activity['image'] }}" alt="{{ $activity['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-2 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <span class="text-white text-xs">{{ date('d F Y', strtotime($activity['date'])) }}</span>
                            </div>
                        </div>
                        <div class="p-4 md:p-5">
                            <span class="inline-block px-2.5 md:px-3 py-1 bg-brand-amber/15 text-brand-amber text-xs font-semibold rounded-full mb-2 md:mb-3">
                                {{ $activity['category'] }}
                            </span>
                            <h3 class="font-semibold text-sm md:text-base text-brand-black mb-1.5 group-hover:text-brand-amber transition-colors duration-200">{{ $activity['title'] }}</h3>
                            <p class="text-xs md:text-sm text-gray-600 leading-relaxed line-clamp-2">{{ $activity['excerpt'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-8 md:mt-10 sm:hidden">
                <a href="{{ route('activity.index') }}" class="group inline-flex items-center justify-center gap-2 px-6 py-3 bg-brand-amber text-brand-black font-semibold rounded-lg hover:bg-brand-amber/90 transition-all duration-200 cursor-pointer text-sm">
                    <span>Lihat Semua</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>

        {{-- Modal Lightbox --}}
        <template x-teleport="body">
            <div x-show="selected !== null"
                 x-cloak
                 class="fixed inset-0 z-50 flex items-center justify-center p-4">
                <div x-show="selected !== null"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="absolute inset-0 bg-black/90 backdrop-blur-sm"
                     @click="selected = null"></div>
                <div x-show="selected !== null"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                     x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                     x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                     class="relative z-10 w-full max-w-5xl bg-white rounded-2xl overflow-hidden shadow-2xl flex flex-col md:flex-row max-h-[90vh]">
                    {{-- Progress bar at top --}}
                    <div class="absolute top-0 left-0 right-0 z-30 h-1 bg-black/10">
                        <div class="h-full bg-brand-amber transition-all duration-400"
                             :style="`width: ${((imgIndex + 1) / (selected?.images?.length || 1)) * 100}%`"></div>
                    </div>
                    {{-- Close --}}
                    <button @click="selected = null"
                            class="absolute top-4 right-4 z-30 w-9 h-9 rounded-full bg-black/50 backdrop-blur-sm text-white flex items-center justify-center hover:bg-black/70 hover:scale-110 transition-all duration-200 cursor-pointer shadow-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                    {{-- Image Side --}}
                    <div class="relative w-full md:w-[55%] bg-black flex items-center justify-center min-h-[40vh] md:min-h-[50vh]">
                        <template x-for="(img, i) in selected?.images || []" :key="i">
                            <img :src="img"
                                 :alt="selected.title"
                                 x-show="imgIndex === i"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-95"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-95"
                                 class="absolute inset-0 w-full h-full object-contain p-4">
                        </template>
                        {{-- Dash indicators --}}
                        <div x-show="selected && selected.images.length > 1"
                             class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex items-center gap-1.5 px-3 py-2 rounded-full bg-black/50 backdrop-blur-sm">
                            <template x-for="(_, i) in selected?.images || []" :key="i">
                                <button @click="imgIndex = i"
                                        class="h-1.5 rounded-full transition-all duration-300 cursor-pointer"
                                        :class="i === imgIndex ? 'w-6 bg-brand-amber' : 'w-1.5 bg-white/50 hover:bg-white/80'"></button>
                            </template>
                        </div>
                        {{-- Counter pill --}}
                        <div x-show="selected && selected.images.length > 1"
                             class="absolute top-4 left-4 z-20 px-3 py-1 rounded-full bg-black/50 backdrop-blur-sm text-white text-xs font-medium"
                             x-text="`${imgIndex + 1} / ${selected.images.length}`"></div>
                        {{-- Prev --}}
                        <button @click="if (imgIndex > 0) imgIndex--"
                                x-show="imgIndex > 0"
                                class="absolute left-3 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/15 backdrop-blur-md text-white flex items-center justify-center hover:bg-white/30 hover:scale-110 transition-all duration-200 cursor-pointer shadow-lg border border-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        {{-- Next --}}
                        <button @click="if (imgIndex < selected.images.length - 1) imgIndex++"
                                x-show="imgIndex < selected.images.length - 1"
                                class="absolute right-3 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/15 backdrop-blur-md text-white flex items-center justify-center hover:bg-white/30 hover:scale-110 transition-all duration-200 cursor-pointer shadow-lg border border-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                    {{-- Description Side --}}
                    <div class="w-full md:w-[45%] p-6 md:p-8 overflow-y-auto flex flex-col">
                        <template x-if="selected">
                            <div class="flex-1 flex flex-col">
                                <div class="flex items-center gap-2 mb-4">
                                    <span class="inline-block w-2 h-2 rounded-full bg-brand-amber"></span>
                                    <span class="text-xs font-semibold text-brand-amber uppercase tracking-wider" x-text="selected.category"></span>
                                </div>
                                <h3 class="text-xl md:text-2xl font-bold text-brand-black mb-3 leading-tight" x-text="selected.title"></h3>
                                <div class="flex items-center gap-2 text-sm text-gray-400 mb-5 pb-5 border-b border-gray-100">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span x-text="selected.date"></span>
                                </div>
                                <p class="text-gray-600 leading-relaxed text-sm md:text-base" x-text="selected.description"></p>
                                {{-- Keyboard hint --}}
                                <div class="mt-auto pt-6 flex items-center gap-3 text-xs text-gray-400">
                                    <span class="flex items-center gap-1"><kbd class="px-1.5 py-0.5 rounded bg-gray-100 text-gray-500 font-mono text-[10px]">ESC</kbd> Tutup</span>
                                    <span class="flex items-center gap-1"><kbd class="px-1.5 py-0.5 rounded bg-gray-100 text-gray-500 font-mono text-[10px]">←</kbd><kbd class="px-1.5 py-0.5 rounded bg-gray-100 text-gray-500 font-mono text-[10px]">→</kbd> Navigasi</span>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </template>
    </section>

    {{-- Highlight Program Kerja --}}
    <section class="py-20 sm:py-24 bg-white reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-12">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full mb-4">Program Kerja</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-brand-black">Program Kerja</h2>
                </div>
                <a href="{{ route('program.index') }}" class="group hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-brand-amber text-brand-black font-semibold rounded-lg hover:bg-brand-amber/90 transition-all duration-200 cursor-pointer text-sm">
                    <span>Lihat Semua</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach($programs as $program)
                    <div class="group relative p-6 md:p-7 bg-white rounded-2xl border border-dashed border-brand-amber/40 hover:border-brand-amber hover:shadow-xl transition-all duration-300">
                        <div class="absolute -top-3 right-6 px-3 py-1 bg-brand-amber text-brand-black text-xs font-bold rounded-full uppercase tracking-wider">Segera Hadir</div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-11 h-11 rounded-xl bg-brand-amber/15 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-brand-amber" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-brand-black">{{ $program['name'] }}</h3>
                                <span class="text-xs text-gray-400">{{ $program['field'] }}</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            {{ $program['target'] }}
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-10 sm:hidden">
                <a href="{{ route('program.index') }}" class="group inline-flex items-center gap-2 px-6 py-3 bg-brand-amber text-brand-black font-semibold rounded-lg hover:bg-brand-amber/90 transition-all duration-200 cursor-pointer">
                    <span>Lihat Semua</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Preview Galeri --}}
    <section class="py-20 sm:py-24 bg-gray-50 reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-12">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full mb-4">Galeri</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-brand-black">Dokumentasi Kegiatan</h2>
                </div>
                <a href="{{ route('gallery.index') }}" class="group hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-brand-amber text-brand-black font-semibold rounded-lg hover:bg-brand-amber/90 transition-all duration-200 cursor-pointer text-sm">
                    <span>Lihat Semua</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($gallery as $item)
                    <div class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer aspect-square sm:aspect-[4/3]">
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-black/80 via-brand-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end p-5">
                            <div class="translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm font-medium">{{ $item['title'] }}</p>
                                <span class="text-brand-amber text-xs">{{ $item['category'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-10 sm:hidden">
                <a href="{{ route('gallery.index') }}" class="group inline-flex items-center gap-2 px-6 py-3 bg-brand-amber text-brand-black font-semibold rounded-lg hover:bg-brand-amber/90 transition-all duration-200 cursor-pointer">
                    <span>Lihat Semua</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Statistik Singkat dengan counter animasi --}}
    {{-- TODO: ganti semua angka statistik dengan data asli --}}
    <section class="py-20 sm:py-24 bg-black text-brand-white reveal-on-scroll"
             x-data="{
                 counted: false,
                 stats: [
                     { target: 35, label: 'Anggota Aktif', suffix: '+' },
                     { target: 12, label: 'Kegiatan per Tahun', suffix: '+' },
                     { target: 6, label: 'Gang / Wilayah', suffix: '' },
                     { target: 5, label: 'Tahun Berdiri', suffix: '' },
                 ],
                 counts: [0, 0, 0, 0],
                 init() {
                     const observer = new IntersectionObserver((entries) => {
                         entries.forEach(entry => {
                             if (entry.isIntersecting && !this.counted) {
                                 this.counted = true;
                                 this.stats.forEach((stat, i) => {
                                     let start = 0;
                                     const step = Math.ceil(stat.target / 40);
                                     const timer = setInterval(() => {
                                         start += step;
                                         if (start >= stat.target) {
                                             this.counts[i] = stat.target;
                                             clearInterval(timer);
                                         } else {
                                             this.counts[i] = start;
                                         }
                                     }, 30);
                                 });
                             }
                         });
                     }, { threshold: 0.3 });
                     observer.observe(this.$el);
                 }
             }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="inline-block px-4 py-1.5 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full mb-4 text-center mx-auto block w-fit">Statistik</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-14">Kami dalam Angka</h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 text-center">
                <template x-for="(stat, i) in stats" :key="i">
                    <div class="group">
                        <div class="text-5xl sm:text-6xl font-bold text-brand-amber mb-3 tabular-nums" x-text="counts[i] + stat.suffix">0</div>
                        <div class="text-sm sm:text-base text-gray-300" x-text="stat.label"></div>
                    </div>
                </template>
            </div>
        </div>
    </section>



    {{-- CTA Kontak --}}
    <section class="relative py-20 sm:py-24 bg-brand-amber overflow-hidden reveal-on-scroll">
        <div class="absolute inset-0">
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-brand-black/5 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-brand-black/5 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-brand-black/10 text-brand-black text-sm font-semibold rounded-full mb-4">Hubungi Kami</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-brand-black mb-4 leading-tight">
                Ingin Bergabung atau<br>Bekerja Sama?
            </h2>
            <p class="text-brand-black/80 mb-10 max-w-xl mx-auto text-lg">
                Kami terbuka untuk anggota baru, sponsor, dan kolaborasi dengan pihak mana pun yang memiliki visi yang sama untuk pemuda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact.index') }}" class="inline-flex items-center gap-2 px-8 py-3.5 bg-brand-black text-brand-white font-semibold rounded-lg hover:bg-brand-black/90 hover:shadow-xl transition-all duration-200 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    Hubungi Kami Sekarang
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center gap-2 px-8 py-3.5 border-2 border-brand-black/30 text-brand-black font-semibold rounded-lg hover:bg-brand-black hover:text-brand-white transition-all duration-200 cursor-pointer">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection
