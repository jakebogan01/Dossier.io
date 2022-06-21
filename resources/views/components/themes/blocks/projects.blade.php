@aware(['user'])

@if(count($user->projects) >= 1 && !$user->checkProjectStatuses())
    <section
        id="projects"
        {{ $attributes->merge(['class' => 'template_one_projects anchor flex relative bg-[#1C1F2D] overflow-hidden group']) }}>
        <div
            x-data="{
                skip: 1,
                atBeginning: false,
                atEnd: false,
                next() {
                    this.to((current, offset) => current + (offset * this.skip))
                },
                prev() {
                    this.to((current, offset) => current - (offset * this.skip))
                },
                to(strategy) {
                    let slider = this.$refs.slider
                    let current = slider.scrollLeft
                    let offset = slider.firstElementChild.getBoundingClientRect().width
                    slider.scrollTo({ left: strategy(current, offset), behavior: 'smooth' })
                },
                focusableWhenVisible: {
                    'x-intersect:enter'() {
                        this.$el.removeAttribute('tabindex')
                    },
                    'x-intersect:leave'() {
                        this.$el.setAttribute('tabindex', '-1')
                    },
                },
                disableNextAndPreviousButtons: {
                    'x-intersect:enter.threshold.05'() {
                        let slideEls = this.$el.parentElement.children

                        // If this is the first slide.
                        if (slideEls[0] === this.$el) {
                            this.atBeginning = true
                        // If this is the last slide.
                        } else if (slideEls[slideEls.length-1] === this.$el) {
                            this.atEnd = true
                        }
                    },
                    'x-intersect:leave.threshold.05'() {
                        let slideEls = this.$el.parentElement.children

                        // If this is the first slide.
                        if (slideEls[0] === this.$el) {
                            this.atBeginning = false
                        // If this is the last slide.
                        } else if (slideEls[slideEls.length-1] === this.$el) {
                            this.atEnd = false
                        }
                    },
                },
            }"
            class="flex flex-col w-full">
            <div x-on:keydown.right="next"
                x-on:keydown.left="prev"
                tabindex="0"
                role="region"
                aria-labelledby="carousel-label"
                class="relative">
                <h2
                    id="carousel-label"
                    class="sr-only"
                    hidden>
                    Projects
                </h2>
                <span
                    id="carousel-content-label tracking-wider"
                    class="sr-only"
                    hidden>
                    My Projects
                </span>
                <h2
                    class="absolute pl-[25px] sm:pl-16 mb-8 mt-12 text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] font-black tracking-wider z-20 sm:group-hover:text-white sm:Ztransition-all"
                    data-aos="fade-right"
                    data-aos-anchor-placement="bottom-bottom">
                    MY WORK
                </h2>
                <ul x-ref="slider"
                    tabindex="0"
                    role="listbox"
                    aria-labelledby="carousel-content-label"
                    class="flex w-full overflow-x-hidden snap-x snap-mandatory max-h-[550px] min-h-[550px] h-full">

                    @foreach($user->projects as $project)
                        @if($project->public)
                            {{-- project --}}
                            <x-themes.blocks.components.project-item :project="$project"></x-themes.blocks.components.project-item>
                            @break
                        @endif
                    @endforeach
                </ul>
                @if(count($user->projects) >= 2)
                    <div class="flex justify-between">
                        <div
                            x-on:click="prev"
                            :aria-disabled="atBeginning"
                            :tabindex="atEnd ? -1 : 0"
                            :class="{ 'opacity-50 cursor-not-allowed': atBeginning }"
                            class="flex-1 flex items-center bg-[#2B3046] py-[35px] pl-[82px] group cursor-pointer"
                            data-aos="fade-right"
                            data-aos-delay="250"
                            data-aos-anchor-placement="bottom-bottom">
                            <button
                                aria-label="back"
                                class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] sm:group-hover:bg-[#575cff]"
                                type="button">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                                </span>
                                <span class="sr-only">
                                    Skip to previous slide page
                                </span>
                            </button>
                            <span class="hidden md:block ml-16 text-[#656A84] text-base font-black sm:group-hover:text-[#B1B7D6]">
                                PREVIOUS
                            </span>
                        </div>
                        <div
                            x-on:click="next"
                            :aria-disabled="atEnd"
                            :tabindex="atEnd ? -1 : 0"
                            :class="{ 'opacity-50 cursor-not-allowed': atEnd }"
                            class="flex-1 flex justify-end items-center bg-[#272C41] py-[35px] pr-[82px] group cursor-pointer"
                            data-aos="fade-left"
                            data-aos-delay="250"
                            data-aos-anchor-placement="bottom-bottom">
                            <span class="hidden md:block mr-16 text-[#656A84] text-base font-black sm:group-hover:text-[#B1B7D6]">
                                NEXT
                            </span>
                            <button
                                aria-label="next"
                                class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] sm:group-hover:bg-[#575cff]"
                                type="button">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                                </span>
                                <span class="sr-only">
                                    Skip to next slide page
                                </span>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif
