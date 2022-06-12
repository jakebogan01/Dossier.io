<form action="#" wire:submit.prevent="register">

    <x-dashboard.components.success-notification></x-dashboard.components.success-notification>

    <div class="flex justify-end">
        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors">
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

                        <ul role="list" class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-2 lg:gap-8 bg-gray-100 rounded-lg p-4">
                            <li class="py-10 px-6 bg-white text-center xl:text-left shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                                <div class="space-y-6 xl:space-y-10">
                                    <img class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                    <div class="flex-1">
                                        <p class="text-sm font-bold text-indigo-500">
                                            {{ $currentUser->portfolio_name ?: 'Your Name' }}
                                        </p>
                                        <dl class="sm:divide-y sm:divide-gray-200 pt-4">
                                            <div class="flex justify-between pb-2">
                                                <dt class="text-sm font-medium text-gray-500">Total Clients</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    {{ $currentUser->total_clients ?: 0 }}
                                                </dd>
                                            </div>
                                            <div class="flex justify-between pt-2">
                                                <dt class="text-sm font-medium text-gray-500">Total known tools</dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    {{ $currentUser->total_tools ?: 0 }}
                                                </dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            </li>
                        </ul>
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

                                            <div class="mt-6">
                                                <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                    <label for="portfolio_name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Name</label>
                                                    <input wire:model="portfolio_name" type="text" name="portfolio_name" id="portfolio_name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm">
                                                </div>
                                                @error('portfolio_name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
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
                                            <x-dashboard.components.settings-switch :currentUser="$currentUser">
                                                <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">Make portfolio public</p>
                                                <p class="text-sm text-gray-500" id="privacy-option-1-description">Allow your portfolio to be seen by the public.</p>
                                            </x-dashboard.components.settings-switch>
                                            <x-dashboard.components.settings-switch :currentUser="$currentUser">
                                                <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">Enable dark mode</p>
                                                <p class="text-sm text-gray-500" id="privacy-option-2-description">Switch between light and dark mode.</p>
                                            </x-dashboard.components.settings-switch>
                                            <x-dashboard.components.settings-switch :currentUser="$currentUser">
                                                <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">Allow tracking of views</p>
                                                <p class="text-sm text-gray-500" id="privacy-option-3-description">This will track the number of viewers that visit your portfolio.</p>
                                            </x-dashboard.components.settings-switch>
                                            <x-dashboard.components.settings-switch :currentUser="$currentUser">
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
