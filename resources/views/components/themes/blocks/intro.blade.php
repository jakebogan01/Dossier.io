<section id="home" {{ $attributes->merge(['class' => 'template_one_intro anchor relative flex flex-col-reverse lg:flex-row relative bg-[#1C1F2D] p-[25px] sm:px-[5.3125rem] sm:pt-[5.1875rem] sm:pb-[7.375rem] overflow-hidden bg-no-repeat bg-left-top lg:bg-right-top bg-auto transition-all group']) }}>
    <div class="flex-1">

        {{-- menu --}}
        <div class="absolute top-16" role="menu">
            <button type="button" class="w-[2.8125rem] cursor-pointer" @click="menuStatus = !menuStatus">
                <span class="sr-only">Open main menu</span>
                <div class="bg-white h-[0.1875rem]"></div>
                <div class="bg-white h-[0.1875rem] mt-1.5 w-9 transition-transform duration-300" :class="{ 'translate-x-[9px] delay-200': menuStatus, 'delay-800': !menuStatus }"></div>
                <div class="bg-white h-[0.1875rem] mt-1.5 w-[1.6875rem] transition-transform  duration-300" :class="{ 'translate-x-[18px] delay-100': menuStatus, 'delay-700': !menuStatus }"></div>
                <div class="bg-white h-[0.1875rem] mt-1.5 w-4 transition-transform duration-300" :class="{ 'translate-x-[29px]': menuStatus, 'delay-600': !menuStatus }"></div>
            </button>
        </div>

        {{-- introduction of user --}}
        <div class="text-[36px] 570:text-[46px] xl:text-[3.375rem] font-black text-white sm:text-gray-400 mr-0 mt-[100px] transition-all"
             data-aos="fade-right"
             data-aos-delay="300">
            <h1 class="leading-[1.1] tracking-wider whitespace-nowrap sm:group-hover:text-white transition-colors">
                HELLO, I’M<br>
                FOO<br>
                AND THIS…<br>
                IS MY LEGACY
            </h1>
        </div>

        <div class="flex font-black my-[3.125rem]">
            <dl class="mt-5 grid grid-cols-3 gap-20">
                <div
                    data-aos="fade-right"
                    data-aos-delay="300">
                    <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">24</dt>
                    <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">CLIENTS</dd>
                </div>
                <div
                    data-aos="fade-right"
                    data-aos-delay="200">
                    <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">32</dt>
                    <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">PROJECTS</dd>
                </div>
                <div
                    data-aos="fade-right"
                    data-aos-delay="100">
                    <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">06</dt>
                    <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">TOOLS</dd>
                </div>
            </dl>
        </div>

        <div>
            <a href="#">
                <button type="button" class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-black text-white bg-[#4046FF] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[200px] w-full tracking-widest">
                    LETS TALK
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </a>
        </div>

    </div>

    {{-- users profile picture --}}
    <div
        class="flex-1 flex justify-center 570:justify-start lg:justify-end pt-20 lg:pt-10"
        data-aos="zoom-in"
        data-aos-duration="700">
        <div class="profile_picture flex items-center justify-center w-[255px] h-[255px] 570:w-[351px] 570:h-[351px] lg:w-[440px] lg:h-[440px] xl:w-[481px] xl:h-[481px] rounded-full transition-all">
            <img class="inline-block w-[210px] w-[210px] 570:w-[293px] 570:h-[293px] lg:w-[360px] lg:h-[360px] xl:w-[402px] xl:h-[402px] rounded-full transition-all" src="https://avatars.githubusercontent.com/u/66225768?v=4" alt="Picture of ">
        </div>
    </div>

</section>
