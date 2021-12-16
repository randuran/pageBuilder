@props(['id' => null, 'maxWidth' => null])

<builder-modal.base :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg">
            {{ $title }}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 text-right bg-gray-100">
        {{ $footer }}
    </div>
</builder-modal.base>
