<form class="block relative flex justify-center items-center pl-1" x-data="{ message: @entangle('test') }">
    <div class="absolute bg-[#a85de8] w-[800px] h-[800px] rounded-full z-30 shadow-2xl transform"
         x-show="!message" x-cloak
         x-transition:enter="transform transition-transform ease-in-out duration-300"
         x-transition:enter-start="scale-100"
         x-transition:enter-end="scale-0"
         x-transition:leave="transform transition-transform ease-in-out duration-300"
         x-transition:leave-start="scale-0"
         x-transition:leave-end="scale-0">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#1F0682] h-20 w-20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white h-20 w-20 rounded-full animate-ping transform origin-bottom-right"></div>
        <div class="absolute top-1/2 left-0 transform translate-x-24 translate-y-20 font-medium text-white max-w-[325px] cursor-default">
            <h3 class="font-bold text-lg">
                Click Here!
            </h3>
            <p class="pt-2">
                View your portfolio and share with others.
            </p>
        </div>
    </div>
    <a href="{{ route('theme-one', auth()->user()->profile->slug ) }}" target="_blank" class="mt-1 relative z-40">
        <button type="button" class="text-gray-500 group rounded-full inline-flex items-center text-base font-medium sm:hover:outline-none sm:hover:ring-2 sm:hover:ring-offset-2 sm:hover:ring-indigo-500" aria-expanded="false">
            <img
                wire:mouseover.prevent="update()"
                @mouseenter="message = 1;"
                class="h-8 w-8 rounded-full"
                src="{{ $profileImage }}"
                alt="User Avatar">
        </button>
    </a>
</form>
