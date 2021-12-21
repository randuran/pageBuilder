{{-- <div class="absolute w-full px-4 py-4 bg-white border-4 border-gray-200 md:2/4 lg:w-2/5 -bottom-24"
    x-show="editable == true">
    ddd
</div> --}}

<div class="absolute z-50 flex items-start p-6 bg-white shadow-md lg:w-2/5 -top-36" x-show="editable == true">
    <div class="flex-1 min-w-0">
        <form action="#">
            <div class="border-b border-gray-200 focus-within:border-indigo-600">
                <label for="comment" class="sr-only">Add your comment</label>
                <textarea rows="3" name="comment" id="comment"
                    class="block w-full p-0 pb-2 border-0 border-b border-transparent resize-none focus:ring-0 focus:border-indigo-600 sm:text-sm"
                    placeholder="Add your comment..."></textarea>
            </div>
            <div class="flex justify-between pt-2">
                <div class="flex items-center space-x-5">
                    <div class="flow-root">
                        <button type="button"
                            class="inline-flex items-center justify-center w-10 h-10 -m-2 text-gray-400 rounded-full hover:text-gray-500">
                            <!-- Heroicon name: outline/paper-clip -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            <span class="sr-only">Attach a file</span>
                        </button>
                    </div>
                    <div class="flow-root">
                        <div>
                            <label id="listbox-label" class="sr-only">
                                Your mood
                            </label>
                            <div x-data="{color:false}" class="relative">
                                <button @click="color = !color" type="button"
                                    class="relative inline-flex items-center justify-center w-10 h-10 -m-2 text-gray-400 rounded-full hover:text-gray-500"
                                    aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                                    <span class="flex items-center justify-center">
                                        <!-- Placeholder label, show/hide based on listbox state. -->
                                        <span>
                                            <!-- Heroicon name: outline/emoji-happy -->
                                            <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span class="sr-only">
                                                Add your mood
                                            </span>
                                        </span>
                                        <!-- Selected item label, show/hide based on listbox state. -->
                                        <span>
                                            <div
                                                class="flex items-center justify-center w-8 h-8 bg-red-500 rounded-full">
                                                <!-- Heroicon name: solid/fire -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-white"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <span class="sr-only">
                                                Excited
                                            </span>
                                        </span>
                                    </span>
                                </button>


                                <ul x-show="color" x-transition:enter="" x-transition:enter-start=""
                                    x-transition:enter-end="" x-transition:leave="transition ease-in duration-100"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    class="absolute z-10 py-3 -ml-6 text-base bg-white rounded-lg shadow w-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:ml-auto sm:w-64 sm:text-sm"
                                    tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                    aria-activedescendant="listbox-option-5">
                                    <li class="relative px-3 py-2 bg-white cursor-default select-none"
                                        id="listbox-option-0" role="option">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-8 h-8 bg-red-500 rounded-full">
                                                <!-- Heroicon name: solid/fire -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-white"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
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

                                    <li class="relative px-3 py-2 bg-white cursor-default select-none"
                                        id="listbox-option-1" role="option">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-8 h-8 bg-pink-400 rounded-full">
                                                <!-- Heroicon name: solid/heart -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-white"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
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


                                    <li class="relative px-3 py-2 bg-white cursor-default select-none"
                                        id="listbox-option-2" role="option">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-8 h-8 bg-green-400 rounded-full">
                                                <!-- Heroicon name: solid/emoji-happy -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-white"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
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

                                    <li class="relative px-3 py-2 bg-white cursor-default select-none"
                                        id="listbox-option-3" role="option">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-8 h-8 bg-yellow-400 rounded-full">
                                                <!-- Heroicon name: solid/emoji-sad -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-white"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
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


                                    <li class="relative px-3 py-2 bg-white cursor-default select-none"
                                        id="listbox-option-4" role="option">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full">
                                                <!-- Heroicon name: solid/thumb-up -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-white"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                </svg>
                                            </div>
                                            <span class="block ml-3 font-medium truncate">
                                                Thumbsy
                                            </span>
                                        </div>
                                    </li>


                                    <li class="relative px-3 py-2 bg-white cursor-default select-none"
                                        id="listbox-option-5" role="option">
                                        <div class="flex items-center">
                                            <div
                                                class="flex items-center justify-center w-8 h-8 bg-transparent rounded-full">
                                                <!-- Heroicon name: solid/x -->
                                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Post
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
