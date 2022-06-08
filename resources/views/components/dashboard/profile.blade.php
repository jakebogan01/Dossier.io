<div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <div class="flex justify-end">
        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-all duration-300 ease-linear">
            Publish
        </button>
    </div>

    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3 mt-10">
        <div class="col-span-2 bg-white rounded-lg p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
            <section aria-labelledby="profile-information-title">
                <div class="bg-white sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 id="profile-information-title" class="text-lg leading-6 font-medium text-gray-900">Profile Information</h2>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details with live preview.</p>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2 bg-gray-100 rounded-lg lg: p-2 p-4">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Your Name
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">Backend Developer</dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Email address</dt>
                                <dd class="mt-1 text-sm text-gray-900">ricardocooper@example.com</dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Photo</dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    <div class="flex-shrink-0 inline-block rounded-full overflow-hidden h-12 w-12" aria-hidden="true">
                                        <img class="rounded-full h-full w-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=320&h=320&q=80" alt="">
                                    </div>
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Salary expectation</dt>
                                <dd class="mt-1 text-sm text-gray-900">$120,000</dd>
                            </div>
                        </dl>
                            <div class="sm:col-span-2">
                                <form class="divide-y divide-gray-200 lg:col-span-9" action="#" method="POST">
                                    <!-- Profile section -->
                                    <div class="pt-14">
                                        <div>
                                            <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
                                            <p class="mt-1 text-sm text-gray-500">The information you submit will reflect that of your personal portfolio publicly.</p>
                                        </div>

                                        <div class="mt-6 flex flex-col lg:flex-row">
                                            <div class="flex-grow space-y-6">
                                                <div>
                                                    <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                        <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Name</label>
                                                        <input type="text" name="name" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm">
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
                                            </div>

                                            <div class="mt-6 flex-grow lg:mt-0 lg:ml-12 lg:flex-grow-0 lg:flex-shrink-0">
                                                <div class="grid grid-cols-1 gap-6">
                                                    <div class="col-span-1">
                                                        <div class="flex items-center justify-between">
                                                            <p for="name" class="px-1 bg-white text-xs font-medium text-gray-900 mr-3">Clients:</p>
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
                                                        <div class="flex items-center justify-between mt-5">
                                                            <p for="name" class="px-1 bg-white text-xs font-medium text-gray-900 mr-3">Tools:</p>
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
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Privacy section -->
                                    <div class="pt-6 mt-8 divide-y divide-gray-200">
                                        <div>
                                            <div>
                                                <h2 class="text-lg leading-6 font-medium text-gray-900">Privacy</h2>
                                                <p class="mt-1 text-sm text-gray-500">Ornare eu a volutpat eget vulputate. Fringilla commodo amet.</p>
                                            </div>
                                            <ul role="list" class="mt-2 divide-y divide-gray-200">
                                                <li class="py-4 flex items-center justify-between">
                                                    <div class="flex flex-col">
                                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">Available to hire</p>
                                                        <p class="text-sm text-gray-500" id="privacy-option-1-description">Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.</p>
                                                    </div>
                                                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                                                    <div
                                                        x-data="{ value: false }"
                                                        class="flex items-center justify-center"
                                                        x-id="['toggle-label']">
                                                        <input type="hidden" name="sendNotifications" :value="value">

                                                        <!-- Label -->
                                                        <label
                                                            @click="$refs.toggle.click(); $refs.toggle.focus()"
                                                            :id="$id('toggle-label')"
                                                            class="text-gray-900 transition-colors dark:text-white">
                                                            Send notifications
                                                        </label>

                                                        <!-- Button -->
                                                        <button
                                                            x-ref="toggle"
                                                            @click="value = ! value"
                                                            type="button"
                                                            role="switch"
                                                            :aria-checked="value"
                                                            :aria-labelledby="$id('toggle-label')"
                                                            :class="value ? 'bg-teal-500 border-2 border-transparent' : 'bg-gray-200 border-2 border-transparent'"
                                                            class="ml-4 relative h-6 w-11 px-0 inline-flex flex-shrink-0 rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                                            <span
                                                                :class="value ? 'bg-white translate-x-5' : 'bg-white translate-x-0'"
                                                                class="inline-block h-5 w-5 rounded-full transition shadow transform ring-0 ease-in-out duration-200"
                                                                aria-hidden="true"></span>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="py-4 flex items-center justify-between">
                                                    <div class="flex flex-col">
                                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">Make account private</p>
                                                        <p class="text-sm text-gray-500" id="privacy-option-2-description">Pharetra morbi dui mi mattis tellus sollicitudin cursus pharetra.</p>
                                                    </div>
                                                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                                                    <div
                                                        x-data="{ value: false }"
                                                        class="flex items-center justify-center"
                                                        x-id="['toggle-label']">
                                                        <input type="hidden" name="sendNotifications" :value="value">

                                                        <!-- Label -->
                                                        <label
                                                            @click="$refs.toggle.click(); $refs.toggle.focus()"
                                                            :id="$id('toggle-label')"
                                                            class="text-gray-900 transition-colors dark:text-white">
                                                            Send notifications
                                                        </label>

                                                        <!-- Button -->
                                                        <button
                                                            x-ref="toggle"
                                                            @click="value = ! value"
                                                            type="button"
                                                            role="switch"
                                                            :aria-checked="value"
                                                            :aria-labelledby="$id('toggle-label')"
                                                            :class="value ? 'bg-teal-500 border-2 border-transparent' : 'bg-gray-200 border-2 border-transparent'"
                                                            class="ml-4 relative h-6 w-11 px-0 inline-flex flex-shrink-0 rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                                            <span
                                                                :class="value ? 'bg-white translate-x-5' : 'bg-white translate-x-0'"
                                                                class="inline-block h-5 w-5 rounded-full transition shadow transform ring-0 ease-in-out duration-200"
                                                                aria-hidden="true"></span>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="py-4 flex items-center justify-between">
                                                    <div class="flex flex-col">
                                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">Allow commenting</p>
                                                        <p class="text-sm text-gray-500" id="privacy-option-3-description">Integer amet, nunc hendrerit adipiscing nam. Elementum ame</p>
                                                    </div>
                                                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                                                    <div
                                                        x-data="{ value: false }"
                                                        class="flex items-center justify-center"
                                                        x-id="['toggle-label']">
                                                        <input type="hidden" name="sendNotifications" :value="value">

                                                        <!-- Label -->
                                                        <label
                                                            @click="$refs.toggle.click(); $refs.toggle.focus()"
                                                            :id="$id('toggle-label')"
                                                            class="text-gray-900 transition-colors dark:text-white">
                                                            Send notifications
                                                        </label>

                                                        <!-- Button -->
                                                        <button
                                                            x-ref="toggle"
                                                            @click="value = ! value"
                                                            type="button"
                                                            role="switch"
                                                            :aria-checked="value"
                                                            :aria-labelledby="$id('toggle-label')"
                                                            :class="value ? 'bg-teal-500 border-2 border-transparent' : 'bg-gray-200 border-2 border-transparent'"
                                                            class="ml-4 relative h-6 w-11 px-0 inline-flex flex-shrink-0 rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                                            <span
                                                                :class="value ? 'bg-white translate-x-5' : 'bg-white translate-x-0'"
                                                                class="inline-block h-5 w-5 rounded-full transition shadow transform ring-0 ease-in-out duration-200"
                                                                aria-hidden="true"></span>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="py-4 flex items-center justify-between">
                                                    <div class="flex flex-col">
                                                        <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">Allow mentions</p>
                                                        <p class="text-sm text-gray-500" id="privacy-option-4-description">Adipiscing est venenatis enim molestie commodo eu gravid</p>
                                                    </div>
                                                    <!-- Enabled: "bg-teal-500", Not Enabled: "bg-gray-200" -->
                                                    <div
                                                        x-data="{ value: false }"
                                                        class="flex items-center justify-center"
                                                        x-id="['toggle-label']">
                                                        <input type="hidden" name="sendNotifications" :value="value">

                                                        <!-- Label -->
                                                        <label
                                                            @click="$refs.toggle.click(); $refs.toggle.focus()"
                                                            :id="$id('toggle-label')"
                                                            class="text-gray-900 transition-colors dark:text-white">
                                                            Send notifications
                                                        </label>

                                                        <!-- Button -->
                                                        <button
                                                            x-ref="toggle"
                                                            @click="value = ! value"
                                                            type="button"
                                                            role="switch"
                                                            :aria-checked="value"
                                                            :aria-labelledby="$id('toggle-label')"
                                                            :class="value ? 'bg-teal-500 border-2 border-transparent' : 'bg-gray-200 border-2 border-transparent'"
                                                            class="ml-4 relative h-6 w-11 px-0 inline-flex flex-shrink-0 rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                                            <span
                                                                :class="value ? 'bg-white translate-x-5' : 'bg-white translate-x-0'"
                                                                class="inline-block h-5 w-5 rounded-full transition shadow transform ring-0 ease-in-out duration-200"
                                                                aria-hidden="true"></span>
                                                        </button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
{{--                        </dl>--}}
                    </div>
                </div>
            </section>
        </div>
        <div class="col-span-1 bg-white rounded-lg p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
            <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                    <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Timeline</h2>

                    <!-- Activity Feed -->
                    <div class="mt-6 flow-root">
                        <ul role="list" class="-mb-8">
                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/user -->
                                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Applied to <a href="#" class="font-medium text-gray-900">Front End Developer</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-09-20">Sep 20</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/thumb-up -->
                                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Advanced to phone screening by <a href="#" class="font-medium text-gray-900">Bethany Blake</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-09-22">Sep 22</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/check -->
                                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Completed phone screening with <a href="#" class="font-medium text-gray-900">Martha Gardner</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-09-28">Sep 28</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/thumb-up -->
                                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Advanced to interview by <a href="#" class="font-medium text-gray-900">Bethany Blake</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-09-30">Sep 30</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex space-x-3">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/check -->
                                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Completed interview with <a href="#" class="font-medium text-gray-900">Katherine Snyder</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                <time datetime="2020-10-04">Oct 4</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 flex flex-col justify-stretch">
                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Advance to offer</button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
