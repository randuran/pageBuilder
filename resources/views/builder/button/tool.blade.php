@props(['dropdown' => false, 'btn' => false])

@switch($btn)
    @case('alert')
        @php
            $style = 'bg-yellow-300 text-black hover:bg-yellow-400';
        @endphp
    @break

    @case('close')
        @php
            $style = 'text-gray-600 bg-gray-200  hover:bg-red-500 hover:text-white disabled:bg-gray-300';
        @endphp
    @break

    @default
        @php
        $style = 'text-gray-600 bg-gray-200  hover:bg-blue-500 hover:text-white';
        @endphp

@endswitch
<div class="relative">
    <button {{ $attributes }} type="button"
        class="flex items-center justify-center w-8 h-8 p-2 transition-all duration-200 rounded-full {{ $style }}">
        {{ $icon }}
    </button>

    @if ($dropdown)
        {{ $dropdown }}
    @endif
</div>
