@props(['content', 'key'])

@auth
    <div x-data="{ key: @entangle('content.key'), content: @entangle('content.old'), new: @entangle('content.new')}"
        class="flex items-start space-x-4">
        <div class="flex-1 min-w-0" x-init="
                            content = '{{ $content }}',
                            key = '{{ $key }}'
                            ">
            <form wire:submit.prevent='updateContent' class="relative">
                <div
                    class="overflow-hidden border border-gray-300 rounded-lg shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                    <textarea wire:model.defer="content.new" rows="3" name="comment" id="comment"
                        class="block w-full py-3 border-0 resize-none focus:ring-0 sm:text-sm" x-model="content"></textarea>
                    <div class="py-2" aria-hidden="true">
                        <div class="py-px">
                            <div class="h-9"></div>
                        </div>
                    </div>
                </div>

                <div class="absolute inset-x-0 bottom-0 flex justify-between py-2 pl-3 pr-2">
                    <div class="flex-shrink-0">
                        <button @click="editor = false" type="submit"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-900 border border-transparent rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endauth
