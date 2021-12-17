<div>
    <div>
        @if (isset($page))
            @forelse(auth()->user() ? $page->containers : $page->containers->where('status', true) as $container)
                @php
                    $component = strtolower($container->component->name);
                    $path = strtolower($container->component->path);
                @endphp


                <div x-data="{toolbar: false}" @mouseover="toolbar = true" @mouseleave="toolbar = false"
                    wire:key="block-{{ $container->id }}">
                    @livewire("$path.$component", ['container' => $container], key('container.' . $container->id))
                </div>

            @empty
                @auth
                    <div class="mt-20 text-center">
                        <p class="mb-4 text-2xl font-normal text-gray-400">{{ __('Insert the first component') }}</p>
                        <button wire:click="insertComponent()" type="button"
                            class="relative inline-flex items-center px-2 py-2 text-sm font-medium bg-gray-600 rounded-md hover:bg-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-5 h-5 text-white bi bi-plus-square" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                        </button>
                    </div>
                @endauth
            @endforelse
        @endif
    </div>

    <div>
        @auth
            @if ($componentSelector)
                <x-builder.componentModal wire:model='componentSelector'>
                    <div class="px-5 mt-5">
                        {{-- <label for="email" class="block text-sm font-medium text-gray-700">Email</label> --}}
                        <div class="relative shadow-sm outline-none rounded-2xl focus:outline-none">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>

                            <input type="text" wire:model="search" id="search"
                                class="block w-full py-3 pl-10 border rounded-lg focus:outline-none sm:text-sm"
                                placeholder="Search component">
                        </div>
                    </div>
                    <div class="px-5 overflow-hidden bg-white shadow sm:rounded-md">
                        <div class="grid grid-cols-1 gap-4 my-5 sm:grid-cols-2">
                            @forelse ($searchResult as $component)
                                <div wire:click="assignComponent({{ $component }})"
                                    class="relative flex items-center px-6 py-5 border border-gray-300 rounded-lg shadow-sm cursor-pointer hover:shadow-md space-x-3bg-white hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <div class="flex-1 min-w-0">
                                        <div class=" focus:outline-none">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            <p class="text-base font-medium text-gray-900">
                                                {{ $component->name }}
                                            </p>
                                            <p class="text-sm text-gray-800 truncate">
                                                {{ $component->description }}
                                            </p>
                                            <hr class="my-2">
                                            <p class="mt-1 text-xs font-medium text-gray-500 ">
                                                Tags: Blog, Header, Post
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No components
                            @endforelse
                        </div>
                    </div>
                </x-builder.componentModal>
            @endif
            @if ($mustSave)
                <x-builder.mode />
            @endif
        @endauth
    </div>

    @auth
        <div>
            @livewire('sidebar', ['page' => $page])
        </div>
    @endauth
</div>
