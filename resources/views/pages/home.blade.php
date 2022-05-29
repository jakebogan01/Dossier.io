<x-layouts.main>

    <div class="flex absolute h-full w-full top-0 left-0 bg-no-repeat bg-center bg-cover" style="background-image: url('/images/home/tree-background@2x.png');">

        <div class="absolute top-0 left-0 right-0 bottom-0 h-full w-full bg-black opacity-50 z-10"></div>

        <div class="relative flex flex-col w-[30px] z-20">
            <div class="flex-1 border-r-[5px] border-[#393939]"></div>
            <div class="h-[200px] border-r-[5px] border-[#FFCF7B]"></div>
        </div>

        <div class="relative flex-1 font-bold text-white leading-[1.1] tracking-wider pl-[25px] pt-[60px] z-20">
            <h1 class="text-[50px]">
                DOSSIER.IO
            </h1>
            <div class="w-full h-[4px] bg-[#FFF45B] mt-4 mb-2"></div>
            <p>
                It's your talent... own it.
            </p>

            <div class="mt-10">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">
                            <button type="button" class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-bold text-white bg-[#4046FF] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 tracking-widest transition-colors">
                                DASHBOARD
                            </button>
                        </a>
                    @else
                        <a href="{{ route('login') }}">
                            <button type="button" class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-bold text-white bg-[#4046FF] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 tracking-widest transition-colors">
                                LOGIN
                            </button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button type="button" class="inline-flex justify-between items-center px-6 py-2 ml-6 border border-transparent shadow-sm text-base font-bold text-white bg-[#2429CE] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 tracking-widest transition-colors">
                                    REGISTER
                                </button>
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>

</x-layouts.main>
