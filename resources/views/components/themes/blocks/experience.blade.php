@aware(['user'])

@if(count($user->experiences) >= 1)
    <section id="experience" {{ $attributes->merge(['class' => 'anchor relative bg-[#1C1F2D] px-[25px] sm:px-[5.3125rem] pb-40 pt-12 sm:py-40 text-[#B1B7D6] text-base leading-loose overflow-hidden bg-no-repeat bg-bottom lg:bg-right-bottom bg-auto group']) }} style="background-image: url('{{ (count($user->projects) >= 1) ? '/images/themes/svg/background-pattern-2.svg' : '' }}');">
        <h2 class="mb-8 text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] font-black tracking-wider leading-none mb-16 sm:transition-all sm:group-hover:text-white" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom">
            EXPERIENCES
        </h2>
        <div class="hidden lg:block absolute left-[49.85%] border-2 border-[#363A4D] h-full mt-12" data-aos="fade-up"></div>

        @foreach($user->experiences as $key => $experience)
            @if($loop->first)
                {{--first left timeline--}}
                <x-themes.blocks.components.left-experience-item :experience="$experience">
                    <div class="-ml-[13px] lg:mx-auto -translate-y-[88px] sm:-translate-y-[28px] lg:translate-x-[5px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="69" viewBox="0 0 21 69"><g transform="translate(0 48)"><rect width="10" height="50" transform="translate(5 -48)" class="fill-current text-[#1c1f2d]"/><circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b"/><circle cx="4.5" cy="4.5" r="4.5" transform="translate(6 6)" fill="#1c1f2d"/></g></svg>
                    </div>
                </x-themes.blocks.components.left-experience-item>
            @elseif($loop->odd)
                {{--left timeline--}}
                <x-themes.blocks.components.left-experience-item :experience="$experience">
                    <div class="-ml-[13px] lg:mx-auto -translate-y-[65px] sm:-translate-y-[1px] lg:translate-x-[5px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[1.3125rem] h-[1.3125rem]" viewBox="0 0 21 21"><circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" /><circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" /></svg>
                    </div>
                </x-themes.blocks.components.left-experience-item>
            @else
                {{--right timeline--}}
                <x-themes.blocks.components.right-experience-item :experience="$experience"></x-themes.blocks.components.right-experience-item>
            @endif
        @endforeach
    </section>
@endif
