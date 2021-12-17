<div wire:ignore.self x-show="slideOver" class="fixed inset-0 z-30 overflow-hidden" aria-labelledby="slide-over-title"
    role="dialog" aria-modal="true">
    <div x-show="slideOver" class="absolute inset-0 overflow-hidden">

        <div x-show="slideOver" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
        <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">

            <div x-show="slideOver" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                class="relative w-screen max-w-md">

                <div x-show="slideOver" x-transition:enter="ease-in-out duration-500"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute top-0 left-0 flex pt-4 pr-2 -ml-8 sm:-ml-10 sm:pr-4">
                </div>

                <div class="flex flex-col h-full overflow-y-scroll bg-white shadow-xl">

                    <div class="px-4 py-6 bg-white sm:px-6">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-bold text-black" id="slide-over-title">
                                {{ __('Pages') }}
                            </h2>
                            <div class="flex items-center ml-3 h-7">
                                <button @click="slideOver = false" type="button"
                                    class="text-black rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                                    <span class="sr-only">Close panel</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-black">
                                Get started by filling in the information below to create your new project.
                            </p>
                        </div>
                    </div>

                    <div class="px-4">

                        <div>
                            <div class="border-b border-gray-200">
                                <nav class="flex -mb-px space-x-4" aria-label="Tabs">
                                    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                                    <a href="#"
                                        class="px-1 py-4 text-sm font-medium text-black border-b-2 border-black whitespace-nowrap"
                                        aria-current="page">

                                        {{ __('All') }}
                                    </a>

                                    <a href="#"
                                        class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 whitespace-nowrap">
                                        {{ __('Unpublished') }}
                                    </a>

                                    <a href="#"
                                        class="px-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 whitespace-nowrap">
                                        {{ __('Deleted') }}
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
