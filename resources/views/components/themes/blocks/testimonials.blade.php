<div class="flex relative bg-[#1C1F2D] mx-[1.5625rem] overflow-hidden bg-no-repeat bg-right-bottom bg-auto" style="background-image: url('/images/themes/svg/background-pattern-2.svg')">

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

        <div
            x-on:keydown.right="next"
            x-on:keydown.left="prev"
            tabindex="0"
            role="region"
            aria-labelledby="carousel-label"
            class="relative">

            <h2 id="carousel-label" class="sr-only" hidden>Carousel</h2>

            <span id="carousel-content-label" class="sr-only" hidden>Carousel</span>

            <ul
                x-ref="slider"
                tabindex="0"
                role="listbox"
                aria-labelledby="carousel-content-label"
                class="flex w-full overflow-hidden hover:overflow-x-auto snap-x snap-mandatory">

                <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                    <div class="flex">
                        <div class="relative flex justify-center items-center">
                            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                            <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                        </div>
                        <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                            <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                <blockquote>
                                    <div>
                                        <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                        </svg>
                                        <p class="mt-6 text-base font-bold text-[#B1B7D6] leading-loose">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.
                                        </p>
                                    </div>
                                    <footer class="mt-6">
                                        <p class="text-[22px] font-bold text-white">
                                            Judith Black
                                        </p>
                                        <p class="text-[17px] font-bold text-[#B1B7D6]">
                                            CEO at PureInsights
                                        </p>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </li>

                <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                    <div class="flex">
                        <div class="relative flex justify-center items-center">
                            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                            <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                        </div>
                        <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                            <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                <blockquote>
                                    <div>
                                        <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                        </svg>
                                        <p class="mt-6 text-base font-bold text-[#B1B7D6] leading-loose">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.
                                        </p>
                                    </div>
                                    <footer class="mt-6">
                                        <p class="text-[22px] font-bold text-white">
                                            Judith Black
                                        </p>
                                        <p class="text-[17px] font-bold text-[#B1B7D6]">
                                            CEO at PureInsights
                                        </p>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </li>

                <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                    <div class="flex">
                        <div class="relative flex justify-center items-center">
                            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                            <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                        </div>
                        <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                            <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                <blockquote>
                                    <div>
                                        <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                        </svg>
                                        <p class="mt-6 text-base font-bold text-[#B1B7D6] leading-loose">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.
                                        </p>
                                    </div>
                                    <footer class="mt-6">
                                        <p class="text-[22px] font-bold text-white">
                                            Judith Black
                                        </p>
                                        <p class="text-[17px] font-bold text-[#B1B7D6]">
                                            CEO at PureInsights
                                        </p>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </li>

                <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                    <div class="flex">
                        <div class="relative flex justify-center items-center">
                            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                            <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                        </div>
                        <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                            <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                <blockquote>
                                    <div>
                                        <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                        </svg>
                                        <p class="mt-6 text-base font-bold text-[#B1B7D6] leading-loose">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.
                                        </p>
                                    </div>
                                    <footer class="mt-6">
                                        <p class="text-[22px] font-bold text-white">
                                            Judith Black
                                        </p>
                                        <p class="text-[17px] font-bold text-[#B1B7D6]">
                                            CEO at PureInsights
                                        </p>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </li>

                <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                    <div class="flex">
                        <div class="relative flex justify-center items-center">
                            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                            <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                        </div>
                        <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                            <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                <blockquote>
                                    <div>
                                        <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                        </svg>
                                        <p class="mt-6 text-base font-bold text-[#B1B7D6] leading-loose">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.
                                        </p>
                                    </div>
                                    <footer class="mt-6">
                                        <p class="text-[22px] font-bold text-white">
                                            Judith Black
                                        </p>
                                        <p class="text-[17px] font-bold text-[#B1B7D6]">
                                            CEO at PureInsights
                                        </p>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </li>

                <li x-bind="disableNextAndPreviousButtons" class="flex snap-start w-full shrink-0 flex flex-col items-center justify-center" role="option">
                    <div class="flex">
                        <div class="relative flex justify-center items-center">
                            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                            <img class="object-cover max-w-[341px] w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
                        </div>
                        <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                            <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-0 lg:py-20 leading-loose">
                                <blockquote>
                                    <div>
                                        <svg class="h-10 w-10 text-[#71758D] opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                        </svg>
                                        <p class="mt-6 text-base font-bold text-[#B1B7D6] leading-loose">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.
                                        </p>
                                    </div>
                                    <footer class="mt-6">
                                        <p class="text-[22px] font-bold text-white">
                                            Judith Black
                                        </p>
                                        <p class="text-[17px] font-bold text-[#B1B7D6]">
                                            CEO at PureInsights
                                        </p>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </li>


            </ul>

            <div class="flex justify-between">
                <div
                    x-on:click="prev"
                    :aria-disabled="atBeginning"
                    :tabindex="atEnd ? -1 : 0"
                    :class="{ 'opacity-50 cursor-not-allowed': atBeginning }"
                    class="flex-1 flex items-center bg-[#2B3046] py-[35px] pl-[82px] group cursor-pointer">
                    <!-- Prev Button -->
                    <button class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] group-hover:bg-[#575cff]" type="button">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </span>
                        <span class="sr-only">Skip to previous slide page</span>
                    </button>

                    <span class="ml-16 text-[#656A84] text-base font-black group-hover:text-[#B1B7D6]">
                                PREVIOUS
                            </span>
                </div>

                <div
                    x-on:click="next"
                    :aria-disabled="atEnd"
                    :tabindex="atEnd ? -1 : 0"
                    :class="{ 'opacity-50 cursor-not-allowed': atEnd }"
                    class="flex-1 flex justify-end items-center bg-[#272C41] py-[35px] pr-[82px] group cursor-pointer">
                    <!-- Next Button -->
                    <span class="mr-16 text-[#656A84] text-base font-black group-hover:text-[#B1B7D6]">
                                NEXT
                            </span>
                    <button class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] group-hover:bg-[#575cff]" type="button">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </span>
                        <span class="sr-only">Skip to next slide page</span>
                    </button>

                </div>
            </div>

        </div>
    </div>
</div>
