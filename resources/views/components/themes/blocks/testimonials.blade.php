@aware(['user'])

@if(count($user->testimonials) !== 0)
    <section id="testimonials"{{ $attributes->merge(['class' => 'testimonials anchor flex flex-col relative py-28 bg-[#1C1F2D] group']) }}>
        <img class="absolute bottom-24 left-0 z-10" src="/images/themes/svg/background-pattern.svg" role="presentation" alt="decoration" loading="eager">
        <div class="relative mx-auto py-12 px-[25px] max-w-7xl sm:px-[85px] lg:py-32 z-20">
            <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
                <aside data-aos="fade-right" class="space-y-5 sm:space-y-4">
                    <h2 class="text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] font-black tracking-wider leading-none sm:transition-all sm:group-hover:text-white">
                        TRIBUTES
                    </h2>
                    <p class="text-[#B1B7D6] text-base font-bold leading-loose">
                        Nulla quam felis, enim faucibus proin velit, ornare id pretium. Augue ultrices sed arcu condimentum vestibulum suspendisse. Volutpat eu faucibus vivamus eget bibendum cras.
                    </p>
                </aside>
                <div class="lg:col-span-2">
                    <ul role="list" class="sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:gap-x-8">
                        @foreach($user->testimonials as $key => $testimonial)
                            @switch($key)
                                @case(0)
                                    <x-themes.blocks.components.testimonial-block class="card" animateType="fade-up" animateDelay="100" :user="$testimonial"></x-themes.blocks.components.testimonial-block>
                                @break

                                @case(1)
                                    <x-themes.blocks.components.testimonial-block class="card mt-12 sm:mt-[100px] sm:transition-all" animateType="fade-up" animateDelay="200" :user="$testimonial"></x-themes.blocks.components.testimonial-block>
                                @break

                                @case(2)
                                    <x-themes.blocks.components.testimonial-block class="card mt-12 sm:mt-0" animateType="fade-up" animateDelay="300" :user="$testimonial"></x-themes.blocks.components.testimonial-block>
                                @break

                                @case(3)
                                    <x-themes.blocks.components.testimonial-block class="card mt-12 sm:mt-[100px] sm:transition-all" animateType="fade-up" animateDelay="400" :user="$testimonial"></x-themes.blocks.components.testimonial-block>
                                @break
                            @endswitch
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endif
