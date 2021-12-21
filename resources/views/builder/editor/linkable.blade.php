@auth
    <div class="relative" x-data="{editable: false}">
        <x-builder.editableButton />

        <div @click="editable = !editable">
            {{ $slot }}
        </div>
    </div>
@else
    <div></div>
@endauth
