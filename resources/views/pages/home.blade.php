<x-layouts.main>
    <main class="home">
        <div class="pb-8 sm:pb-12 lg:pb-12 h-full">
            <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
                <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
                    <div>
                        <div>
                            <div class="absolute top-16">
                                <div class="w-[2.8125rem] cursor-default">
                                    <div
                                        class="bg-white h-[0.1875rem]"
                                        data-aos="fade-right"></div>
                                    <div
                                        class="bg-white h-[0.1875rem] mt-1.5 w-9 transition-transform duration-300"
                                        data-aos="fade-right"
                                        data-aos-delay="50"></div>
                                    <div
                                        class="bg-white h-[0.1875rem] mt-1.5 w-[1.6875rem] transition-transform duration-300"
                                        data-aos="fade-right"
                                        data-aos-delay="100"></div>
                                    <div
                                        class="bg-white h-[0.1875rem] mt-1.5 w-4 transition-transform duration-300"
                                        data-aos="fade-right"
                                        data-aos-delay="150"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-20">
                            <div
                                data-aos="fade-right"
                                data-aos-delay="300">
                                <a
                                    href="#"
                                    class="inline-flex items-center text-white bg-[#0F1119] rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                                    <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-[#3273F6] rounded-full">
                                        We're hiring
                                    </span>
                                    <span class="ml-4 text-sm">
                                        Visit our careers page
                                    </span>
                                    <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                                </a>
                            </div>
                            <div class="mt-6 sm:max-w-xl">
                                <h1
                                    class="text-4xl font-extrabold text-white tracking-tight sm:text-5xl"
                                    data-aos="fade-right"
                                    data-aos-delay="400">
                                    DOSSIER.IO
                                </h1>
                                <p
                                    class="mt-6 text-xl text-gray-200"
                                    data-aos="fade-right"
                                    data-aos-delay="500">
                                    It’s your talent… own it.
                                </p>
                            </div>
                            <div class="mt-12 sm:max-w-lg sm:w-full sm:flex">
                                @if (Route::has('login'))
                                    @auth
                                        <div
                                            class="mt-4 sm:mt-0"
                                            data-aos="zoom-in"
                                            data-aos-delay="600">
                                            <a href="{{ url('/dashboard') }}">
                                                <button
                                                    type="submit"
                                                    aria-label="dashboard"
                                                    class="block w-full rounded-md border border-transparent px-5 py-3 bg-[#3273F6] text-base font-medium text-white shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:px-10 transition-colors">
                                                    Dashboard
                                                </button>
                                            </a>
                                        </div>
                                    @else
                                        <div
                                            class="mt-4 sm:mt-0"
                                            data-aos="zoom-in"
                                            data-aos-delay="600">
                                            <a href="{{ route('login') }}">
                                                <button
                                                    type="submit"
                                                    aria-label="login"
                                                    class="block w-full rounded-md border border-transparent px-5 py-3 bg-[#3273F6] text-base font-medium text-white shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:px-10 transition-colors">
                                                    Login
                                                </button>
                                            </a>
                                        </div>
                                        @if (Route::has('register'))
                                            <div
                                                class="mt-4 sm:mt-0 sm:ml-6"
                                                data-aos="zoom-in"
                                                data-aos-delay="700">
                                                <a href="{{ route('register') }}">
                                                    <button
                                                        type="submit"
                                                        aria-label="register"
                                                        class="block w-full rounded-md border border-transparent px-5 py-3 bg-indigo-700 text-base font-medium text-white shadow hover:bg-[#3273F6] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:px-10 transition-colors">
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
                <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
                    <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <div class="hidden sm:block">
                            <div
                                class="home_decoration absolute inset-y-0 left-1/2 w-screen rounded-l-3xl lg:left-80 lg:right-0 lg:w-full"
                                data-aos="zoom-in"
                                data-aos-delay="200"></div>
                            <svg class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0" width="404" height="392" fill="none" viewBox="0 0 404 392" data-aos="zoom-in" data-aos-delay="300"><defs><pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" /></pattern></defs><rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" /></svg>
                        </div>
                        <div class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
                            <img
                                class="w-full rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none"
                                src="https://tailwindui.com/img/component-images/top-nav-with-multi-column-layout-screenshot.jpg"
                                alt="our dashboard"
                                loading="eager"
                                data-aos="zoom-in-left"
                                data-aos-delay="500">
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative mt-20">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                    <div class="relative sm:py-16 lg:py-0">
                        <div
                            aria-hidden="true"
                            class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                            <div
                                class="home_decoration absolute inset-y-0 right-1/2 w-full rounded-r-3xl lg:right-72"
                                data-aos="zoom-in"
                                data-aos-delay="200"></div>
                            <div
                                class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12"
                                data-aos="zoom-in"
                                data-aos-delay="300">
                                <svg width="404" height="392" fill="none" viewBox="0 0 404 392"><defs><pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/></pattern></defs><rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)"/></svg>
                            </div>
                        </div>
                        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                            <div
                                class="relative pt-64 pb-10 h-[300px] sm:h-[400px] lg:h-[400px] rounded-2xl shadow-xl overflow-hidden"
                                data-aos="zoom-in-right"
                                data-aos-delay="500">
                                <div class="absolute flex justify-center items-center inset-0 h-full w-full bg-purple-500">
                                    <lottie-player
                                        src="https://assets1.lottiefiles.com/packages/lf20_dkuwscrg.json"
                                        background="transparent"
                                        speed="1"
                                        style="width: 500px; height: 500px;"
                                        loop
                                        loading="eager"
                                        autoplay></lottie-player>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                        <div class="pt-12 sm:pt-16 lg:pt-20">
                            <h2
                                class="text-3xl text-white font-extrabold tracking-tight sm:text-4xl"
                                data-aos="fade-left"
                                data-aos-delay="200">
                                On a mission to empower teams
                            </h2>
                            <article class="mt-6 text-gray-200 space-y-6">
                                <p
                                    class="text-lg"
                                    data-aos="fade-left"
                                    data-aos-delay="250">
                                    Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi. Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus vitae.
                                </p>
                                <p
                                    class="text-base leading-7"
                                    data-aos="fade-left"
                                    data-aos-delay="300">
                                    Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna. Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.
                                </p>
                                <p
                                    class="text-base leading-7"
                                    data-aos="fade-left"
                                    data-aos-delay="350">
                                    Rhoncus nisl, libero egestas diam fermentum dui. At quis tincidunt vel ultricies. Vulputate aliquet velit faucibus semper. Pellentesque in venenatis vestibulum consectetur nibh id. In id ut tempus egestas. Enim sit aliquam nec, a. Morbi enim fermentum lacus in. Viverra.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-[#0F1119]">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <h2
                    class="text-center text-gray-400 text-sm font-semibold uppercase tracking-wide"
                    data-aos="fade-up"
                    data-aos-delay="50">
                    Trusted by over 26,000 amazing people
                </h2>
                <ul
                    role="list"
                    class="mx-auto grid grid-cols-2 gap-x-4 gap-y-8 md:gap-x-6 lg:max-w-4xl lg:gap-x-2 sm:grid-cols-4 mt-10">
                    <li
                        data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="space-y-4 text-center">
                            <img
                                class="mx-auto h-16 w-16 rounded-full border-4 border-indigo-500"
                                src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                alt="Real User"
                                loading="eager">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3 class="text-white">
                                        Michael Foster
                                    </h3>
                                    <p class="text-gray-400">
                                        Co-Founder / CTO
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        data-aos="fade-up"
                        data-aos-delay="150">
                        <div class="space-y-4 text-center">
                            <img
                                class="mx-auto h-16 w-16 rounded-full border-4 border-indigo-500"
                                src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                alt="Real User"
                                loading="eager">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3 class="text-white">
                                        Michael Foster
                                    </h3>
                                    <p class="text-gray-400">
                                        Co-Founder / CTO
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="space-y-4 text-center">
                            <img
                                class="mx-auto h-16 w-16 rounded-full border-4 border-indigo-500"
                                src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                alt="Real User"
                                loading="eager">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3 class="text-white">
                                        Michael Foster
                                    </h3>
                                    <p class="text-gray-400">
                                        Co-Founder / CTO
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        data-aos="fade-up"
                        data-aos-delay="250">
                        <div class="space-y-4 text-center">
                            <img
                                class="mx-auto h-16 w-16 rounded-full border-4 border-indigo-500"
                                src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                                alt="Real User"
                                loading="eager">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3 class="text-white">
                                        Michael Foster
                                    </h3>
                                    <p class="text-gray-400">
                                        Co-Founder / CTO
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </footer>
    </main>
</x-layouts.main>
