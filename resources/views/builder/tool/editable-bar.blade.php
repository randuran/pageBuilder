<div x-data="bar()" x-show="editableBar"
    class="absolute z-50 flex justify-center px-2 py-2 space-x-2 text-black align-middle transform bg-white border-2 border-gray-300 rounded-full shadow-lg -top-16">

    {{-- Content --}}
    @if (isset($option['label']))
        <x-builder.toolbar-item @click="editMode = !editMode; menu=0">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
            </x-slot>
        </x-builder.toolbar-item>
    @endif

    {{-- font size --}}
    @if (isset($option['size']))
        <x-builder.toolbar-item @click="toggleOption(2)">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                    class="bi bi-file-font-fill" viewBox="0 0 16 16">
                    <path
                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5.057 4h5.886L11 6h-.5c-.18-1.096-.356-1.192-1.694-1.235l-.298-.01v6.09c0 .47.1.582.903.655v.5H6.59v-.5c.799-.073.898-.184.898-.654V4.755l-.293.01C5.856 4.808 5.68 4.905 5.5 6H5l.057-2z" />
                </svg>
            </x-slot>
            <x-slot name="dropdown">
                <x-builder.tool-dropdown x-show="menu == 2">
                    <li class="relative px-3 py-2 bg-white cursor-pointer select-none" id="listbox-option-0"
                        role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-red-500 rounded-full">
                                <!-- Heroicon name: solid/fire -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Excited
                            </span>
                        </div>
                    </li>

                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-1" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-pink-400 rounded-full">
                                <!-- Heroicon name: solid/heart -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Loved
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-2" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-green-400 rounded-full">
                                <!-- Heroicon name: solid/emoji-happy -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Happy
                            </span>
                        </div>
                    </li>

                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-3" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-yellow-400 rounded-full">
                                <!-- Heroicon name: solid/emoji-sad -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Sad
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-4" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full">
                                <!-- Heroicon name: solid/thumb-up -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Thumbsy
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-5" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-transparent rounded-full">
                                <!-- Heroicon name: solid/x -->
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                I feel nothing
                            </span>
                        </div>
                    </li>
                </x-builder.tool-dropdown>
            </x-slot>
        </x-builder.toolbar-item>
    @endif

    {{-- font weight --}}
    @if (isset($option['weight']))
        <x-builder.toolbar-item @click="toggleOption(3)">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                    class="bi bi-file-font-fill" viewBox="0 0 16 16">
                    <path
                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5.057 4h5.886L11 6h-.5c-.18-1.096-.356-1.192-1.694-1.235l-.298-.01v6.09c0 .47.1.582.903.655v.5H6.59v-.5c.799-.073.898-.184.898-.654V4.755l-.293.01C5.856 4.808 5.68 4.905 5.5 6H5l.057-2z" />
                </svg>
            </x-slot>
            <x-slot name="dropdown">
                <x-builder.tool-dropdown x-show="menu == 3">
                    <li class="relative px-3 py-2 bg-white cursor-pointer select-none" id="listbox-option-0"
                        role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-red-500 rounded-full">
                                <!-- Heroicon name: solid/fire -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Excited
                            </span>
                        </div>
                    </li>

                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-1" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-pink-400 rounded-full">
                                <!-- Heroicon name: solid/heart -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Loved
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-2" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-green-400 rounded-full">
                                <!-- Heroicon name: solid/emoji-happy -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Happy
                            </span>
                        </div>
                    </li>

                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-3" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-yellow-400 rounded-full">
                                <!-- Heroicon name: solid/emoji-sad -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Sad
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-4" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full">
                                <!-- Heroicon name: solid/thumb-up -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Thumbsy
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-5" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-transparent rounded-full">
                                <!-- Heroicon name: solid/x -->
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                I feel nothing
                            </span>
                        </div>
                    </li>
                </x-builder.tool-dropdown>
            </x-slot>
        </x-builder.toolbar-item>
    @endif

    {{-- Text color --}}
    @if (isset($option['color']))
        <x-builder.toolbar-item @click="toggleOption(4)">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z"
                        clip-rule="evenodd" />
                </svg>
            </x-slot>
            <x-slot name="dropdown">
                <x-builder.tool-dropdown x-show="menu == 4">
                    <li class="relative px-3 py-2 bg-white cursor-pointer select-none" id="listbox-option-0"
                        role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-red-500 rounded-full">
                                <!-- Heroicon name: solid/fire -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Excited
                            </span>
                        </div>
                    </li>

                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-1" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-pink-400 rounded-full">
                                <!-- Heroicon name: solid/heart -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Loved
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-2" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-green-400 rounded-full">
                                <!-- Heroicon name: solid/emoji-happy -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Happy
                            </span>
                        </div>
                    </li>

                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-3" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-yellow-400 rounded-full">
                                <!-- Heroicon name: solid/emoji-sad -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Sad
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-4" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full">
                                <!-- Heroicon name: solid/thumb-up -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Thumbsy
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-5" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-transparent rounded-full">
                                <!-- Heroicon name: solid/x -->
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                I feel nothing
                            </span>
                        </div>
                    </li>
                </x-builder.tool-dropdown>
            </x-slot>
        </x-builder.toolbar-item>
    @endif

    {{-- Background --}}
    @if (isset($option['background']))
        <x-builder.toolbar-item @click="toggleOption(5)">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07zM8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                </svg>
            </x-slot>
            <x-slot name="dropdown">
                <x-builder.tool-dropdown class="overflow-y-auto" x-show="menu == 5">
                    <button type="button" class="relative px-3 py-4 cursor-pointer select-none bg-gray-50"></button>
                    <button type="button" class="relative px-3 py-4 bg-gray-100 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-gray-200 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-gray-300 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-gray-400 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-gray-500 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-gray-600 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-gray-700 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-gray-800 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-gray-900 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 cursor-pointer select-none bg-blue-50"></button>
                    <button type="button" class="relative px-3 py-4 bg-blue-100 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-blue-200 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-blue-300 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-blue-400 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-blue-500 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-blue-600 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-blue-700 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-blue-800 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-blue-900 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 cursor-pointer select-none bg-red-50"></button>
                    <button type="button" class="relative px-3 py-4 bg-red-100 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-red-200 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-red-300 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-red-400 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-red-500 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-red-600 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-red-700 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-red-800 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-red-900 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 cursor-pointer select-none bg-yellow-50"></button>
                    <button type="button" class="relative px-3 py-4 bg-yellow-100 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-yellow-200 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-yellow-300 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-yellow-400 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-yellow-500 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-yellow-600 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-yellow-700 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-yellow-800 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-yellow-900 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 cursor-pointer select-none bg-green-50"></button>
                    <button type="button" class="relative px-3 py-4 bg-green-100 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-green-200 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-green-300 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-green-400 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-green-500 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-green-600 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-green-700 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-green-800 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-green-900 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 cursor-pointer select-none bg-purple-50"></button>
                    <button type="button" class="relative px-3 py-4 bg-purple-100 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-purple-200 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-purple-300 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-purple-400 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-purple-500 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-purple-600 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-purple-700 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-purple-800 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-purple-900 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 cursor-pointer select-none bg-indigo-50"></button>
                    <button type="button" class="relative px-3 py-4 bg-indigo-100 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-indigo-200 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-indigo-300 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-indigo-400 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-indigo-500 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-indigo-600 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-indigo-700 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-indigo-800 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-indigo-900 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 cursor-pointer select-none bg-pink-50"></button>
                    <button type="button" class="relative px-3 py-4 bg-pink-100 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-pink-200 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-pink-300 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-pink-400 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-pink-500 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-pink-600 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-pink-700 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-pink-800 cursor-pointer select-none"></button>
                    <button type="button" class="relative px-3 py-4 bg-pink-900 cursor-pointer select-none"></button>

                </x-builder.tool-dropdown>
            </x-slot>
        </x-builder.toolbar-item>
    @endif

    {{-- Anchor --}}
    @if (isset($option['anchor']))
        <x-builder.toolbar-item @click="toggleOption(6)">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                    <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                </svg>
            </x-slot>
            <x-slot name="dropdown">
                <x-builder.tool-dropdown x-show="menu == 6">
                    <li class="relative px-3 py-2 bg-white cursor-pointer select-none" id="listbox-option-0"
                        role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-red-500 rounded-full">
                                <!-- Heroicon name: solid/fire -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Excited
                            </span>
                        </div>
                    </li>

                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-1" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-pink-400 rounded-full">
                                <!-- Heroicon name: solid/heart -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Loved
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-2" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-green-400 rounded-full">
                                <!-- Heroicon name: solid/emoji-happy -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Happy
                            </span>
                        </div>
                    </li>

                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-3" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-yellow-400 rounded-full">
                                <!-- Heroicon name: solid/emoji-sad -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Sad
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-4" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full">
                                <!-- Heroicon name: solid/thumb-up -->
                                <svg class="flex-shrink-0 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                Thumbsy
                            </span>
                        </div>
                    </li>


                    <li class="relative px-3 py-2 bg-white select-none" id="listbox-option-5" role="option">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-8 h-8 bg-transparent rounded-full">
                                <!-- Heroicon name: solid/x -->
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="block ml-3 font-medium truncate">
                                I feel nothing
                            </span>
                        </div>
                    </li>
                </x-builder.tool-dropdown>
            </x-slot>
        </x-builder.toolbar-item>
    @endif

    {{-- Upload image --}}
    @if (isset($option['image']))
        <x-builder.toolbar-item>
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z" />
                </svg>
            </x-slot>
        </x-builder.toolbar-item>
    @endif

    {{-- <x-builder.toolbar-item btn="alert" @click="editableBar = false; editMode = false; menu = false">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd" />
            </svg>
        </x-slot>
    </x-builder.toolbar-item> --}}

    {{-- close --}}
    <x-builder.toolbar-item btn="close" @click="editableBar = false; editMode = false; menu = false">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </x-slot>
    </x-builder.toolbar-item>

    <script>
        function bar() {
            return {
                selected: 0,
                menu: 0,
                toggleOption(option) {
                    if (this.menu == option) {
                        return this.menu = 0;
                    }
                    return this.menu = option
                }
            }
        }
    </script>

</div>
