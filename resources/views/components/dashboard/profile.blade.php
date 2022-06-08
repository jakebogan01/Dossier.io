<div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <div class="flex justify-end">
        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-all duration-300 ease-linear">
            Publish
        </button>
    </div>

    <h2 class="text-lg pb-5 leading-6 font-medium text-gray-900">
        Profile Section
    </h2>

    <div class="bg-white shadow-md hover:shadow-sm rounded-lg transition-all duration-300 ease-linear">
        <div class="md:grid xl:grid-cols-2 md:gap-6">
            <div class="mb-5 md:mb-0 md:col-span-1 px-4 py-5 sm:p-6">
                <form class="space-y-6" action="#" method="POST">

                    <div class="grid grid-cols-4">
                        <div class="relative col-span-4 lg:col-span-4 xl:col-span-2 border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                            <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Name</label>
                            <input type="text" name="name" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Your name">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6">
                        <div class="flex col-span-1">
                            <div class="mr-6">
                                <p for="name" class="px-1 bg-white text-xs font-medium text-gray-900 mb-3">Clients:</p>
                                <div class="custom-number-input w-24">
                                    <label for="client-counter" class="sr-only block text-sm font-medium text-gray-700">
                                        Number of Clients
                                    </label>
                                    <div
                                        class="flex flex-row w-full relative border border-gray-300 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                        <button data-action="decrement"
                                                class="flex justify-center items-center px-2 py-1.5 text-gray-600 hover:text-gray-700 hover:bg-gray-100 rounded-l cursor-pointer outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <input type="number"
                                               class="counter p-0 border-none outline-none focus:outline-none text-center w-full font-semibold text-md focus:text-gray-500 md:text-base cursor-default flex items-center text-gray-500 hover:text-gray-400 outline-none"
                                               id="client-counter" name="client-counter" value="0"
                                               style="box-shadow: none;">
                                        <button data-action="increment"
                                                class="flex justify-center items-center px-2 py-1.5 text-gray-600 hover:text-gray-700 hover:bg-gray-100 rounded-r cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p for="name" class="px-1 bg-white text-xs font-medium text-gray-900 mb-3">Tools:</p>
                                <div class="custom-number-input w-24">
                                    <label for="client-counter" class="sr-only block text-sm font-medium text-gray-700">
                                        Number of Tools
                                    </label>
                                    <div
                                        class="flex flex-row w-full relative border border-gray-300 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                        <button data-action="decrement"
                                                class="flex justify-center items-center px-2 py-1.5 text-gray-600 hover:text-gray-700 hover:bg-gray-100 rounded-l cursor-pointer outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <input type="number"
                                               class="counter p-0 border-none outline-none focus:outline-none text-center w-full font-semibold text-md focus:text-gray-500 md:text-base cursor-default flex items-center text-gray-500 hover:text-gray-400 outline-none"
                                               id="client-counter" name="client-counter" value="0"
                                               style="box-shadow: none;">
                                        <button data-action="increment"
                                                class="flex justify-center items-center px-2 py-1.5 text-gray-600 hover:text-gray-700 hover:bg-gray-100 rounded-r cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="relative mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Photo</label>
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="flex justify-center items-center md:col-span-1 overflow-hidden bg-[#e9edf5]">
                <section
                    class="1600:mx-auto rounded-tr-none rounded-br-lg rounded-tl-none rounded-bl-lg xl:rounded-tr-lg xl:rounded-br-lg xl:rounded-tl-none xl:rounded-bl-none w-full 2090:max-w-5xl relative flex flex-col-reverse 2090:flex-row relative bg-[#1C1F2D] p-[25px] sm:px-[5.3125rem] sm:pt-[5.1875rem] sm:pb-[7.375rem] overflow-hidden bg-no-repeat bg-left-top 2090:bg-right-top bg-auto cursor-default transform sm:scale-100 1600:scale-75 transition-all duration-300 ease-linear"
                    style="background-image: url('/images/themes/svg/background-pattern.svg');">
                    <div class="flex-1 sm:mr-10">
                        <div
                            class="absolute top-16"
                            role="menu">
                            <div class="w-[2.8125rem]">
                                <div class="bg-white h-[0.1875rem]"></div>
                                <div
                                    class="bg-white h-[0.1875rem] mt-1.5 w-full lg:w-[80%]"
                                    style="transition: width 0.3s linear;"></div>
                                <div
                                    class="bg-white h-[0.1875rem] mt-1.5 w-full lg:w-[60%]"
                                    style="transition: width 0.3s linear;"></div>
                                <div
                                    class="bg-white h-[0.1875rem] mt-1.5 w-full lg:w-[35%]"
                                    style="transition: width 0.3s linear;"></div>
                            </div>
                        </div>
                        <div
                            class="text-[36px] 2090:text-[2.5rem] font-black text-white mr-0 mt-[100px]">
                            <h1 class="leading-[1.3] tracking-wider whitespace-nowrap">
                                HELLO, I’M<br>
                                FOO<br>
                                AND THIS…<br>
                                IS MY LEGACY
                            </h1>
                        </div>
                        <div class="flex font-black my-[3.125rem]">
                            <dl class="mt-5 grid grid-cols-3 gap-20">
                                <div>
                                    <dt class="text-[1.6rem] text-[#FFCF7B] tracking-widest">
                                        24
                                    </dt>
                                    <dd class="mt-1 text-[#B1B7D6] text-[0.7rem]">
                                        CLIENTS
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-[1.6rem] text-[#FFCF7B] tracking-widest">
                                        32
                                    </dt>
                                    <dd class="mt-1 text-[#B1B7D6] text-[0.7rem]">
                                        PROJECTS
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-[1.6rem] text-[#FFCF7B] tracking-widest">
                                        06
                                    </dt>
                                    <dd class="mt-1 text-[#B1B7D6] text-[0.7rem]">
                                        TOOLS
                                    </dd>
                                </div>
                            </dl>
                        </div>
                        <div>
                            <a href="#contact">
                                <button
                                    disabled
                                    type="button"
                                    aria-label="call out"
                                    class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-sm font-black text-white bg-[#4046FF] max-w-[180px] w-full tracking-widest">
                                    LETS TALK
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                                </button>
                            </a>
                        </div>
                    </div>
                    <aside
                        class="flex-1 flex justify-start 2090:justify-end pt-20 2090:pt-10">
                        <div
                            class="flex items-center justify-center w-[255px] h-[255px] 2090:w-[400px] 2090:h-[400px] rounded-full"
                            style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659); box-shadow: 0 0 4.125rem #FFE26B;">
                            <img
                                class="inline-block w-[210px] h-[210px] 2090:w-[330px] 2090:h-[330px] rounded-full" src="https://avatars.githubusercontent.com/u/66225768?v=4"
                                alt="testing">
                        </div>
                    </aside>
                </section>
            </div>
        </div>
    </div>
</div>
