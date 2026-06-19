@extends('layouts.app')

@section('title', 'Program Kerja - Karang Taruna 13 Rawa Buaya')

@section('meta_desc', 'Program kerja Karang Taruna 13 Rawa Buaya — Cek Kesehatan Gratis dan Senam Pagi.')

@section('content')
    {{-- Page Header --}}
    <section class="relative bg-brand-black text-brand-white py-20 sm:py-24 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-amber/10 transform -skew-x-12 translate-x-10"></div>
            <div class="absolute bottom-0 left-0 w-1/4 h-1/2 bg-brand-amber/5 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block px-4 py-1.5 bg-brand-amber/15 text-brand-amber text-sm font-semibold rounded-full mb-4">Program Kerja</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">Program Kerja</h1>
            <div class="w-16 h-1 bg-brand-amber mx-auto mb-4 rounded-full"></div>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Program kerja yang sedang dipersiapkan untuk anggota dan warga Karang Taruna 13 Rawa Buaya.
            </p>
        </div>
    </section>

    {{-- Program Cards --}}
    <section class="py-20 sm:py-24 bg-gray-50 reveal-on-scroll">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(empty($programsByField))
                <p class="text-center text-gray-400 py-16">Belum ada data program kerja.</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach($programsByField as $field => $programs)
                        @foreach($programs as $program)
                            <div class="relative p-6 md:p-7 bg-white rounded-2xl border border-dashed border-brand-amber/40 hover:border-brand-amber hover:shadow-xl transition-all duration-300">
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
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
