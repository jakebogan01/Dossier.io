<div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <div class="flex justify-end">
        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors">
            Publish
        </button>
    </div>

    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3 mt-10">
        <div class="col-span-2 bg-white rounded-lg p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
            <section aria-labelledby="profile-information-title">
                <div class="bg-white sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2 id="profile-information-title" class="text-lg leading-6 font-medium text-gray-900">Experience Information</h2>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal experiences with existing preview.</p>
                    </div>
                    <div class="px-4 py-5 sm:px-6">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2 bg-gray-100 rounded-lg lg: p-2 p-4">
                            <dl class="col-span-1 sm:col-span-2 grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">June 1990</dt>
                                    <dd class="mt-1 text-sm text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quisquam quo ratione!</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">June 1990</dt>
                                    <dd class="mt-1 text-sm text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quisquam quo ratione!</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">June 1990</dt>
                                    <dd class="mt-1 text-sm text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quisquam quo ratione!</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">June 1990</dt>
                                    <dd class="mt-1 text-sm text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quisquam quo ratione!</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">June 1990</dt>
                                    <dd class="mt-1 text-sm text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quisquam quo ratione!</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">June 1990</dt>
                                    <dd class="mt-1 text-sm text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quisquam quo ratione!</dd>
                                </div>
                            </dl>
                        </dl>
                        <div class="sm:col-span-2">
                            <form class="lg:col-span-9" action="#" method="POST" x-data="addRemove()">
                                <div class="pt-24">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <h2 class="text-lg leading-6 font-medium text-gray-900">Work Experiences</h2>
                                            <p class="mt-1 text-sm text-gray-500">Provide a date and a short description of important work experiences.</p>
                                        </div>

                                        <button type="button" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md sm:hover:shadow-sm rounded-md transition-colors" @click="addNewField()">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="mt-6 flex flex-col lg:flex-row">
                                        <div class="flex-grow">
                                            <template x-for="(field, index) in fields" :key="field.id">
                                                <div>
                                                    <div class="pt-6 grid grid-cols-12 gap-6">
                                                        <div class="flex items-center col-span-12 sm:col-span-3 min-w-[146px]">
                                                            <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Date</label>
                                                                <input type="date" name="name" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm">
                                                            </div>
                                                            <button type="button" class="ml-4 inline-flex justify-center border border-transparent text-indigo-300 sm:hover:text-indigo-600 focus:outline-none transition-colors" @click="removeField(field)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="mt-5">
                                                        <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                            <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Description</label>
                                                            <input type="text" name="name" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                        </div>

                                    </div>
                                </div>

                            </form>
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
</div>


<script>
    function addRemove() {
        return {
            fields: [],
            addNewField() {
                if (this.fields.length >= 10) {
                    return alert('Only 10 can be created.');
                }
                this.fields.push({id: new Date().getTime() + this.fields.length});
            },
            removeField(field) {
                this.fields.splice(this.fields.indexOf(field), 1);
            }
        }
    }
</script>
