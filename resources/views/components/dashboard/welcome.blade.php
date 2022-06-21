@aware(['currentUser'])

<div class="mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <h2 class="text-lg pb-5 leading-6 font-medium text-gray-900">
        Recent Analytics
    </h2>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 2xl:grid-cols-3">
        <div class="bg-[#e9edf5] p-2 space-y-4 shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear">
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
                values: [50, 55, 65, 54, 51],
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
                        dataLabels: {
                          enabled: true,
                          formatter: function (val) {
                            return val + '%';
                        },
                        offsetY: -20,
                        style: {
                        fontSize: '12px',
                        colors: ['#304758']
                        }
                        },

                        plotOptions: {
                          bar: {
                            dataLabels: {
                              position: 'top', // top, center, bottom
                            },
                          }
                        },
                        title: {
                          text: 'Monthly Inflation in Argentina, 2002',
                          floating: true,
                          offsetY: 330,
                          align: 'center',
                          style: {
                            color: '#444'
                          }
                        },
                        chart: { type: 'bar', height: 350, toolbar: false },
                        xaxis: {
                            categories: this.labels,
                            position: 'top',
                            axisBorder: {
                                show: false
                            },
                            axisTicks: {
                               show: false
                            },
                            crosshairs: {
                        fill: {
                          type: 'gradient',
                          gradient: {
                            colorFrom: '#D8E3F0',
                            colorTo: '#BED1E6',
                            stops: [0, 100],
                            opacityFrom: 0.4,
                            opacityTo: 0.5,
                          }
                        }
                      },
                      tooltip: {
                        enabled: true,
                      },
                    },
                    yaxis: {
                      axisBorder: {
                        show: false
                      },
                      axisTicks: {
                        show: false,
                      },
                      labels: {
                        show: false,
                        formatter: function (val) {
                          return val + '%';
                    }
                    }

                    },
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
                                colors: ['#57178D', '#E91E63', '#9C27B0']
                            }
                        },
                        legend: {
                          horizontalAlign: 'left'
                        },
                        markers: {
                           colors: ['#150380']
                        },
                        title: {
                          text: 'Fundamental Analysis of Stocks',
                          align: 'left'
                        },
                        subtitle: {
                          text: 'Price Movements',
                          align: 'left'
                        },
                        chart: { type: 'area', toolbar: false },
                        tooltip: {
                            marker: true,
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

    @if(count($currentUser->projects) >= 1)
        <div>
            <h2 class="mx-auto mt-8 pb-5 text-lg leading-6 font-medium text-gray-900">
                All Projects
            </h2>
            <div class="mx-auto">
                <div class="flex flex-col mt-2">
                    <div class="relative align-middle min-w-full overflow-x-auto overflow-hidden sm:rounded-lg shadow-md sm:hover:shadow-sm sm:transition-all duration-300 ease-linear">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title</th>
                                <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Likes</th>
                                <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Status</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Created</th>
                                <th scope="col" class="pl-3 pr-4 sm:pr-6 py-3.5 text-left text-sm font-semibold text-gray-900">Edit</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($currentUser->projects as $project)
                                <tr class="hover:bg-gray-50 transition-colors group">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6 border-l-2 border-transparent group-hover:border-[#6B158C7F] transition-colors">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full" src="https://nickjanetakis.com/assets/blog/cards/how-to-start-and-finish-any-web-app-project-678900795cfd6d4fa60e3655dd62ae9f61ef5e14b62ca62050e817e43e861f11.jpg" alt="">
                                            </div>
                                            <div class="hidden sm:block ml-4">
                                                <div class="font-medium text-gray-900">{{ $project->title }}</div>
                                                <a href="{{ $project->links['code'] }}" class="text-gray-500 hover:text-indigo-500">View Project</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-900 sm:table-cell">
                                        56
                                    </td>
                                    <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <div class="rounded-full w-2 h-2 border-2 {{ $project->public ? 'bg-green-400 border-green-500' : 'bg-red-400 border-red-500' }}"></div>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $project->created_at->format('F d, Y') }}
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="{{ route('projects', "project=$project->id") }}" class="flex text-[#6B158C7F] sm:hover:text-indigo-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">, Lindsay Walton</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
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
        </div>
    @endif

</div>
