@aware(['currentUser', 'barChart'])

<div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
        <div class="{{ (!$currentUser->profile->settings['track_likes'] || !$currentUser->profile->settings['track_views']) ?: 'justify-center' }} flex flex-col space-y-4 rounded-lg">
            @if($currentUser->profile->settings['track_views'])
                <div aria-roledescription="total views stat" class="{{ (!$currentUser->profile->settings['track_likes'] || !$currentUser->profile->settings['track_views']) ? 'h-[108px]' : 'h-full' }} {{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} flex px-4 py-5 overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                    <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-[#993BCE]' }} flex items-center h-[60px] rounded-md p-4 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg>
                    </div>
                    <div>
                        <dt class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} text-sm font-medium truncate cursor-default">
                            Total Views
                        </dt>
                        <dd class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} mt-1 text-3xl font-semibold">
                            {{ $currentUser->total_views ?: 0 }}
                        </dd>
                    </div>
                </div>
            @endif
            @if($currentUser->profile->settings['track_likes'])
                <div aria-roledescription="total likes stat" class="{{ (!$currentUser->profile->settings['track_likes'] || !$currentUser->profile->settings['track_views']) ? 'h-[108px]' : 'h-full' }} {{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} flex px-4 py-5 overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                    <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-[#993BCE]' }} flex items-center h-[60px] rounded-md p-4 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                    </div>
                    <div>
                        <dt class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} text-sm font-medium truncate cursor-default">
                            Total Likes
                        </dt>
                        <dd class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} mt-1 text-3xl font-semibold">
                            <x-dashboard.components.total-like></x-dashboard.components.total-like>
                        </dd>
                    </div>
                </div>
            @endif
            <div aria-roledescription="portfolio link stat" class="{{ (!$currentUser->profile->settings['track_likes'] || !$currentUser->profile->settings['track_views']) ? 'h-[108px]' : 'h-full' }} {{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} flex px-4 py-5 overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D]' : 'bg-[#993BCE]' }} flex items-center h-[60px] rounded-md p-3.5 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" /></svg>
                </div>
                <div>
                    <dt class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-500' }} text-sm font-medium truncate cursor-default">
                        Portfolio Link
                    </dt>
                    <dd class="flex mt-1 text-3xl font-semibold">
                        <x-dashboard.components.portfolio-link></x-dashboard.components.portfolio-link>
                    </dd>
                </div>
            </div>
        </div>

        <div aria-roledescription="recent activities" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} rounded-lg p-4 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
            <p class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-[#19077C]' }} font-black text-sm mb-4" style="font-family: Lato, serif;">
                Recent Activity
            </p>
            <div class="flex items-center w-full">
                <ul role="list" class="w-full">
                    <x-dashboard.components.dashboard-activity :activities="$currentUser->activities->sortByDesc('id')->take(5)"></x-dashboard.components.dashboard-activity>
                </ul>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-10 xl:grid-cols-2 mt-10">
        @if($currentUser->profile->settings['track_likes'] && count($currentUser->projects) >= 1)
            <div aria-roledescription="project chart" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} rounded-lg pt-4 px-4 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
                {!! $barChart->container() !!}
            </div>
        @endif

        <livewire:dashboard-form :currentUser="$currentUser"/>
    </div>

    <script src="{{ $barChart->cdn() }}"></script>
    {{ $barChart->script() }}
    <script>
        function copyText()
        {
            const usersPortfolio = document.querySelector('.usersPortfolio').textContent;
            navigator.clipboard.writeText(usersPortfolio.trim());
        }
    </script>
</div>
