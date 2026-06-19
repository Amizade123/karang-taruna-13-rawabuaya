@extends('layouts.app')

@section('title', 'Struktur Organisasi - Karang Taruna 13 Rawa Buaya')

@section('meta_desc', 'Struktur kepengurusan Karang Taruna 13 Rawa Buaya.')

@section('content')
    {{-- Page Header --}}
    <section class="relative bg-brand-black text-brand-white py-20 sm:py-24 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-amber/10 transform -skew-x-12 translate-x-10"></div>
            <div class="absolute bottom-0 left-0 w-1/4 h-1/2 bg-brand-amber/5 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-brand-amber/15 text-brand-amber text-sm font-semibold rounded-full mb-4">Kepengurusan</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">Struktur Organisasi</h1>
            <div class="w-16 h-1 bg-brand-amber mx-auto mb-4 rounded-full"></div>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Kepengurusan Karang Taruna 13 Rawa Buaya periode 2025–2026.
            </p>
        </div>
    </section>

    {{-- Organization Chart --}}
    @php
        $levels = [0, 1, 2];
        $levelLabels = [
            0 => ['label' => 'Pimpinan', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
            1 => ['label' => 'Pengurus Harian', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
            2 => ['label' => 'Koordinator Bidang', 'icon' => 'M19 11H5m14 0l-2-2m2 2l-2 2'],
        ];
    @endphp

    <section class="py-20 sm:py-24 bg-gray-50 overflow-x-hidden reveal-on-scroll">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center space-y-0">
                @foreach($levels as $levelIndex)
                    @php
                        $levelMembers = array_values(array_filter($members, fn($m) => $m['level'] === $levelIndex));
                        $label = $levelLabels[$levelIndex];
                        $baseDelay = $levelIndex * 0.2;
                    @endphp

                    {{-- Connector line above this level (except first) --}}
                    @if($levelIndex > 0)
                        <div class="flex justify-center my-6">
                            <div class="w-0.5 h-10 bg-gradient-to-b from-brand-amber/40 to-brand-amber/10"></div>
                        </div>
                    @endif

                    {{-- Level Label --}}
                    <div class="mb-5 text-center">
                        <span class="inline-flex items-center gap-2 px-4 py-2 bg-brand-amber/10 text-brand-amber text-sm font-semibold rounded-full border border-brand-amber/20">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $label['icon'] }}"/>
                            </svg>
                            <span>{{ $label['label'] }}</span>
                        </span>
                    </div>

                    {{-- Cards row --}}
                    <div class="flex flex-wrap justify-center gap-4 sm:gap-6 w-full">
                        @foreach($levelMembers as $member)
                            <div class="bg-white rounded-xl shadow-md border border-gray-100 p-5 sm:p-6 text-center
                                {{ $levelIndex === 0 ? 'w-56 sm:w-64' : 'w-44 sm:w-52' }}
                                hover:shadow-xl hover:border-brand-amber/30 hover:-translate-y-1 transition-all duration-300 cursor-pointer reveal-on-scroll"
                                 style="transition-delay: {{ $baseDelay + $loop->index * 0.1 }}s;">
                                <div class="flex justify-center mb-3">
                                    {{-- TODO: ganti dengan foto asli pengurus --}}
                                    <div class="w-{{ $levelIndex === 0 ? '20' : '16' }} h-{{ $levelIndex === 0 ? '20' : '16' }} sm:w-{{ $levelIndex === 0 ? '24' : '20' }} sm:h-{{ $levelIndex === 0 ? '24' : '20' }} rounded-full overflow-hidden ring-4 ring-brand-amber/20 group-hover:ring-brand-amber/40 transition-all duration-300">
                                        <img src="{{ $member['photo'] }}"
                                             alt="{{ $member['name'] }}"
                                             class="w-full h-full object-cover"
                                             loading="lazy">
                                    </div>
                                </div>
                                <h3 class="font-semibold text-brand-black {{ $levelIndex === 0 ? 'text-lg' : 'text-sm sm:text-base' }}">{{ $member['name'] }}</h3>
                                <p class="text-xs sm:text-sm text-gray-500 mt-0.5">{{ $member['position'] }}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
