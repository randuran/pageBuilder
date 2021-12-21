@auth
    <div class="relative" x-data="{editableBar:false, editMode:false}">
        <x-builder.editableBar :option="$option" />
        <div>
            <template x-if="editMode == true">
                <div x-data="{content: @entangle('option.'. $key .'.label')}">
                    <span
                        x-on:blur='content = $event.target.innerHTML.replace(/<\/?[^>]+(>|$)/g, "").replace(/\s+/g, " ").trim(); editableBar = false; editMode = false'
                        {{ auth()->user() ? 'contenteditable=true' : '' }}>
                        {{ $slot }}
                    </span>
                </div>
            </template>
            <template x-if="editMode == false">
                <span @click="editableBar = true">
                    {{ $slot }}
                </span>
            </template>
        </div>
    </div>
@else
    {{ $slot }}
@endauth
