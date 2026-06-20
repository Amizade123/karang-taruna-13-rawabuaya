<nav x-data="{ open: false }" class="bg-black text-brand-white relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            {{-- Logo + Nama --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <img src="/images/logo/logo.png" alt="Karang Taruna 13 Rawa Buaya" class="w-10 h-10 rounded-full object-cover">
                <span class="font-semibold text-lg hidden sm:block">Karang Taruna 13 Rawa Buaya</span>
                <span class="sm:hidden flex flex-col leading-tight">
                    <span class="font-semibold text-base">Karang</span>
                    <span class="font-semibold text-sm -mt-0.5">Taruna 13</span>
                </span>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center space-x-1">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-nav-link>
                <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">Tentang Kami</x-nav-link>
                <x-nav-link href="{{ route('activity.index') }}" :active="request()->routeIs('activity.*')">Kegiatan</x-nav-link>
                <x-nav-link href="{{ route('program.index') }}" :active="request()->routeIs('program.*')">Program Kerja</x-nav-link>
                <x-nav-link href="{{ route('gallery.index') }}" :active="request()->routeIs('gallery.*')">Galeri</x-nav-link>
                <x-nav-link href="{{ route('organization.index') }}" :active="request()->routeIs('organization.*')">Struktur Organisasi</x-nav-link>
                <x-nav-link href="{{ route('contact.index') }}" :active="request()->routeIs('contact.*')">Kontak</x-nav-link>
            </div>

            {{-- Mobile Hamburger --}}
            <button @click="open = !open" class="md:hidden p-2 rounded-md text-brand-white hover:text-brand-amber transition-all duration-150 hover:scale-110 focus:outline-none">
                <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-black border-t border-white/10 relative z-50">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <x-mobile-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">Tentang Kami</x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('activity.index') }}" :active="request()->routeIs('activity.*')">Kegiatan</x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('program.index') }}" :active="request()->routeIs('program.*')">Program Kerja</x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('gallery.index') }}" :active="request()->routeIs('gallery.*')">Galeri</x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('organization.index') }}" :active="request()->routeIs('organization.*')">Struktur Organisasi</x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('contact.index') }}" :active="request()->routeIs('contact.*')">Kontak</x-mobile-nav-link>
        </div>
    </div>
</nav>
