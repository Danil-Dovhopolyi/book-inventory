<div x-data="{ open: false }" @click.away="open = false" class="relative">
    <button @click="open = !open" class="text-gray-600 focus:outline-none">
        {{ auth()->user()->name }}
        <svg class="h-4 w-4 inline-block ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <div x-show.transition.duration.100ms="open" class="absolute mt-2 bg-white border border-gray-300 rounded shadow-lg py-2 w-48 right-0">
        <a wire:click="logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
            {{ __('Logout') }}
        </a>
    </div>
</div>
