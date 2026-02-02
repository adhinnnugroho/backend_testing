@props(['href' => '#', 'active' => false])

<div class="h-full relative group">
    <a href="{{ $href }}" 
       class="{{ $active ? 'bg-orange-600 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} px-4 h-full font-medium text-sm flex items-center transition duration-150 ease-in-out cursor-pointer">
       {{ $slot }}
    </a>
    @if(isset($dropdown))
        <div class="absolute top-full left-0 w-48 bg-white text-gray-800 shadow-lg border border-gray-200 z-50 hidden group-hover:block">
            {{ $dropdown }}
        </div>
    @endif
</div>
