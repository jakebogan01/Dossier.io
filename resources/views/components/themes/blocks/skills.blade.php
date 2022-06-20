@aware(['user'])

@if ($user->skill)
    <section
        id="skills"
        {{ $attributes->merge(['class' => 'anchor flex flex-col relative bg-[#1C1F2D] pt-12 group']) }}>
        <div class="relative mx-auto py-12 max-w-7xl sm:px-[85px] lg:pt-40 z-20">
            <div class="space-y-12 flex flex-col-reverse lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
                <div class="lg:col-span-2 mt-10 sm:mt-24">
                    <ul
                        role="list"
                        class="sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:gap-x-8">
                        @foreach($user->skill->skills as $key => $skill)
                            @switch($key)
                                @case(1)
                                    <x-themes.blocks.components.skill-block class="bg-[#4046FF] sm:bg-[#555C7E] mt-0 sm:mt-12 card relative sm:hover:bg-[#4046FF] h-[300px] p-[30px] sm:transition-all" animateType="zoom-in-right" animateDelay="100" :user="$skill"></x-themes.blocks.components.skill-block>
                                @break

                                @case(2)
                                    <x-themes.blocks.components.skill-block class="bg-[#555C7E] card relative sm:hover:bg-[#4046FF] h-[300px] p-[30px] sm:transition-all" animateType="zoom-in-left" :user="$skill"></x-themes.blocks.components.skill-block>
                                @break

                                @case(3)
                                    <x-themes.blocks.components.skill-block class="bg-[#4046FF] sm:bg-[#555C7E] mt-0 sm:mt-12 card relative sm:hover:bg-[#4046FF] h-[300px] p-[30px] sm:transition-all" animateType="zoom-in-right" animateDelay="300" :user="$skill"></x-themes.blocks.components.skill-block>
                                @break

                                @case(4)
                                    <x-themes.blocks.components.skill-block class="bg-[#555C7E] card relative sm:hover:bg-[#4046FF] h-[300px] p-[30px] sm:transition-all" animateType="zoom-in-left" animateDelay="200" :user="$skill"></x-themes.blocks.components.skill-block>
                                @break
                            @endswitch
                        @endforeach
                    </ul>
                </div>
                <aside class="space-y-5 sm:space-y-4 px-[25px] pb-[65px] sm:pb-0 sm:px-0 text-[#B1B7D6] font-bold text-base leading-loose">
                    <div
                        data-aos="fade-left"
                        data-aos-delay="200"
                        data-aos-anchor-placement="bottom-bottom">
                        <h2 class="text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] pb-4 font-black tracking-wider leading-none sm:transition-all sm:group-hover:text-white">
                            TOP SKILLS
                        </h2>
                        <p class="text-[#B1B7D6] text-base font-bold leading-loose">
                            {{ $user->skill->introduction ?: 'Description needed' }}
                        </p>
                    </div>
                    <ul
                        role="list"
                        class="pt-8 space-y-7">
                        @foreach($user->skill->facts as $key => $fact)
                            <x-themes.blocks.components.fact-item :key="$key" :user="$fact"></x-themes.blocks.components.fact-item>
                        @endforeach
                    </ul>
                </aside>
            </div>
        </div>
    </section>
@endif
