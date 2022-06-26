@aware(['$activities'])

<div class="col-span-2 2xl:col-span-1" x-data="{ more: true }">
    <section aria-labelledby="activity-title" class="lg:col-start-3 lg:col-span-1">
        <div class="bg-white px-6 py-7 rounded-lg shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden sm:px-6">
            <h2 id="activity-title" class="text-lg font-medium text-gray-900">Recent Activity</h2>

            <!-- Activity Feed -->
            <div class="mt-6 flow-root">
                <ul role="list" class="-mb-8">
                    @foreach($activities as $key => $activity)
                        <li>
                            <div class="relative pb-8">
                                @unless($loop->last)
                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                @endunless
                                <div class="relative flex space-x-3 sm:hover:bg-gray-100 cursor-pointer">
                                    <div>
                                      <span class="h-8 w-8 rounded-full bg-[#8936d6] flex items-center justify-center ring-8 ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                        </svg>
                                      </span>
                                    </div>
                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                        <div>
                                            <p class="text-sm text-gray-500"><a href="#" class="font-medium text-gray-900">{{ $activity->updated }}</a> Updated</p>
                                        </div>
                                        <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                            <time datetime="2020-09-20">{{ $activity->serializeDate($activity->created_at) }}</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="mt-6 flex flex-col justify-stretch" x-cloak x-show.transition="more" >
                <button wire:click.prevent="showMoreActivities(10)" @click="more = false" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-md text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    See more
                </button>
            </div>
            <div class="mt-6 flex flex-col justify-stretch" x-cloak x-show.transition="!more" >
                <button wire:click.prevent="showMoreActivities(5)" @click="more = true" type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-md text-white bg-indigo-600 sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    See less
                </button>
            </div>
        </div>
    </section>
</div>
