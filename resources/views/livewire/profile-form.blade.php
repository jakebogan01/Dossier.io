<div>
<form action="#" wire:submit.prevent="register" x-data="{ notify: @entangle($toggleWarning) }">
    @csrf

    <div aria-live="assertive" class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 transform transition-all" x-cloak x-show="notify" style="z-index: 100;">
        <div class="w-full flex flex-col items-center space-y-4 sm:items-end transform transition-all"
             x-transition:enter="transform ease-out duration-300 transition"
             x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
             x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <p class="text-sm font-medium text-gray-900">Successfully updated!</p>
                            <p class="mt-1 text-sm text-gray-500">Great</p>
                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <button @click="notify = false" type="button" class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="sr-only">Close</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end">
        <button @click="notify = true" type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors">
            Publish
        </button>
    </div>

    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3 mt-10">
        <div class="col-span-2 bg-white p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
            <section aria-labelledby="profile-information-title">
                <div class="bg-white sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 id="profile-information-title" class="text-lg leading-6 font-medium text-gray-900">Profile Information</h2>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details with existing preview.</p>
                    </div>
                    <div class="px-4 py-5 sm:px-6">

                        <div class="space-y-4 bg-gray-100 p-4 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                            <div class="flex flex-col md:flex-row space-x-6 bg-[#4926ab] bg-opacity-75 py-6 px-12 z-0 rounded-lg bg-no-repeat bg-bottom bg-cover" style="background-image: url('/images/dashboard/svg/profile-background.svg');">
                                <div class="flex justify-start items-start relative z-10">
                                    <img class="rounded-full w-36 h-36" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt=""
                                    style="min-width: 144px;">
                                </div>
                                <div class="relative flex items-center z-10">
                                    <div>
                                        <p class="text-3xl font-bold text-white mb-1">
                                            {{ $currentUser->portfolio_name ?: 'Your Name' }}
                                        </p>
                                        <p class="text-base font-semibold text-white">
                                            {{ $currentUser->portfolio_email ?: 'Your Email' }}
                                        </p>
                                        <div class="flex space-x-2 text-sm text-white">
                                            <div class="flex space-x-2 items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5" viewBox="0 0 36.194 36.2"><g transform="translate(0 0.007)" fill="#FFFFFF"><path d="M0,2.25,2.25,0,9.182,4.95a2.25,2.25,0,0,1,.943,1.834v.158a2.25,2.25,0,0,0,.659,1.593l12.841,12.84,2.057-.686a2.25,2.25,0,0,1,2.3.544l7.551,7.551a2.25,2.25,0,0,1,0,3.181l-3.569,3.569a2.25,2.25,0,0,1-3.181,0l-7.551-7.551a2.25,2.25,0,0,1-.544-2.3l.685-2.056L8.534,10.784a2.25,2.25,0,0,0-1.591-.659h-.16a2.25,2.25,0,0,1-1.831-.943Zm25.546,21.7a1.126,1.126,0,0,0-1.593,1.593L30.7,32.3A1.126,1.126,0,0,0,32.3,30.7l-6.75-6.75Z" fill-rule="evenodd"/><path d="M35.77,5a6.757,6.757,0,0,1-8.278,8.267L13.226,27.338a6.75,6.75,0,1,1-4.561-4.561L22.732,8.51A6.75,6.75,0,0,1,31,.225L26.182,5.044,27,9l3.953.819L35.77,5ZM5.688,25.295l1.064-.545,1.06.544L9,25.352l.646,1,1,.646.058,1.19.543,1.061-.544,1.06-.058,1.19-1,.646-.646,1-1.19.058L6.75,33.75l-1.06-.544L4.5,33.147l-.646-1-1-.646-.058-1.19L2.25,29.25l.544-1.06L2.852,27l1-.646.646-1,1.19-.058Z" fill-rule="evenodd"/></g></svg>
                                                <span>
                                                    {{ $currentUser->total_tools ?: 0 }}
                                                </span>
                                            </div>
                                            <div class="flex space-x-2 items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" /></svg>
                                                <span>
                                                    {{ $currentUser->total_clients ?: 0 }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <div class="lg:col-span-9">
                                <!-- Profile section -->
                                <div class="pt-24">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
                                        <p class="mt-1 text-sm text-gray-500">The information you submit will reflect that of your personal portfolio publicly.</p>
                                    </div>

                                    <div>
                                        <div class="flex-grow space-y-6">

                                            <div class="mt-8 grid grid-cols-12 gap-6">
                                                <div class="col-span-12 sm:col-span-6">
                                                    <div>
                                                        <div class="relative border border-gray-300 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                            <label for="portfolio_name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Name</label>
                                                            <input wire:model="portfolio_name" type="text" autocomplete="portfolio_name" name="portfolio_name" id="portfolio_name" class="block w-full border-0 px-3 py-2 rounded-md text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" maxlength="16" required>
                                                        </div>
                                                        @error('portfolio_name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-6">
                                                    <div>
                                                        <div class="relative border border-gray-300 rounded-md shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                            <label for="portfolio_email" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Email</label>
                                                            <input wire:model="portfolio_email" type="email" autocomplete="portfolio_email" name="portfolio_email" id="portfolio_email" class="block w-full border-0 px-3 py-2 text-gray-900 rounded-full placeholder-gray-500 focus:ring-0 sm:text-sm" required>
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
                                                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 sm:hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                <span>Upload a file</span>
                                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                            </label>
                                                            <p class="pl-1">or drag and drop</p>
                                                        </div>
                                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-span-6">
                                                <div x-data="{ total: 0 }" class="w-full">
                                                    <label for="total_clients" class="block text-sm font-medium text-gray-700" x-text="`Number of Clients: ${total}`"></label>
                                                    <input wire:model="total_clients" type="range" min="0" max="100" id="total_clients" name="total_clients" x-model="total" class="w-full h-2 bg-gray-200 appearance-none rounded" step="1"/>
                                                </div>
                                            </div>

                                            <div class="col-span-6">
                                                <div x-data="{ total: 0 }" class="w-full">
                                                    <label for="total_tools" class="block text-sm font-medium text-gray-700" x-text="`Number of Clients: ${total}`"></label>
                                                    <input wire:model="total_tools" type="range" min="0" max="100" id="total_tools" name="total_tools" x-model="total" class="w-full h-2 bg-gray-200 appearance-none rounded" step="1"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Privacy section -->
                                <div class="pt-24">
                                    <div>
                                        <div>
                                            <h2 class="text-lg leading-6 font-medium text-gray-900">Profile Settings</h2>
                                            <p class="mt-1 text-sm text-gray-500">Here are some core settings that change the behavior of your portfolio.</p>
                                        </div>
                                        <ul role="list" class="mt-2 divide-y divide-gray-200">
                                            <x-dashboard.components.settings-switch setting="make_public">
                                                <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">Make portfolio public</p>
                                                <p class="text-sm text-gray-500" id="privacy-option-1-description">Allow your portfolio to be seen by the public.</p>
                                            </x-dashboard.components.settings-switch>
                                            <x-dashboard.components.settings-switch setting="dark_mode">
                                                <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">Enable dark mode</p>
                                                <p class="text-sm text-gray-500" id="privacy-option-2-description">Switch between light and dark mode.</p>
                                            </x-dashboard.components.settings-switch>
                                            <x-dashboard.components.settings-switch setting="track_views">
                                                <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">Allow tracking of views</p>
                                                <p class="text-sm text-gray-500" id="privacy-option-3-description">This will track the number of viewers that visit your portfolio.</p>
                                            </x-dashboard.components.settings-switch>
                                            <x-dashboard.components.settings-switch setting="track_likes">
                                                <p class="text-sm font-medium text-gray-900" id="privacy-option-4-label">Allow tracking of likes</p>
                                                <p class="text-sm text-gray-500" id="privacy-option-4-description">This will track the number of likes for each project.</p>
                                            </x-dashboard.components.settings-switch>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-span-2 2xl:col-span-1">
            <section aria-labelledby="activity-title" class="lg:col-start-3 lg:col-span-1">
                <div class="bg-white px-6 py-7 rounded-lg shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden sm:px-6">
                    <h2 id="activity-title" class="text-lg font-medium text-gray-900">Recent Activity</h2>

                    <!-- Activity Feed -->
                    <div class="mt-6 flow-root">
                        <ul role="list" class="-mb-8">
                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/thumb-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Profile Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-09-20">Sep 20</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/thumb-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Contact Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-09-22">Sep 22</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/thumb-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Contact Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-09-28">Sep 28</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/thumb-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Experience Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-09-30">Sep 30</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                        <div>
                                          <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                            <!-- Heroicon name: solid/thumb-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                            </svg>
                                          </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Updated your <a href="#" class="font-medium text-gray-900">Profile Settings</a></p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                                <time datetime="2020-10-04">Oct 4</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 flex flex-col justify-stretch">
                        <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-md text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">See all</button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</form>
</div>
