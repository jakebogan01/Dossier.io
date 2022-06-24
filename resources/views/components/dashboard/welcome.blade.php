@aware(['currentUser', 'areaChart', 'barChart'])

<div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <h2 class="text-lg pb-5 leading-6 font-bold text-[#1C0681]">
        Recent Analytics
    </h2>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3">
        <div class="flex flex-col justify-center space-y-4 rounded-lg">
            <div class="h-full flex px-4 py-5 bg-white overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                <div class="flex items-center bg-[#57178D] rounded-md p-4 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Total Views
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        {{ $currentUser->total_views ?: 0 }}
                    </dd>
                </div>
            </div>

            <div class="h-full flex px-4 py-5 bg-white overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                <div class="flex items-center bg-[#57178D] rounded-md p-4 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Total Likes
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        <x-dashboard.components.total-like></x-dashboard.components.total-like>
                    </dd>
                </div>
            </div>

            <div class="h-full flex px-4 py-5 bg-white overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                <div class="flex items-center bg-[#57178D] rounded-md p-3.5 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z" />
                        <path d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z" />
                    </svg>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Your Portfolio
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        <x-dashboard.components.portfolio-link></x-dashboard.components.portfolio-link>
                    </dd>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg pt-4 px-1 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
            {!! $barChart->container() !!}
        </div>
    </div>

    <div class="bg-white rounded-lg pt-4 mt-6 px-1 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden">
        {!! $areaChart->container() !!}
    </div>

    <livewire:dashboard-form :currentUser="$currentUser"/>

    <script src="{{ $barChart->cdn() }}"></script>
    <script src="{{ $areaChart->cdn() }}"></script>
    {{ $areaChart->script() }}
    {{ $barChart->script() }}
    <script>
        function copyText()
        {
            const usersPortfolio = document.querySelector('.usersPortfolio').textContent;
            navigator.clipboard.writeText(usersPortfolio.trim());
        }
    </script>
</div>
