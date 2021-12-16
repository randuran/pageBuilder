@props(['id' => null, 'maxWidth' => null, 'title' => false, 'footer' => false])

<x-builder-baseModal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="">
        @if ($title)
            <div class="text-lg">
                {{ $title }}
            </div>
        @endif

        <div>
            {{ $slot }}
        </div>
    </div>

    @if ($footer)
        <div class="px-6 py-4 text-right bg-gray-100">
            {{ $footer }}
        </div>
    @endif
</x-builder-baseModal>
