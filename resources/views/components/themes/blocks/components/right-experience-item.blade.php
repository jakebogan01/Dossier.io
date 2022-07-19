<div class="pb-12 sm:pb-8 lg:pb-0 lg:mb-8 ml-[10px] sm:ml-0 flex justify-between items-center w-full right-timeline border-l-4 border-[#363A4D] lg:border-none sm:transition-all">
    <div class="hidden lg:block order-1 w-5/12"></div>
    <div class="z-20 flex items-center order-1 shadow-xl w-8 h-8 rounded-full">
        <div data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
            {{ $slot }}
        </div>
    </div>
    <div class="order-1 w-full lg:w-5/12">
        <div class="hidden sm:flex flex-row-reverse">
            <div class="flex-1" data-aos="fade-left" data-aos-anchor-placement="bottom-bottom" data-aos-delay="225">
                <h4 class="mt-2 text-2xl text-white font-bold sm:transition-all">
                    {{ $experience->title }}
                </h4>
            </div>
            <div class="min-w-[152px]"></div>
        </div>
        <div class="flex flex-col-reverse sm:flex-row-reverse sm:transition-all">
            <div class="flex-1 pt-4" data-aos="fade-left" data-aos-anchor-placement="bottom-bottom" data-aos-delay="225">
                <h4 class="sm:hidden mt-2 text-2xl text-white font-bold">
                    {{ $experience->title }}
                </h4>
                <p class="text-[#B1B7D6] font-bold sm:transition-all">
                    {{ $experience->description }}
                </p>
            </div>
            <div class="flex" data-aos="fade-left" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                <div class="pr-[3.125rem] -mt-1.5 sm:transition-all">
                    <span class="block font-black text-[2.75rem] text-[#FFCF7B] leading-none">
                        {{ $experience->date->format('Y') }}
                    </span>
                    <span class="block text-sm font-bold text-base">
                        {{ $experience->date->format('F') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
