<div style="background-image: url('/images/themes/svg/background-pattern.svg')" {{ $attributes->merge(['class' => 'relative flex flex-col-reverse 2300:flex-row relative bg-[#1C1F2D] px-[5.3125rem] pt-[2.1875rem] pb-[7.375rem] mx-[1.5625rem] overflow-hidden bg-no-repeat bg-top 2300:bg-right-top bg-auto']) }}>
    <div class="flex-1">
        <div class="absolute top-8">
            {{-- menu --}}
            <button type="button" class="w-[2.8125rem] space-y-1.5 cursor-pointer" @click="test = !test">
                <span class="sr-only">Open main menu</span>
                <div class="bg-white h-[0.1875rem]"></div>
                <div class="bg-white h-[0.1875rem] w-9 transition-transform duration-300" :class="{ 'translate-x-[9px] delay-200': test, 'delay-800': !test }"></div>
                <div class="bg-white h-[0.1875rem] w-[1.6875rem] transition-transform  duration-300" :class="{ 'translate-x-[18px] delay-100': test, 'delay-700': !test }"></div>
                <div class="bg-white h-[0.1875rem] w-4 transition-transform duration-300" :class="{ 'translate-x-[29px]': test, 'delay-600': !test }"></div>
            </button>
        </div>
        <div class="text-[3.375rem] font-black text-white mr-[300px] 2300:mr-0 mt-[4.375rem]">
            <h1 class="leading-[1.1] tracking-wider whitespace-nowrap">
                HELLO, I’M<br>
                FOO<br>
                AND THIS…<br>
                IS MY LEGACY
            </h1>
        </div>
        <div class="flex font-black my-[3.125rem]">

            <dl class="mt-5 grid grid-cols-1 gap-20 sm:grid-cols-3">
                <div>
                    <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">24</dt>
                    <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">CLIENTS</dd>
                </div>
                <div>
                    <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">32</dt>
                    <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">PROJECTS</dd>
                </div>
                <div>
                    <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">06</dt>
                    <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">TOOLS</dd>
                </div>
            </dl>
        </div>
        <div>
            <a href="">
                <button type="button" class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-black text-white bg-[#4046FF] hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[200px] w-full tracking-widest">
                    LETS TALK
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </a>
        </div>
    </div>

    {{-- users profile picture --}}
    <div class="flex-1 pt-[100px] 2300:pt-10 2300:pl-[165px]">
        <div class="flex items-center justify-center w-[351px] h-[351px] 2300:w-[30.0625rem] 2300:h-[30.0625rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659); box-shadow: 0 0 4.125rem #FFE26B;">
            <img class="inline-block w-[293px] h-[293px] 2300:w-[25.125rem] 2300:h-[25.125rem] rounded-full" src="https://avatars.githubusercontent.com/u/66225768?v=4" alt="">
        </div>
    </div>
</div>
