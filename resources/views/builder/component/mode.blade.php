<div class="fixed z-50 p-3 bg-white border-4 border-black rounded-lg shadow-xl right-5 bottom-10">
    <p class="font-bold text-black">
        {{ __('This page has unpublished content') }}
        <button wire:click='updatePage'
            class="block w-full py-2 mt-4 text-sm font-semibold text-center text-white bg-gray-800 border border-gray-800 rounded-md hover:bg-gray-900">
            {{ __('Publish changes') }}</button>
    </p>
</div>
