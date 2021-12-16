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
                    <button @click="slideOver = false" type="button"
                        class="text-gray-300 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                        <span class="sr-only">Close panel</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-col h-full py-6 overflow-y-scroll bg-white shadow-xl">
                    <div class="px-4 sm:px-6">
                        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                            Panel title
                        </h2>
                    </div>
                    <div class="relative flex-1 px-4 mt-6 sm:px-6">
                        <!-- Replace with your content -->

                        <!-- /End replace -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
