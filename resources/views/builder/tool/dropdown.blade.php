<div {{ $attributes }} x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    class="absolute z-10 py-3 -ml-6 text-base bg-white shadow w-60 ring-1 ring-black sm:ml-auto sm:w-64 sm:text-sm"
    tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-5">
    <div class="w-60 ">{{ $slot }}</div>
</div>
