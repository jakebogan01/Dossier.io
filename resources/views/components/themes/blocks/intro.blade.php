@aware(['user'])

<section id="home" {{ $attributes->merge(['class' => 'anchor relative flex flex-col-reverse lg:flex-row relative bg-[#1C1F2D] p-[25px] sm:px-[5.3125rem] sm:pt-[5.1875rem] sm:pb-[7.375rem] overflow-hidden bg-no-repeat bg-left-top lg:bg-right-top bg-auto transition-all group']) }} style="background-image: url('/images/themes/svg/background-pattern.svg');">
    <div class="flex-1">
        <div class="absolute top-16" role="menu">
            <button @click="menuStatus = !menuStatus" type="button" aria-label="open menu" class="w-[2.8125rem] cursor-pointer">
                <span class="sr-only">
                    Open main menu
                </span>
                <span class="block" data-aos="fade-right">
                    <div class="bg-white h-[0.1875rem]"></div>
                </span>
                <span class="block" data-aos="fade-right" data-aos-delay="50">
                    <div class="bg-white h-[0.1875rem] mt-1.5 w-9 transition-transform duration-300" :class="{ 'translate-x-[9px] delay-200': menuStatus, 'delay-800': !menuStatus }"></div>
                </span>
                <span class="block" data-aos="fade-right" data-aos-delay="100">
                    <div class="bg-white h-[0.1875rem] mt-1.5 w-[1.6875rem] transition-transform duration-300" :class="{ 'translate-x-[18px] delay-100': menuStatus, 'delay-700': !menuStatus }"></div>
                </span>
                <span class="block" data-aos="fade-right" data-aos-delay="150">
                    <div class="bg-white h-[0.1875rem] mt-1.5 w-4 transition-transform duration-300" :class="{ 'translate-x-[29px]': menuStatus, 'delay-600': !menuStatus }"></div>
                </span>
            </button>
        </div>
        <div class="text-[36px] 570:text-[46px] xl:text-[3.375rem] font-black text-white sm:text-gray-400 mr-0 mt-[100px] transition-all" data-aos="fade-right" data-aos-delay="300">
            <h1 class="leading-[1.1] tracking-wider max-w-[550px] sm:group-hover:text-white transition-colors">
                HELLO, I’M<br>
                {{ strtoupper($user->profile->portfolio_name) ?: 'YOUR NAME' }}<br>
                {{ strtoupper($user->profile->job_position) }}
            </h1>
        </div>
        <div class="flex font-black my-[3.125rem]">
            <dl class="mt-5 grid grid-cols-3 gap-20">
                @if($user->profile->total_clients)
                    <div data-aos="fade-right" data-aos-delay="300">
                        <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">
                            {{ $user->profile->total_clients ?: 0 }}
                        </dt>
                        <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">
                            CLIENTS
                        </dd>
                    </div>
                @endif
                @if($user->profile->total_tools > 0)
                    <div data-aos="fade-right" data-aos-delay="200">
                        <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">
                            {{ $user->profile->total_tools ?: 0 }}
                        </dt>
                        <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">
                            TOOLS
                        </dd>
                    </div>
                @endif
                @if($user->projects->count() > 0)
                    <div data-aos="fade-right" data-aos-delay="100">
                        <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">
                            {{ $user->projects->count() ?: 0 }}
                        </dt>
                        <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">
                            PROJECTS
                        </dd>
                    </div>
                @endif
            </dl>
        </div>
        @if(!is_null($user->contact))
            <div data-aos="zoom-in-right" data-aos-delay="400">
                <a href="#contact">
                    <button type="button" aria-label="call out" class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-black text-white bg-[#4046FF] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[200px] w-full tracking-widest transition-colors">
                        LETS TALK
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                    </button>
                </a>
            </div>
        @endif
    </div>
    <aside class="flex-1 flex justify-center sm:justify-start lg:justify-end mt-28 lg:mt-10" data-aos="zoom-in" data-aos-duration="700">
        @if(!is_null($user->profile->profile_photo_path))
            <div class="flex items-center justify-center w-[255px] h-[255px] 570:w-[351px] 570:h-[351px] lg:w-[440px] lg:h-[440px] xl:w-[481px] xl:h-[481px] rounded-full transition-all" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659); box-shadow: 0 0 4.125rem #FFE26B;">
                <img class="inline-block w-[210px] h-[210px] 570:w-[293px] 570:h-[293px] lg:w-[360px] lg:h-[360px] xl:w-[402px] xl:h-[402px] rounded-full object-cover transition-all" src="{{ $user->profile->profile_photo_path }}" alt="Picture of {{ $user->profile->portfolio_name}}" loading="eager" data-aos="zoom-in" data-aos-delay="150">
            </div>
        @else
            <div class="relative rounded-full  bg-red-300 w-[255px] h-[255px] 570:w-[351px] 570:h-[351px] lg:w-[440px] lg:h-[440px] xl:w-[481px] xl:h-[481px] transition-all" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659); box-shadow: 0 0 4.125rem #FFE26B;">
                <img class="inline-block absolute -left-3 -top-5 570:-left-4 570:-top-7 lg:-top-8 lg:-left-5 xl:-top-9 xl:-left-6" src="/images/themes/png/default-profile-image.png" alt="Default Avatar Image" loading="eager" data-aos="zoom-in" data-aos-delay="150">
            </div>
        @endif
    </aside>
</section>
