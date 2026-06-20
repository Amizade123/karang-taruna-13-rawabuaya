@extends('layouts.app')

@section('title', 'Galeri - Karang Taruna 13 Rawa Buaya')

@section('meta_desc', 'Galeri foto kegiatan Karang Taruna 13 Rawa Buaya.')

@section('content')
    {{-- Page Header --}}
    <section class="relative bg-brand-black text-brand-white py-20 sm:py-24 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-amber/10 transform -skew-x-12 translate-x-10"></div>
            <div class="absolute bottom-0 left-0 w-1/4 h-1/2 bg-brand-amber/5 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-brand-amber/15 text-brand-amber text-sm font-semibold rounded-full mb-4">Dokumentasi</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">Galeri</h1>
            <div class="w-16 h-1 bg-brand-amber mx-auto mb-4 rounded-full"></div>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Dokumentasi visual berbagai kegiatan Karang Taruna 13 Rawa Buaya.
            </p>
        </div>
    </section>

    {{-- Grid + Lightbox --}}
    <section class="py-20 sm:py-24 bg-gray-50 reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
             x-data="{
                activeFilter: 'all',
                selected: null,
                imgIndex: 0,
                items: @json($gallery),
             }"
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
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($gallery as $idx => $item)
                    <div x-show="activeFilter === 'all' || activeFilter === '{{ $item['category'] }}'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         @click="selected = items[{{ $idx }}]; imgIndex = 0"
                         class="cursor-pointer overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-300 group hover:-translate-y-1">
                        <div class="relative">
                            <img src="{{ $item['image'] }}"
                                 alt="{{ $item['title'] }}"
                                 class="w-full h-40 sm:h-52 object-cover transition-transform duration-500 group-hover:scale-110"
                                 loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <svg class="w-12 h-12 text-white opacity-0 group-hover:opacity-100 transition-all duration-300 delay-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Lightbox Modal --}}
            <template x-teleport="body">
                <div x-show="selected !== null"
                     x-cloak
                     class="fixed inset-0 z-50 flex items-center justify-center p-4">

                    {{-- Overlay --}}
                    <div x-show="selected !== null"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="absolute inset-0 bg-black/90 backdrop-blur-sm"
                         @click="selected = null">
                    </div>

                    {{-- Content --}}
                    <div x-show="selected !== null"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                         x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                         class="relative z-10 w-full max-w-4xl bg-white rounded-2xl overflow-hidden shadow-2xl">

                        {{-- Progress bar at top --}}
                        <div class="absolute top-0 left-0 right-0 z-30 h-1 bg-black/10">
                            <div class="h-full bg-brand-amber transition-all duration-400"
                                 :style="`width: ${((imgIndex + 1) / (selected?.images?.length || 1)) * 100}%`"></div>
                        </div>

                        {{-- Close button --}}
                        <button @click="selected = null"
                                class="absolute top-4 right-4 z-30 w-9 h-9 rounded-full bg-black/50 backdrop-blur-sm text-white flex items-center justify-center hover:bg-black/70 hover:scale-110 transition-all duration-200 cursor-pointer shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                        {{-- Image area --}}
                        <div class="relative bg-black">
                            <template x-if="selected">
                                <div>
                                    <template x-for="(img, i) in selected.images" :key="i">
                                        <img :src="img"
                                             :alt="selected.title"
                                             x-show="imgIndex === i"
                                             x-transition:enter="transition ease-out duration-300"
                                             x-transition:enter-start="opacity-0"
                                             x-transition:enter-end="opacity-100"
                                             x-transition:leave="transition ease-in duration-200"
                                             x-transition:leave-start="opacity-100"
                                             x-transition:leave-end="opacity-0"
                                             class="w-full max-h-[65vh] object-contain"
                                             loading="lazy">
                                    </template>
                                </div>
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

                            {{-- Prev button --}}
                            <button @click="if (imgIndex > 0) imgIndex--"
                                    x-show="imgIndex > 0"
                                    class="absolute left-3 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/15 backdrop-blur-md text-white flex items-center justify-center hover:bg-white/30 hover:scale-110 transition-all duration-200 cursor-pointer shadow-lg border border-white/10">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>

                            {{-- Next button --}}
                            <button @click="if (imgIndex < selected.images.length - 1) imgIndex++"
                                    x-show="imgIndex < selected.images.length - 1"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/15 backdrop-blur-md text-white flex items-center justify-center hover:bg-white/30 hover:scale-110 transition-all duration-200 cursor-pointer shadow-lg border border-white/10">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>

                        {{-- Info footer --}}
                        <template x-if="selected">
                            <div class="p-5 sm:p-6">
                                <div class="flex items-center justify-between mb-1">
                                    <h3 class="font-semibold text-lg text-brand-black" x-text="selected.title"></h3>
                                    <span class="inline-block px-3 py-1 bg-brand-amber/15 text-brand-amber text-xs font-semibold rounded-full" x-text="selected.category"></span>
                                </div>
                                <p class="text-sm text-gray-500" x-text="selected.description"></p>
                                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-xs text-gray-400">
                                        <span class="flex items-center gap-1"><kbd class="px-1.5 py-0.5 rounded bg-gray-100 text-gray-500 font-mono text-[10px]">ESC</kbd> Tutup</span>
                                        <span class="flex items-center gap-1"><kbd class="px-1.5 py-0.5 rounded bg-gray-100 text-gray-500 font-mono text-[10px]">←</kbd><kbd class="px-1.5 py-0.5 rounded bg-gray-100 text-gray-500 font-mono text-[10px]">→</kbd> Navigasi</span>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </template>
        </div>
    </section>
@endsection
