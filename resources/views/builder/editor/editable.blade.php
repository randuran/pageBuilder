@auth
    <div class="relative" x-data="{editableBar:false, editMode:false}">
        <div>
            <x-builder.editableBar />
        </div>
        <template x-if="editMode == true">
            <div x-data="{content: @entangle('option.'. $key .'.content')}">
                <div class="shadow-lg ring ring-gray-200 ring-offset-4 focus:outline-none"
                    x-on:blur='content = $event.target.innerHTML.replace(/<\/?[^>]+(>|$)/g, "").replace(/\s+/g, " ").trim(); editableBar = false; editMode = false'
                    {{ auth()->user() ? 'contenteditable=true' : '' }}>
                    {{ $slot }}
                </div>
            </div>
        </template>
        <template x-if="editMode == false">
            <div class="cursor-pointer" @click="editableBar = !editableBar">
                {{ $slot }}
            </div>
        </template>
    </div>
@else
    {{ $slot }}
@endauth
