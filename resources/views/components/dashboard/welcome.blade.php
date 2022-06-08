<div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <h2 class="text-lg pb-5 leading-6 font-medium text-gray-900">
        Recent Analytics
    </h2>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3">
        <div class="bg-[#e9edf5] rounded-lg p-2 space-y-4 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
            <div class="flex px-4 py-5 bg-white overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                <div class="flex items-center bg-[#57178D] rounded-md p-4 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Total Views
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        71,897
                    </dd>
                </div>
            </div>

            <div class="flex px-4 py-5 bg-white overflow-hidden sm:p-6 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
                <div class="flex items-center bg-[#57178D] rounded-md p-4 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        Total Likes
                    </dt>
                    <dd class="mt-1 text-3xl font-semibold text-gray-900">
                        71,897
                    </dd>
                </div>
            </div>
        </div>
        <div
            class="bg-white rounded-lg p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden"
            x-data="{
                values: [45, 55, 75, 25, 45],
                labels: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5'],
                init() {
                    let chart = new ApexCharts(this.$refs.chart, this.options)

                    chart.render()

                    this.$watch('values', () => {
                        chart.updateOptions(this.options)
                    })
                },
                get options() {
                    return {
                        fill: {
                          colors: ['#4C148B']
                        },
                        chart: { type: 'bar', toolbar: false },
                        tooltip: {
                            marker: false,
                            y: {
                                formatter(number) {
                                    return number
                                }
                            }
                        },
                        xaxis: { categories: this.labels },
                        series: [{
                            name: 'LIKES',
                            data: this.values,
                        }],
                    }
                }
            }">
            <div x-ref="chart" class=""></div>
        </div>

        <div
            class="bg-white rounded-lg p-2 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden"
            x-data="{
                values: [45, 55, 75, 25, 45, 110],
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
                init() {
                    let chart = new ApexCharts(this.$refs.chart, this.options)

                    chart.render()

                    this.$watch('values', () => {
                        chart.updateOptions(this.options)
                    })
                },
                get options() {
                    return {
                        colors: ['#4C148B'],
                        dataLabels: {
                            style: {
                                colors: ['#F44336', '#E91E63', '#9C27B0']
                            }
                        },
                        markers: {
                           colors: ['#150380']
                        },
                        chart: { type: 'line', toolbar: false },
                        tooltip: {
                            marker: false,
                            y: {
                                formatter(number) {
                                    return number
                                }
                            }
                        },
                        xaxis: { categories: this.labels },
                        series: [{
                            name: 'Views',
                            data: this.values,
                        }],
                    }
                }
            }">
            <div x-ref="chart" class=""></div>
        </div>
    </div>
</div>

<h2 class="mx-auto mt-8 pb-5 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
    All Projects
</h2>
<div class="mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col mt-2">
        <div class="relative align-middle min-w-full overflow-x-auto overflow-hidden sm:rounded-lg shadow-md sm:hover:shadow-sm sm:transition-all duration-300 ease-linear">
{{--            <div class="absolute top-0 left-12 flex h-12 items-center space-x-3 bg-gray-50 sm:left-16">--}}
{{--                <button type="button" class="inline-flex items-center rounded border border-gray-300 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm sm:hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Bulk edit</button>--}}
{{--                <button type="button" class="inline-flex items-center rounded border border-gray-300 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm sm:hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Delete all</button>--}}
{{--            </div>--}}
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="relative w-12 px-6 sm:w-16 sm:px-8">
                        <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                    </th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title</th>
                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Likes</th>
                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Status</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Created</th>
                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                <tr>
                    <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                        <!-- Selected row marker, only show when row is selected. -->
                        <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                        <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                    </td>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                            </div>
                            <div class="hidden sm:block ml-4">
                                <div class="font-medium text-gray-900">Drawing App</div>
                                <div class="text-gray-500">View Code</div>
                            </div>
                        </div>
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                        56
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                        <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active</span>
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        July 4, 2022
                    </td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <a href="#" class="text-[#603997] sm:hover:text-indigo-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">, Lindsay Walton</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                        <!-- Selected row marker, only show when row is selected. -->
                        <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                        <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                    </td>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                            </div>
                            <div class="hidden sm:block ml-4">
                                <div class="font-medium text-gray-900">Drawing App</div>
                                <div class="text-gray-500">View Code</div>
                            </div>
                        </div>
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                        56
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                        <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active</span>
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        July 4, 2022
                    </td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <a href="#" class="text-[#603997] sm:hover:text-indigo-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">, Lindsay Walton</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                        <!-- Selected row marker, only show when row is selected. -->
                        <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                        <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                    </td>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                            </div>
                            <div class="hidden sm:block ml-4">
                                <div class="font-medium text-gray-900">Drawing App</div>
                                <div class="text-gray-500">View Code</div>
                            </div>
                        </div>
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                        56
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                        <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active</span>
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        July 4, 2022
                    </td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <a href="#" class="text-[#603997] sm:hover:text-indigo-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">, Lindsay Walton</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                        <!-- Selected row marker, only show when row is selected. -->
                        <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                        <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                    </td>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                            </div>
                            <div class="hidden sm:block ml-4">
                                <div class="font-medium text-gray-900">Drawing App</div>
                                <div class="text-gray-500">View Code</div>
                            </div>
                        </div>
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                        56
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                        <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Active</span>
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        July 4, 2022
                    </td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <a href="#" class="text-[#603997] sm:hover:text-indigo-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">, Lindsay Walton</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                        <!-- Selected row marker, only show when row is selected. -->
                        <div class="absolute inset-y-0 left-0 w-0.5 bg-[#501C88]"></div>

                        <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                    </td>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                            </div>
                            <div class="hidden sm:block ml-4">
                                <div class="font-medium text-gray-900">Drawing App</div>
                                <div class="text-gray-500">View Code</div>
                            </div>
                        </div>
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                        56
                    </td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                        <span class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">Not Active</span>
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        July 4, 2022
                    </td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <a href="#" class="text-[#603997] sm:hover:text-indigo-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">, Lindsay Walton</span>
                        </a>
                    </td>
                </tr>

                <!-- More people... -->
                </tbody>
            </table>
            <nav
                class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6"
                aria-label="Pagination">
                <div class="hidden sm:block">
                    <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium">
                            1
                        </span>
                        to
                        <span class="font-medium">
                            10
                        </span>
                        of
                        <span class="font-medium">
                            20
                        </span>
                        results
                    </p>
                </div>
                <div class="flex-1 flex justify-between sm:justify-end">
                    <a
                        href="#"
                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white sm:hover:bg-gray-50">
                        Previous
                    </a>
                    <a
                        href="#"
                        class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white sm:hover:bg-gray-50">
                        Next
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
