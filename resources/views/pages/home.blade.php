<x-layouts.main>
    <div class="bg-gradient-to-r from-[#600F93] to-[#120185] overflow-x-hidden">
        <main class="space-y-16 lg:space-y-36">
            <div id="register" class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
                <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
                    <div>
                        <div class="absolute top-16">
                            <div class="w-[2.8125rem] cursor-default">
                                <div data-aos="fade-right" class="bg-white h-[0.1875rem]"></div>
                                <div data-aos="fade-right" data-aos-delay="50" class="bg-white h-[0.1875rem] mt-1.5 w-9"></div>
                                <div data-aos="fade-right" data-aos-delay="100" class="bg-white h-[0.1875rem] mt-1.5 w-[1.6875rem]"></div>
                                <div data-aos="fade-right" data-aos-delay="150" class="bg-white h-[0.1875rem] mt-1.5 w-4"></div>
                            </div>
                        </div>
                        <div class="pt-32 pb-20 lg:py-0">
                            <div data-aos="fade-right" data-aos-delay="300">
                                <a href="#" class="relative sm:w-[106px] overflow-hidden inline-flex items-center text-white bg-[#3273F6] sm:hover:w-[214px] rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base sm:hover:text-gray-200 sm:transition-all group" style="transition-duration: 400ms;">
                                    <span class="px-3 py-0.5 whitespace-nowrap text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-[#50148C] sm:group-hover:bg-[#50148C] rounded-full">
                                        Click Here
                                    </span>
                                    <span class="inline-flex animate-pulse">
                                        <span class="ml-2 text-sm whitespace-nowrap font-bold">
                                            View Demo
                                        </span>
                                        <svg class=" w-5 h-5 text-gray-500 sm:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                                    </span>
                                </a>
                            </div>
                            <div class="mt-6 sm:max-w-xl">
                                <h1 data-aos="fade-right" data-aos-delay="400" class="text-4xl font-extrabold text-white tracking-tight sm:text-5xl">
                                    DOSSIER.IO
                                </h1>
                                <p data-aos="fade-right" data-aos-delay="500" class="mt-3 text-xl text-gray-300 cursor-default">
                                    It’s your talent… own it.
                                </p>
                            </div>
                            <div class="mt-12 sm:max-w-lg sm:w-full sm:flex">
                                @if (Route::has('login'))
                                    @auth
                                        <div data-aos="zoom-in" data-aos-delay="600" class="mt-4 sm:mt-0">
                                            <a href="{{ url('/dashboard') }}">
                                                <button type="submit" aria-label="dashboard" class="block w-full rounded-md border border-transparent px-5 py-3 bg-[#3273F6] text-base font-medium text-white shadow sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:px-10 sm:transition-colors">
                                                    Dashboard
                                                </button>
                                            </a>
                                        </div>
                                    @else
                                        <div data-aos="zoom-in" data-aos-delay="600" class="mt-4 sm:mt-0">
                                            <a href="{{ route('login') }}">
                                                <button type="submit" aria-label="login" class="block w-full rounded-md border border-transparent px-5 py-3 bg-[#3273F6] text-base font-medium text-white shadow sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:px-10 sm:transition-colors">
                                                    Login
                                                </button>
                                            </a>
                                        </div>
                                        @if (Route::has('register'))
                                            <div data-aos="zoom-in" data-aos-delay="700" class="mt-4 sm:mt-0 sm:ml-6">
                                                <a href="{{ route('register') }}">
                                                    <button type="submit" aria-label="register" class="block w-full rounded-md border border-transparent px-5 py-3 bg-indigo-700 text-base font-medium text-white shadow sm:hover:bg-[#3273F6] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:px-10 sm:transition-colors">
                                                        Register
                                                    </button>
                                                </a>
                                            </div>
                                        @endif
                                    @endauth
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-10 md:pt-0 sm:mx-auto sm:max-w-3xl sm:px-6">
                    <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <div class="hidden sm:block">
                            <div data-aos="zoom-in" data-aos-delay="200" class="absolute inset-y-0 left-1/2 w-screen bg-gradient-to-r from-[#4E46DD] to-[#180481] rounded-l-3xl lg:left-80 lg:right-0 lg:w-[956px]"></div>
                            <svg data-aos="zoom-in" data-aos-delay="300" class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0" width="404" height="392" fill="none" viewBox="0 0 404 392"><defs><pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" /></pattern></defs><rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" /></svg>
                        </div>
                        <div class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
                            <img data-aos="zoom-in-left" data-aos-delay="500" class="w-full rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none" src="/images/home/png/dashboard.png" alt="Dashboard">
                        </div>
                    </div>
                </div>
            </div>
            <div id="learn" class="relative">
                <div class="mx-auto lg:max-w-7xl lg:px-8 grid grid-cols-1 lg:grid-cols-2 lg:gap-24 lg:items-start">
                    <div class="relative mt-16 lg:mt-0 sm:py-16 lg:py-0 order-last lg:order-none">
                        <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                            <div data-aos="zoom-in" data-aos-delay="200" class="absolute inset-y-0 right-1/2 w-[965px] bg-gradient-to-r from-[#50148B] to-[#7428bf] rounded-r-3xl lg:right-72"></div>
                            <div data-aos="zoom-in" data-aos-delay="300" class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12">
                                <svg width="404" height="392" fill="none" viewBox="0 0 404 392"><defs><pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" /></pattern></defs><rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" /></svg>
                            </div>
                        </div>
                        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                            <div data-aos="zoom-in-right" data-aos-delay="500" class="relative pt-64 pb-10 h-[300px] sm:h-[400px] lg:h-[400px] rounded-2xl shadow-xl overflow-hidden">
                                <div class="absolute flex justify-center items-center inset-0 h-full w-full bg-[#9845de]">
                                    <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_dkuwscrg.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop loading="eager" autoplay></lottie-player>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                        <div class="pt-12 sm:pt-16 lg:pt-20">
                            <h2 data-aos="fade-left" data-aos-delay="200" class="text-3xl text-white font-extrabold tracking-tight sm:text-4xl">
                                On a mission to empower teams
                            </h2>
                            <div class="mt-6 text-gray-300 space-y-6">
                                <p data-aos="fade-left" data-aos-delay="250" class="text-lg">
                                    Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi. Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus vitae.
                                </p>
                                <p data-aos="fade-left" data-aos-delay="300" class="text-base leading-7">
                                    Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna. Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.
                                </p>
                                <p data-aos="fade-left" data-aos-delay="350" class="text-base leading-7">
                                    Rhoncus nisl, libero egestas diam fermentum dui. At quis tincidunt vel ultricies. Vulputate aliquet velit faucibus semper. Pellentesque in venenatis vestibulum consectetur nibh id. In id ut tempus egestas. Enim sit aliquam nec, a. Morbi enim fermentum lacus in. Viverra.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
                <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
                    <div class="pt-12 sm:pt-16 lg:pt-20">
                        <h2 data-aos="fade-right" data-aos-delay="200" class="text-3xl text-white font-extrabold tracking-tight sm:text-4xl">
                            On a mission to empower teams
                        </h2>
                        <div class="mt-6 text-gray-300 space-y-6">
                            <p data-aos="fade-right" data-aos-delay="250" class="text-lg">
                                Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi. Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus vitae.
                            </p>
                            <p data-aos="fade-right" data-aos-delay="300" class="text-base leading-7">
                                Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna. Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.
                            </p>
                            <p data-aos="fade-right" data-aos-delay="350" class="text-base leading-7">
                                Rhoncus nisl, libero egestas diam fermentum dui. At quis tincidunt vel ultricies. Vulputate aliquet velit faucibus semper. Pellentesque in venenatis vestibulum consectetur nibh id. In id ut tempus egestas. Enim sit aliquam nec, a. Morbi enim fermentum lacus in. Viverra.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
                    <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <div class="hidden sm:block">
                            <div data-aos="zoom-in" data-aos-delay="200" class="absolute inset-y-0 left-1/2 w-screen bg-gradient-to-r from-[#4E46DD] to-[#180481] rounded-l-3xl lg:left-80 lg:right-0 lg:w-[956px]"></div>
                            <div data-aos="zoom-in" data-aos-delay="300" class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0">
                                <svg data-aos="zoom-in" data-aos-delay="300" width="404" height="392" fill="none" viewBox="0 0 404 392"><defs><pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" /></pattern></defs><rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" /></svg>
                            </div>
                        </div>
                        <div class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
                            <img data-aos="zoom-in-left" data-aos-delay="500" class="w-full rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none" src="/images/home/png/dashboard.png" alt="Dashboard">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center text-center lg:text-left bg-[#4841CA]">
                <div class="max-w-7xl sm:w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                    <h2 class="text-3xl font-extrabold tracking-tight text-indigo-100 sm:text-4xl cursor-default">
                        <span data-aos="fade-right" data-aos-delay="200" data-aos-anchor-placement="top-bottom" class="block">
                            Ready to dive in?
                        </span>
                        <span data-aos="fade-right" data-aos-delay="400" data-aos-anchor-placement="top-bottom" class="block text-indigo-400">
                            Start your free trial today.
                        </span>
                    </h2>
                    <div class="mt-8 flex justify-center lg:justify-start lg:mt-0 lg:flex-shrink-0">
                        <div data-aos="zoom-in" data-aos-delay="400" data-aos-anchor-placement="top-bottom" class="inline-flex rounded-md shadow">
                            <a href="#register" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 sm:hover:bg-blue-600 sm:transition-colors">
                                Get started
                            </a>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="600" data-aos-anchor-placement="top-bottom" class="ml-3 inline-flex rounded-md shadow">
                            <a href="#learn" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white sm:hover:bg-blue-100 sm:transition-colors">
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="bg-[#0F1119]">
            <div class="mx-auto max-w-md py-16 px-4 overflow-hidden sm:max-w-3xl sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-center text-gray-400 text-sm font-semibold uppercase tracking-wide cursor-default">
                    Trusted by over 26,000 amazing people
                </h2>
                <div class="mt-8 flex justify-center space-x-6">
                    <x-featured-user></x-featured-user>
                </div>
                <p data-aos="fade-up" data-aos-delay="250" data-aos-anchor-placement="top-bottom" class="mt-8 text-center text-base text-gray-400 cursor-default">
                    Created By Jake Bogan
                </p>
            </div>
        </footer>
    </div>
</x-layouts.main>
