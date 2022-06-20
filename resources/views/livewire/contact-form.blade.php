<form action="#" wire:submit.prevent="register">
    @csrf

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
                        <h2 id="profile-information-title" class="text-lg leading-6 font-medium text-gray-900">Contact Information</h2>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal information with existing preview.</p>
                    </div>
                    <div class="px-4 py-5 sm:px-6">
                        @if (!$currentUser)
                            <dl class="sm:divide-y sm:divide-gray-200 bg-gray-100 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-indigo-400 font-bold">-</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 font-semibold">No current contact listed</dd>
                                </div>
                            </dl>
                        @else
                            <dl class="sm:divide-y sm:divide-gray-200 bg-gray-100 rounded-lg">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Conclusion</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $currentUser->conclusion ?: 'Conclusion needed' }}</dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Phone number</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $currentUser->phone ?: 'Phone needed' }}</dd>
                                </div>
                            </dl>
                            <dl class="sm:divide-y sm:divide-gray-200 bg-gray-100 rounded-lg mt-8">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                                    <dt class="text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="#6C727F"><path d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z"/></svg>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <a href="#" target="_blank" class="text-[#9E61E0] hover:text-indigo-900 transition-colors">
                                            {{ $currentUser->links['instagram'] ?: 'Instagram needed' }}
                                        </a>
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                                    <dt class="text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="#6C727F"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <a href="#" target="_blank" class="text-[#9E61E0] hover:text-indigo-900 transition-colors">
                                            {{ $currentUser->links['facebook'] ?: 'Facebook needed' }}
                                        </a>
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                                    <dt class="text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="#6C727F"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm2.218 18.616c-.354.069-.468-.149-.468-.336v-1.921c0-.653-.229-1.079-.481-1.296 1.56-.173 3.198-.765 3.198-3.454 0-.765-.273-1.389-.721-1.879.072-.177.312-.889-.069-1.853 0 0-.587-.188-1.923.717-.561-.154-1.159-.231-1.754-.234-.595.003-1.193.08-1.753.235-1.337-.905-1.925-.717-1.925-.717-.379.964-.14 1.676-.067 1.852-.448.49-.722 1.114-.722 1.879 0 2.682 1.634 3.282 3.189 3.459-.2.175-.381.483-.444.936-.4.179-1.413.488-2.037-.582 0 0-.37-.672-1.073-.722 0 0-.683-.009-.048.426 0 0 .46.215.777 1.024 0 0 .405 1.25 2.353.826v1.303c0 .185-.113.402-.462.337-2.782-.925-4.788-3.549-4.788-6.641 0-3.867 3.135-7 7-7s7 3.133 7 7c0 3.091-2.003 5.715-4.782 6.641z"/></svg>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <a href="#" target="_blank" class="text-[#9E61E0] hover:text-indigo-900 transition-colors">
                                            {{ $currentUser->links['github'] ?: 'Github needed' }}
                                        </a>
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                                    <dt class="text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="#6C727F"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/></svg>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <a href="#" target="_blank" class="text-[#9E61E0] hover:text-indigo-900 transition-colors">
                                            {{ $currentUser->links['linkedin'] ?: 'Linkedin needed' }}
                                        </a>
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 items-center">
                                    <dt class="text-sm font-medium text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="#6C727F"><path d="M11.455 9.985c-1.419.417-3.11.632-5.067.646.405-1.654 1.518-3.03 3.003-3.784.777 1.016 1.464 2.063 2.064 3.138zm.965 1.93c-.124-.28-.254-.559-.391-.835-1.622.51-3.561.769-5.804.772l-.008.148c0 1.404.504 2.692 1.34 3.695 1.266-1.901 2.891-3.164 4.863-3.78zm-3.97 4.641c1.569 1.225 3.671 1.589 5.624.836-.252-1.488-.65-2.94-1.19-4.352-1.819.542-3.285 1.714-4.434 3.516zm7.075-9.13c-.977-.754-2.197-1.209-3.525-1.209-.49 0-.964.068-1.418.184.764 1.028 1.441 2.086 2.035 3.172 1.236-.524 2.204-1.24 2.908-2.147zm8.475 4.574c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5 0c0-3.866-3.135-7-7-7s-7 3.134-7 7 3.135 7 7 7 7-3.134 7-7zm-5.824-1.349c.157.324.305.651.447.98 1.26-.217 2.641-.204 4.143.042-.073-1.292-.566-2.474-1.354-3.403-.807 1.005-1.89 1.798-3.236 2.381zm.914 2.132c.489 1.309.865 2.651 1.119 4.023 1.312-.88 2.241-2.284 2.497-3.909-1.317-.228-2.522-.268-3.616-.114z"/></svg>
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <a href="#" target="_blank" class="text-[#9E61E0] hover:text-indigo-900 transition-colors">
                                            {{ $currentUser->links['dribbble'] ?: 'Dribbble needed' }}
                                        </a>
                                    </dd>
                                </div>
                            </dl>
                        @endif
                        <div class="sm:col-span-2">
                            <form class="lg:col-span-9" action="#" method="POST">
                                <!-- Profile section -->
                                <div class="pt-24">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium text-gray-900">Conclusion & Phone Number</h2>
                                        <p class="mt-1 text-sm text-gray-500">A brief description and your number for viewers who might wish to contact you.</p>
                                    </div>

                                    <div class="mt-6 flex flex-col lg:flex-row">
                                        <div class="flex-grow space-y-6">
                                            <div>
                                                <div class="relative mt-1">
                                                    <label for="conclusion" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Conclusion </label>
                                                    <textarea wire:model="conclusion" id="conclusion" name="conclusion" rows="3" class="shadow-sm focus:ring-sky-500 focus:border-sky-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required></textarea>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600 sm:max-w-[250px]">
                                                    <label for="phone" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Phone</label>
                                                    <input wire:model="phone" type="tel" name="phone" id="phone" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="pt-24">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium text-gray-900">Social Media</h2>
                                        <p class="mt-1 text-sm text-gray-500">Provide your social links for easier connections.</p>
                                    </div>

                                    <div class="mt-6 flex flex-col lg:flex-row">
                                        <div class="flex-grow space-y-6">

                                            <div class="grid grid-cols-12 gap-6">

                                                <div class="col-span-12 sm:col-span-6 relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                    <label for="instagram" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">GitHub</label>
                                                    <div class="relative rounded-md shadow-sm">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                                            <span class="text-gray-500 sm:text-sm"> https:// </span>
                                                        </div>
                                                        <input wire:model="instagram" type="text" name="instagram" id="instagram" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-6 relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                    <label for="facebook" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Facebook</label>
                                                    <div class="relative rounded-md shadow-sm">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                                            <span class="text-gray-500 sm:text-sm"> https:// </span>
                                                        </div>
                                                        <input wire:model="facebook" type="text" name="facebook" id="facebook" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-6 relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                    <label for="github" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Dribbble</label>
                                                    <div class="relative rounded-md shadow-sm">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                                            <span class="text-gray-500 sm:text-sm"> https:// </span>
                                                        </div>
                                                        <input wire:model="github" type="text" name="github" id="github" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-6 relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                    <label for="linkedin" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Linkedin</label>
                                                    <div class="relative rounded-md shadow-sm">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                                            <span class="text-gray-500 sm:text-sm"> https:// </span>
                                                        </div>
                                                        <input wire:model="linkedin" type="text" name="linkedin" id="linkedin" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                    </div>
                                                </div>

                                                <div class="col-span-12 sm:col-span-6 relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                    <label for="dribbble" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Instagram</label>
                                                    <div class="relative rounded-md shadow-sm">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                                            <span class="text-gray-500 sm:text-sm"> https:// </span>
                                                        </div>
                                                        <input wire:model="dribbble" type="text" name="dribbble" id="dribbble" class="block w-full border-0 pl-16 sm:pl-[48px] py-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" required>
                                                    </div>
                                                </div>
                                            </div>
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

</form>
