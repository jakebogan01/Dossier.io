{{--bg-[#555C7E]--}}

<div class="relative w-[15.625rem] bg-[#4046FF] px-7 pb-[1.875rem] pt-3 text-base font-bold leading-loose text-white space-y-7">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center w-[3.375rem] h-[3.375rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="#4046FF">
            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
        </svg>
    </div>
    <h3 class="text-2xl">
        UI & UX
    </h3>
    <p class="leading-loose">
        {{ $slot }}
    </p>
    <a href="#" class="flex items-center">
        View more
        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
    </a>
</div>
