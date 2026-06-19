@extends('layouts.app')

@section('title', 'Kegiatan - Karang Taruna 13 Rawa Buaya')

@section('meta_desc', 'Dokumentasi kegiatan Karang Taruna 13 Rawa Buaya — sosial, olahraga, keagamaan, dan lingkungan.')

@section('content')
    {{-- Page Header --}}
    <section class="relative bg-brand-black text-brand-white py-20 sm:py-24 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-amber/10 transform -skew-x-12 translate-x-10"></div>
            <div class="absolute bottom-0 left-0 w-1/4 h-1/2 bg-brand-amber/5 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-brand-amber/15 text-brand-amber text-sm font-semibold rounded-full mb-4">Dokumentasi</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">Kegiatan</h1>
            <div class="w-16 h-1 bg-brand-amber mx-auto mb-4 rounded-full"></div>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Berbagai kegiatan yang telah dilaksanakan oleh Karang Taruna 13 Rawa Buaya.
            </p>
        </div>
    </section>

    {{-- Filter & Grid --}}
    <section class="py-20 sm:py-24 bg-gray-50 reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
             x-data="{ activeFilter: 'all', selected: null, imgIndex: 0 }"
             x-init="$watch('selected', val => { if (val !== null) imgIndex = 0 })"
             @keydown.escape.window="selected = null"
             @keydown.arrow-left.window="if (selected !== null && imgIndex > 0) imgIndex--"
             @keydown.arrow-right.window="if (selected !== null && imgIndex < selected.images.length - 1) imgIndex++">

            {{-- Filter Chips --}}
            <div class="flex flex-wrap gap-3 mb-12 justify-center">
                <button @click="activeFilter = 'all'"
                        :class="activeFilter === 'all' ? 'bg-brand-amber text-brand-black shadow-md' : 'bg-white text-gray-600 hover:bg-gray-100 hover:shadow-sm'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200 border border-gray-200 cursor-pointer">
                    Semua
                </button>
                @foreach($categories as $category)
                    <button @click="activeFilter = '{{ $category }}'"
                            :class="activeFilter === '{{ $category }}' ? 'bg-brand-amber text-brand-black shadow-md' : 'bg-white text-gray-600 hover:bg-gray-100 hover:shadow-sm'"
                            class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-200 border border-gray-200 cursor-pointer">
                        {{ $category }}
                    </button>
                @endforeach
            </div>

            {{-- Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($activities as $activity)
                    <div x-show="activeFilter === 'all' || activeFilter === '{{ $activity['category'] }}'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         @click='selected = @json($activity); imgIndex = 0'
                         class="group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer hover:-translate-y-1">
                        <div class="relative overflow-hidden">
                            <img src="{{ $activity['image'] }}"
                                 alt="{{ $activity['title'] }}"
                                 class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110"
                                 loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center justify-between mb-3">
                                <span class="inline-block px-3 py-1 bg-brand-amber/15 text-brand-amber text-xs font-semibold rounded-full">
                                    {{ $activity['category'] }}
                                </span>
                                <span class="text-xs text-gray-400 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    {{ date('d F Y', strtotime($activity['date'])) }}
                                </span>
                            </div>
                            <h3 class="font-semibold text-lg text-brand-black mb-2 group-hover:text-brand-amber transition-colors duration-200">{{ $activity['title'] }}</h3>
                            <p class="text-sm text-gray-600 leading-relaxed line-clamp-2 mb-4">
                                {{ $activity['excerpt'] }}
                            </p>
                            <span class="inline-flex items-center gap-1 text-brand-amber font-semibold text-sm hover:gap-2 transition-all duration-200 cursor-pointer">
                                Lihat Detail
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            </span>
                        </div>
                    </div>
                @endforeach
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
        </div>
    </section>
@endsection
