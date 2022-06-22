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
                        {{ $currentUser->total_views ?: 0 }}
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

    <livewire:dashboard-form :currentUser="$currentUser"/>
</div>
