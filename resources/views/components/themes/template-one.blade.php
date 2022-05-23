<div class="flex py-[3.125rem] px-[1.5625rem] font-lato" x-data="{ test: false }">

    <nav class="mt-10 transition-all duration-300 delay-500 overflow-hidden" :class="{ 'w-[58px]': test, 'w-0': !test }" x-cloak="test">
        <div class="space-y-12">
            <a href="#" class="block opacity-50 hover:opacity-100 transition-opacity" aria-current="page">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-700': test, 'translate-y-10 opacity-0 delay-250': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M27.309,0A27.309,27.309,0,1,0,54.617,27.309,27.309,27.309,0,0,0,27.309,0Zm0,12.585L40.643,22.948V42.032H31.469V30.513h-8.32V42.034H13.974V22.948Z" fill="#fff"/></svg>
            </a>

            <a href="#" class="block opacity-50 hover:opacity-100 transition-opacity">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-800': test, 'translate-y-10 opacity-0 delay-200': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M33.039,22.116H27.578V16.654h5.462m0,27.309H27.578V27.578h5.462M30.309,3A27.309,27.309,0,1,0,57.617,30.309,27.309,27.309,0,0,0,30.309,3Z" transform="translate(-3 -3)" fill="#fff"/></svg>
            </a>

            <a href="#" class="block opacity-50 hover:opacity-100 transition-opacity">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-900': test, 'translate-y-10 opacity-0 delay-150': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M22.96,42.1a17.569,17.569,0,0,1-12.385-5.067L22.96,24.8V7.5a17.3,17.3,0,1,1,0,34.6Z" transform="translate(4.305 2.508)" fill="#fff"/><path d="M56.117,28.809A27.309,27.309,0,1,1,28.809,1.5,27.308,27.308,0,0,1,56.117,28.809Zm-4.965,0A22.343,22.343,0,1,1,28.809,6.465,22.343,22.343,0,0,1,51.152,28.809Z" transform="translate(-1.5 -1.5)" fill="#fff" fill-rule="evenodd"/></svg>
            </a>

            <a href="#" class="block opacity-50 hover:opacity-100 transition-opacity">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1000': test, 'translate-y-10 opacity-0 delay-100': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M27.309,0A27.309,27.309,0,1,0,54.617,27.309,27.309,27.309,0,0,0,27.309,0ZM36.5,8.531a3.067,3.067,0,0,1,2.165.889l4.544,4.542a3.357,3.357,0,0,1-.188,4.735,3.356,3.356,0,0,1-4.735.19L33.74,14.345a3.357,3.357,0,0,1,.19-4.735,3.6,3.6,0,0,1,2.565-1.079Zm-7.489,6L38.1,23.619,23.328,38.384,14.24,29.3,29.008,14.533ZM11.882,31.016,21.468,40.6,9.482,43l2.4-11.985Z" fill="#fff"/></svg>
            </a>

            <a href="#" class="block opacity-50 hover:opacity-100 transition-opacity">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1100': test, 'translate-y-10 opacity-0 delay-50': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M27.309,0A27.309,27.309,0,1,0,54.617,27.309,27.309,27.309,0,0,0,27.309,0ZM25.218,12.855l1.173,5.4c-3.438.762-6.6,1.751-6.343,5.591h4.04V38.231H11.917V24.789c0-10.682,7.847-11.552,13.3-11.934Zm16.3,0,1.177,5.4c-3.438.762-6.6,1.751-6.343,5.591H40.4V38.231H28.225V24.789c0-10.682,7.844-11.552,13.3-11.934Z" fill="#fff"/></svg>
            </a>

            <a href="#" class="block opacity-50 hover:opacity-100 transition-opacity">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1200': test, 'translate-y-10 opacity-0': !test }" width="54.617" height="54.617" viewBox="0 0 54.617 54.617"><path d="M30.684,3.375A27.309,27.309,0,1,0,57.992,30.684,27.388,27.388,0,0,0,30.684,3.375Zm0,8.194a8.194,8.194,0,1,1-8.194,8.194,8.221,8.221,0,0,1,8.194-8.194Zm0,39.44A19.891,19.891,0,0,1,14.3,42.264C14.429,36.8,25.222,33.8,30.684,33.8S46.938,36.8,47.069,42.264A19.929,19.929,0,0,1,30.684,51.009Z" transform="translate(-3.375 -3.375)" fill="#fff"/></svg>
            </a>
        </div>
    </nav>

    <div class="flex-1 space-y-[3.125rem]">
        <div class="flex flex-col 2300:flex-row relative bg-[#1C1F2D] px-[5.3125rem] pt-[2.1875rem] pb-[7.375rem] mx-[1.5625rem] overflow-hidden bg-no-repeat bg-right-top bg-auto" style="background-image: url('/images/themes/svg/background-pattern.svg')">
            <div class="flex-1">
                <div class="mb-[4.375rem]">
                    {{-- menu --}}
                    <button type="button" class="w-[2.8125rem] space-y-1.5 cursor-pointer" @click="test = !test">
                        <span class="sr-only">Open main menu</span>
                        <div class="bg-white h-[0.1875rem]"></div>
                        <div class="bg-white h-[0.1875rem] w-9 transition-transform duration-300" :class="{ 'translate-x-[9px] delay-200': test, 'delay-800': !test }"></div>
                        <div class="bg-white h-[0.1875rem] w-[1.6875rem] transition-transform  duration-300" :class="{ 'translate-x-[18px] delay-100': test, 'delay-700': !test }"></div>
                        <div class="bg-white h-[0.1875rem] w-4 transition-transform duration-300" :class="{ 'translate-x-[29px]': test, 'delay-600': !test }"></div>
                    </button>
                </div>
                <div class="text-[3.375rem] font-black text-white">
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
                        <x-call-out-button></x-call-out-button>
                    </a>
                </div>
            </div>

            {{-- users profile picture --}}
            <div class="flex-1 pt-10 pl-[165px]">
                <div class="flex items-center justify-center w-[30.0625rem] h-[30.0625rem] rounded-full" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659); box-shadow: 0 0 4.125rem #FFE26B;">
                    <img class="inline-block w-[25.125rem] h-[25.125rem] rounded-full" src="https://avatars.githubusercontent.com/u/66225768?v=4" alt="">
                </div>
            </div>
        </div>

        <div class="flex flex-col 2300:flex-row justify-between relative bg-[#1C1F2D] px-[5.3125rem] pt-20 mx-[1.5625rem] overflow-hidden">
            <div class="flex-1 pr-20 text-[#B1B7D6] font-bold text-base leading-loose">
                <h2 class="mb-12 text-white text-[2.8rem] font-black leading-none -mt-2">
                    I AM
                </h2>
                <p class="leading-loose mb-10">
                    A junior web developer with a background in UI & UX.
                    I have a passion for learning new skills while expanding
                    my existing skill set. I have over 3 years of professional
                    experience.
                </p>
                <ul role="list" class="space-y-7">
                    <x-list-item>
                        learn to design myself. I always create my best.
                    </x-list-item>
                    <x-list-item>
                        Experimenting with new ideas and design trends is my daily habit.
                    </x-list-item>
                    <x-list-item>
                        Interaction and illustrations are areas more focused now.
                    </x-list-item>
                </ul>
            </div>

            <div class="flex">
                <div class="mr-12 space-y-12">
                    <x-card>
                        Expertise in UI & UX design. more focused on visual designs aspects.
                    </x-card>

                    <x-card>
                        Expertise in UI & UX design. more focused on visual designs aspects.
                    </x-card>
                </div>

                <div class="space-y-12">
                    <h2 class="text-xl text-white tracking-widest leading-none -mt-1 font-black pb-3">
                        TOP SKILLS
                    </h2>

                    <x-card>
                        Expertise in UI & UX design. more focused on visual designs aspects.
                    </x-card>

                    <x-card>
                        Expertise in UI & UX design. more focused on visual designs aspects.
                    </x-card>
                </div>
            </div>
        </div>

        <div class="relative bg-[#1C1F2D] px-[5.3125rem] py-20 mx-[1.5625rem] text-[#B1B7D6] text-base leading-loose overflow-hidden bg-no-repeat bg-right-bottom bg-auto" style="background-image: url('/images/themes/svg/background-pattern-2.svg')">

            <h2 class="mb-8 text-white text-[2.8rem] font-black leading-none mb-16">
                EXPERIENCES
            </h2>

            <div class="absolute left-[49.85%] border-2 border-[#363A4D] h-full mt-12"></div>

            <!-- left timeline -->
            <x-left-timeline></x-left-timeline>

            <!-- right timeline -->
            <x-right-timeline></x-right-timeline>

            <!-- left timeline -->
            <x-left-timeline></x-left-timeline>

            <!-- right timeline -->
            <x-right-timeline></x-right-timeline>

            <!-- left timeline -->
            <x-left-timeline></x-left-timeline>

            <!-- right timeline -->
            <x-right-timeline></x-right-timeline>

            <!-- left timeline -->
            <x-left-timeline></x-left-timeline>

        </div>
    </div>
    <div class="flex-1 space-y-[3.125rem]">

        <div class="flex relative bg-[#1C1F2D] mx-[1.5625rem] overflow-hidden">
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

                    <span id="carousel-content-label" class="sr-only" hidden>My Projects</span>

                    <h2 class="absolute pl-16 mb-8 mt-12 text-white text-[2.8rem] font-black tracking-wider z-20">
                        MY WORK
                    </h2>

                    <ul
                        x-ref="slider"
                        tabindex="0"
                        role="listbox"
                        aria-labelledby="carousel-content-label"
                        class="flex w-full overflow-hidden hover:overflow-x-auto snap-x snap-mandatory max-h-[550px] min-h-[550px] h-full">

                        <x-slide-show></x-slide-show>
                        <x-slide-show></x-slide-show>
                        <x-slide-show></x-slide-show>
                        <x-slide-show></x-slide-show>
                        <x-slide-show></x-slide-show>
                        <x-slide-show></x-slide-show>

                    </ul>

                    <div class="flex justify-between">
                        <div
                            x-on:click="prev"
                            :aria-disabled="atBeginning"
                            :tabindex="atEnd ? -1 : 0"
                            :class="{ 'opacity-50 cursor-not-allowed': atBeginning }"
                            class="flex-1 flex items-center bg-[#2B3046] py-[35px] pl-[82px] group cursor-pointer">
                            <!-- Prev Button -->
                            <x-left-arrow-button></x-left-arrow-button>

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
                            <x-right-arrow-button></x-right-arrow-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

                        <x-testimony-slide-show></x-testimony-slide-show>
                        <x-testimony-slide-show></x-testimony-slide-show>
                        <x-testimony-slide-show></x-testimony-slide-show>
                        <x-testimony-slide-show></x-testimony-slide-show>
                        <x-testimony-slide-show></x-testimony-slide-show>
                        <x-testimony-slide-show></x-testimony-slide-show>

                    </ul>

                    <div class="flex justify-between">
                        <div
                            x-on:click="prev"
                            :aria-disabled="atBeginning"
                            :tabindex="atEnd ? -1 : 0"
                            :class="{ 'opacity-50 cursor-not-allowed': atBeginning }"
                            class="flex-1 flex items-center bg-[#2B3046] py-[35px] pl-[82px] group cursor-pointer">
                            <!-- Prev Button -->
                            <x-left-arrow-button></x-left-arrow-button>

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
                            <x-right-arrow-button></x-right-arrow-button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex relative bg-[#1C1F2D] px-[5.3125rem] mx-[1.5625rem] overflow-hidden bg-no-repeat bg-left-bottom bg-auto" style="background-image: url('/images/themes/svg/background-pattern-2.svg')">
            <div class="relative">
                <div class="absolute inset-0">
                    <div class="absolute inset-y-0 left-0 w-1/2"></div>
                </div>
                <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
                    <div class="py-16 pr-4 sm:pr-6 lg:col-span-2 lg:pr-8 lg:py-24 xl:pr-12">
                        <div class="max-w-lg mx-auto">
                            <h2 class="text-[2.8rem] font-black text-white leading-none mb-8">
                                LET'S TALK
                            </h2>
                            <p class="mt-3 text-base font-bold leading-loose text-[#B1B7D6]">
                                Reach to me for any UI & UX, branding, campaigns, advertising and any creative works. Let’s discuss and make an awesome experience together.
                            </p>
                            <dl class="mt-16">
                                <div class="mt-6">
                                    <dt class="sr-only">Phone number</dt>
                                    <dd class="flex text-[18px] font-bold text-[#6F7490]">
                                        Ring me: +1 (555) 123-4567
                                    </dd>
                                </div>
                                <div class="mt-3">
                                    <dt class="sr-only">Email</dt>
                                    <dd class="flex text-[18px] font-bold text-[#6F7490]">
                                        Email me: support@example.com
                                    </dd>
                                </div>
                            </dl>
                            <div class="flex mt-10 space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><g transform="translate(-1443 -1983)"><circle cx="12.5" cy="12.5" r="12.5" transform="translate(1443 1983)" fill="#e2e7ff"/><path d="M2.13-7.03V-15.9L1.4-16.052a1.512,1.512,0,0,1-.608-.269.645.645,0,0,1-.231-.538v-1.313H2.13v-.635a4.674,4.674,0,0,1,.307-1.733,3.668,3.668,0,0,1,.883-1.324,3.974,3.974,0,0,1,1.4-.851,5.49,5.49,0,0,1,1.884-.3,5.43,5.43,0,0,1,.754.048,5.338,5.338,0,0,1,.721.156l-.065,1.626a.57.57,0,0,1-.086.285.575.575,0,0,1-.2.183.982.982,0,0,1-.264.1,1.241,1.241,0,0,1-.28.032A3.252,3.252,0,0,0,6.4-20.5a1.259,1.259,0,0,0-.576.307,1.38,1.38,0,0,0-.35.581,2.961,2.961,0,0,0-.118.91v.528H7.976v2.282H5.467v8.86Z" transform="translate(1451.859 2010.867)" fill="#1c1f2d"/></g></svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><g transform="translate(-1496 -1983)"><circle cx="12.5" cy="12.5" r="12.5" transform="translate(1496 1983)" fill="#e2e7ff"/><path d="M3.969-14.742v9H1.278v-9Zm.278-2.465a1.422,1.422,0,0,1-.13.6,1.588,1.588,0,0,1-.356.495,1.742,1.742,0,0,1-.525.339,1.63,1.63,0,0,1-.638.126,1.515,1.515,0,0,1-.616-.126,1.733,1.733,0,0,1-.508-.339,1.562,1.562,0,0,1-.347-.495,1.464,1.464,0,0,1-.126-.6,1.515,1.515,0,0,1,.126-.616,1.6,1.6,0,0,1,.347-.5,1.626,1.626,0,0,1,.508-.339,1.562,1.562,0,0,1,.616-.122,1.68,1.68,0,0,1,.638.122,1.638,1.638,0,0,1,.525.339,1.625,1.625,0,0,1,.356.5A1.472,1.472,0,0,1,4.247-17.208ZM8.335-13.77a6.538,6.538,0,0,1,.538-.451,3.152,3.152,0,0,1,.595-.352,3.529,3.529,0,0,1,.686-.226,3.68,3.68,0,0,1,.8-.082,3.151,3.151,0,0,1,1.306.256,2.711,2.711,0,0,1,.959.712,3.072,3.072,0,0,1,.59,1.085,4.5,4.5,0,0,1,.2,1.367v5.72H11.321v-5.72a1.574,1.574,0,0,0-.3-1.029,1.091,1.091,0,0,0-.894-.369,1.881,1.881,0,0,0-.829.187,3.336,3.336,0,0,0-.751.508v6.424H5.852v-9H7.519a.633.633,0,0,1,.66.451Z" transform="translate(1501.25 2008.185)" fill="#1c1f2d"/></g></svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><g transform="translate(-1543 -1984)"><circle cx="12.5" cy="12.5" r="12.5" transform="translate(1543 1984)" fill="#e2e7ff"/><path d="M7.54,13.15C4.3,14.123,4.3,11.529,3,11.2M12.079,15.1v-2.51a2.185,2.185,0,0,0-.61-1.693c2.036-.227,4.176-1,4.176-4.54a3.527,3.527,0,0,0-.972-2.431,3.288,3.288,0,0,0-.059-2.445s-.765-.227-2.536.96a8.677,8.677,0,0,0-4.54,0C5.769,1.25,5,1.477,5,1.477a3.288,3.288,0,0,0-.058,2.445,3.528,3.528,0,0,0-.973,2.451c0,3.515,2.14,4.287,4.176,4.54a2.185,2.185,0,0,0-.61,1.673V15.1" transform="translate(1546.177 1988.222)" fill="none" stroke="#1d202e" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></g></svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><g transform="translate(-1590 -1990)"><circle cx="12.5" cy="12.5" r="12.5" transform="translate(1590 1990)" fill="#e2e7ff"/><path d="M8.748.563a8.186,8.186,0,1,0,8.186,8.186A8.195,8.195,0,0,0,8.748.563ZM14.16,4.337a6.958,6.958,0,0,1,1.579,4.355,16.339,16.339,0,0,0-4.869-.225C10.681,8,10.5,7.6,10.256,7.094A9.314,9.314,0,0,0,14.16,4.337Zm-.777-.809A7.894,7.894,0,0,1,9.718,6.054,37.32,37.32,0,0,0,7.11,1.961a6.974,6.974,0,0,1,6.273,1.567Zm-7.607-1.1A44.612,44.612,0,0,1,8.368,6.475,26.079,26.079,0,0,1,1.9,7.327,7.017,7.017,0,0,1,5.776,2.431ZM1.756,8.759c0-.071,0-.143,0-.214a25.791,25.791,0,0,0,7.186-1c.2.392.391.789.567,1.187a10.83,10.83,0,0,0-5.959,4.7A6.964,6.964,0,0,1,1.756,8.759Zm2.7,5.516A9.834,9.834,0,0,1,9.988,9.893a29.063,29.063,0,0,1,1.492,5.3,6.978,6.978,0,0,1-7.023-.92Zm8.2.28A30.177,30.177,0,0,0,11.3,9.57a10.262,10.262,0,0,1,4.355.3,7,7,0,0,1-3,4.686Z" transform="translate(1593.752 1993.752)" fill="#1d1f2d"/></g></svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><g transform="translate(-1664 -1990)"><circle cx="12.5" cy="12.5" r="12.5" transform="translate(1664 1990)" fill="#e2e7ff"/><path d="M7.8,6.04a4,4,0,1,0,4,4A4,4,0,0,0,7.8,6.04Zm0,6.6a2.6,2.6,0,1,1,2.6-2.6,2.607,2.607,0,0,1-2.6,2.6Zm5.1-6.768a.933.933,0,1,1-.933-.933A.931.931,0,0,1,12.9,5.877Zm2.651.947a4.62,4.62,0,0,0-1.261-3.271,4.65,4.65,0,0,0-3.271-1.261c-1.289-.073-5.152-.073-6.44,0A4.643,4.643,0,0,0,1.31,3.55,4.635,4.635,0,0,0,.05,6.821c-.073,1.289-.073,5.152,0,6.44A4.62,4.62,0,0,0,1.31,16.532a4.656,4.656,0,0,0,3.271,1.261c1.289.073,5.152.073,6.44,0a4.62,4.62,0,0,0,3.271-1.261,4.65,4.65,0,0,0,1.261-3.271c.073-1.289.073-5.148,0-6.437Zm-1.665,7.82A2.634,2.634,0,0,1,12.4,16.128a17.2,17.2,0,0,1-4.6.313,17.337,17.337,0,0,1-4.6-.313,2.634,2.634,0,0,1-1.484-1.484,17.2,17.2,0,0,1-.313-4.6,17.337,17.337,0,0,1,.313-4.6A2.634,2.634,0,0,1,3.2,3.958a17.2,17.2,0,0,1,4.6-.313,17.337,17.337,0,0,1,4.6.313,2.634,2.634,0,0,1,1.484,1.484,17.2,17.2,0,0,1,.313,4.6A17.193,17.193,0,0,1,13.888,14.644Z" transform="translate(1668.699 1992.457)" fill="#1c1f2d"/></g></svg>
                            </div>
                        </div>
                    </div>

                    <div class="py-16 pl-4 sm:pl-6 lg:col-span-3 lg:py-24 lg:pl-8 xl:pl-12 2300:ml-[70px]">
                        <div class="max-w-lg mx-auto lg:max-w-none">
                            <form class="mt-12 space-y-5" action="" method="POST">
                                @csrf
                                <div>
                                    <div class="relative">
                                        <input id="email" name="email" type="email" class="pt-3 peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none" placeholder="john@doe.com" aria-invalid="true" aria-describedby="email-error" style="box-shadow: none;" required />
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <label for="email" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                            </svg>
                                        </label>
                                    </div>
                                    {{--                                                <p class="mt-2 text-sm text-red-600" id="email-error">Your password must be less than 4 characters.</p>--}}
                                </div>

                                <div>
                                    <div class="relative">
                                        <input id="phone" name="phone" type="tel" class="pt-3 peer h-10 w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none" placeholder="8008881234" aria-invalid="true" aria-describedby="email-error" style="box-shadow: none;" />
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <!-- Heroicon name: solid/exclamation-circle -->
                                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <label for="phone" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                            </svg>
                                        </label>
                                    </div>
                                    {{--                                                <p class="mt-2 text-sm text-red-600" id="email-error">Your password must be less than 4 characters.</p>--}}
                                </div>

                                <div>
                                    <div class="relative">
                                        <textarea rows="1" name="message" id="message" class="pt-3 peer w-full border-t-0 border-r-0 border-l-0 border-b-2 border-[#575B73] text-base font-bold text-white bg-[#1C1F2D] placeholder-transparent focus:outline-none focus:border-[#575B73] outline-none " placeholder="Message" aria-invalid="true" aria-describedby="message-error" style="box-shadow: none;"></textarea>
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <!-- Heroicon name: solid/exclamation-circle -->
                                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <label for="message" class="absolute left-0 -top-3.5 text-[#71758D] text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                            </svg>
                                        </label>
                                    </div>
                                    {{--                                                <p class="mt-2 text-sm text-red-600" id="email-error">Your password must be less than 4 characters.</p>--}}
                                </div>
                                <div class="flex justify-end pt-12">
                                    <x-call-out-button></x-call-out-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
