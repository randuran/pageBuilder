@auth
    <div x-show="toolbar" x-transition
        class="absolute top-0 z-50 flex justify-center px-2 pt-1 space-x-3 text-white transform bg-black rounded-md right-10">
        <div>
            <button wire:click="newComponent" type="button">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
        </div>
        <div>
            <button wire:click="newComponent" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z" />
                </svg>
            </button>
        </div>

        <div>
            <button wire:click="remove" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" width="16" height="16" fill="currentColor"
                    class="bi bi-trash" viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </button>
        </div>
    </div>
@else
@endauth
