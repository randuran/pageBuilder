<div>
    @if (isset($page))
        @forelse($page->components()->get() as $component)
            @livewire("$component->folder.$component->name", ['class' => 'mt-4', 'component' => $component, 'page' =>
            $page],
            key("component-$component->id"))
        @empty
            @auth
                <div class="container mt-10">
                    <button wire:click="$set('displayContainerModal', true)" type="button"
                        class="relative block w-full p-12 text-center border-2 border-dotted rounded-lg hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mx-auto text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>


                        <span class="block mt-2 font-medium text-gray-900 text-md">
                            {{ __('The page is empty, add a container') }}
                        </span>
                    </button>
                </div>
            @endauth

        @endforelse
    @endif


    @auth
        <x-modal.dialog wire:model='displayContainerModal'>
            <x-slot name="title"></x-slot>
            <x-slot name="content">
                <div class="row">
                    @forelse($components as $component)

                        <div wire:click="addComponent({{ $component }})"
                            class="p-4 mb-3 bg-white border border-gray-300 rounded-lg shadow-sm cursor-pointer hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">

                            <div class="inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-300 " fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>

                            </div>

                            <div class="inline-block">
                                <p class="font-bold">{{ $component->title }}</p>
                                <p> {{ $component->description }}</p>
                            </div>

                        </div>

                    @empty

                        <div class="text-center">
                            <p>No component found, run artisan builder:sync to sync the components</p>
                        </div>
                    @endforelse
                </div>
            </x-slot>
            <x-slot name="footer">
                <button wire:click="$set('displayContainerModal', false)">{{ __('Cancel') }}</button>
            </x-slot>
        </x-modal.dialog>
    @endauth

</div>
