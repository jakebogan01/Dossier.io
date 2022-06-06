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
                class="absolute pl-[25px] sm:pl-16 mb-8 mt-12 text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] font-black tracking-wider z-20 sm:group-hover:text-white transition-all"
                data-aos="fade-right"
                data-aos-anchor-placement="bottom-bottom">
                MY WORK
            </h2>
            <ul x-ref="slider"
                tabindex="0"
                role="listbox"
                aria-labelledby="carousel-content-label"
                class="flex w-full overflow-x-hidden snap-x snap-mandatory max-h-[550px] min-h-[550px] h-full">

                {{-- project --}}
                <li
                    x-bind="disableNextAndPreviousButtons"
                    class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover"
                    role="option"
                    style="background-image: url('https://avatars.githubusercontent.com/u/66225768?v=4')">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 px-[25px] sm:pl-16"
                        style="background-color: rgba(0,0,0,0.5)">
                        <h3
                            class="flex items-center font-bold text-[23px] mb-6 opacity-70"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="50">
                            Art app
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                            </span>
                        </h3>
                        <p
                            class="font-bold text-base sm:max-w-[300px] leading-loose mb-6"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="100">
                            App designed for people’s wellness.
                            There are many functionalities
                            Implemented for better engagement. Food,
                            chat, events and leader boards are the
                            major functionalities.
                        </p>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="150">
                                VIEW PROJECT
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="200">
                                VIEW CODE
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                    </div>
                </li>

                {{-- project --}}
                <li
                    x-bind="disableNextAndPreviousButtons"
                    class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover"
                    role="option"
                    style="background-image: url('https://avatars.githubusercontent.com/u/66225768?v=4')">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 px-[25px] sm:pl-16"
                        style="background-color: rgba(0,0,0,0.5)">
                        <h3
                            class="flex items-center font-bold text-[23px] mb-6 opacity-70"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="50">
                            Art app
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                            </span>
                        </h3>
                        <p
                            class="font-bold text-base sm:max-w-[300px] leading-loose mb-6"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="100">
                            App designed for people’s wellness.
                            There are many functionalities
                            Implemented for better engagement. Food,
                            chat, events and leader boards are the
                            major functionalities.
                        </p>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="150">
                                VIEW PROJECT
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="200">
                                VIEW CODE
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                    </div>
                </li>

                {{-- project --}}
                <li
                    x-bind="disableNextAndPreviousButtons"
                    class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover"
                    role="option"
                    style="background-image: url('https://avatars.githubusercontent.com/u/66225768?v=4')">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 px-[25px] sm:pl-16"
                        style="background-color: rgba(0,0,0,0.5)">
                        <h3
                            class="flex items-center font-bold text-[23px] mb-6 opacity-70"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="50">
                            Art app
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                            </span>
                        </h3>
                        <p
                            class="font-bold text-base sm:max-w-[300px] leading-loose mb-6"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="100">
                            App designed for people’s wellness.
                            There are many functionalities
                            Implemented for better engagement. Food,
                            chat, events and leader boards are the
                            major functionalities.
                        </p>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="150">
                                VIEW PROJECT
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="200">
                                VIEW CODE
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                    </div>
                </li>

                {{-- project --}}
                <li
                    x-bind="disableNextAndPreviousButtons"
                    class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover"
                    role="option"
                    style="background-image: url('https://avatars.githubusercontent.com/u/66225768?v=4')">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 px-[25px] sm:pl-16"
                        style="background-color: rgba(0,0,0,0.5)">
                        <h3
                            class="flex items-center font-bold text-[23px] mb-6 opacity-70"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="50">
                            Art app
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                            </span>
                        </h3>
                        <p
                            class="font-bold text-base sm:max-w-[300px] leading-loose mb-6"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="100">
                            App designed for people’s wellness.
                            There are many functionalities
                            Implemented for better engagement. Food,
                            chat, events and leader boards are the
                            major functionalities.
                        </p>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="150">
                                VIEW PROJECT
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="200">
                                VIEW CODE
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                    </div>
                </li>

                {{-- project --}}
                <li
                    x-bind="disableNextAndPreviousButtons"
                    class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover"
                    role="option"
                    style="background-image: url('https://avatars.githubusercontent.com/u/66225768?v=4')">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 px-[25px] sm:pl-16"
                        style="background-color: rgba(0,0,0,0.5)">
                        <h3
                            class="flex items-center font-bold text-[23px] mb-6 opacity-70"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="50">
                            Art app
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                            </span>
                        </h3>
                        <p
                            class="font-bold text-base sm:max-w-[300px] leading-loose mb-6"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="100">
                            App designed for people’s wellness.
                            There are many functionalities
                            Implemented for better engagement. Food,
                            chat, events and leader boards are the
                            major functionalities.
                        </p>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="150">
                                VIEW PROJECT
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="200">
                                VIEW CODE
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                    </div>
                </li>

                {{-- project --}}
                <li
                    x-bind="disableNextAndPreviousButtons"
                    class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover"
                    role="option"
                    style="background-image: url('https://avatars.githubusercontent.com/u/66225768?v=4')">
                    <div
                        class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 px-[25px] sm:pl-16"
                        style="background-color: rgba(0,0,0,0.5)">
                        <h3
                            class="flex items-center font-bold text-[23px] mb-6 opacity-70"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="50">
                            Art app
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                            </span>
                        </h3>
                        <p
                            class="font-bold text-base sm:max-w-[300px] leading-loose mb-6"
                            data-aos="fade-right"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="100">
                            App designed for people’s wellness.
                            There are many functionalities
                            Implemented for better engagement. Food,
                            chat, events and leader boards are the
                            major functionalities.
                        </p>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="150">
                                VIEW PROJECT
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                        <a
                            href="#"
                            class="block">
                            <button
                                type="button"
                                class="inline-flex justify-between items-center text-base font-bold text-white"
                                data-aos="fade-right"
                                data-aos-anchor-placement="bottom-bottom"
                                data-aos-delay="200">
                                VIEW CODE
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </a>
                    </div>
                </li>
            </ul>
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
        </div>
    </div>
</section>
