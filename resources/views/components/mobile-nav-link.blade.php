@props(['active' => false, 'href' => '#'])

<a href="{{ $href }}"
   @class([
       'block px-3 py-2 rounded-md text-base font-medium transition-colors duration-150',
       'text-brand-amber' => $active,
       'text-brand-white hover:text-brand-amber' => !$active,
   ])>
    {{ $slot }}
</a>
