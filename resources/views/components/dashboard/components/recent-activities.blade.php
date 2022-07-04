@aware(['$activities'])

<div class="col-span-2 2xl:col-span-1" x-data="{ more: true }">
    <section aria-labelledby="activity-title" class="lg:col-start-3 lg:col-span-1">
        <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-white' }} px-6 py-7 rounded-lg shadow-md sm:hover:shadow-sm rounded-lg sm:transition-all duration-300 ease-linear overflow-hidden sm:px-6">
            <h2 id="activity-title" class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} text-lg font-medium">
                Recent Activity
            </h2>
            <div class="mt-6 flow-root">
                <ul role="list" class="-mb-8">
                    @if(count($activities) >= 1)
                        @foreach($activities as $key => $activity)
                            <li>
                                <div class="relative pb-8">
                                    @unless($loop->last)
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                    @endunless
                                    <a href="{{ route(strtolower($activity->section)) }}">
                                        <div class="{{ (auth()->user()->dark_mode) ? 'sm:hover:bg-[#59626e]' : 'sm:hover:bg-gray-100' }} relative flex space-x-3 cursor-pointer">
                                              <span class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] ring-[#434c56]' : 'bg-[#993BCE] ring-white' }} h-8 w-8 rounded-full flex items-center justify-center ring-8 sm:transition-all duration-300 ease-linear">
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" /></svg>
                                              </span>
                                            <div class="min-w-0 flex-1 flex justify-between items-center space-x-4">
                                                <div>
                                                    <span class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-sm">
                                                        <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-900' }} font-bold">
                                                            {{ $activity->section }}
                                                        </span> {{ $activity->action }}
                                                    </span>
                                                </div>
                                                <div class="{{ (auth()->user()->dark_mode) ? 'text-gray-300' : 'text-gray-500' }} text-right text-sm whitespace-nowrap pr-1">
                                                    <time datetime="2020-09-20">
                                                        {{ $activity->serializeDate($activity->created_at) }}
                                                    </time>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <li class="flex justify-center items-center -mt-20">
                            <div class="{{ (auth()->user()->dark_mode) ? 'hidden' : 'block' }} w-[300px] opacity-60">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129.375 133.881"><g transform="translate(-72.625 -136)"><path fill="#e6e7eb" d="M191.73 176.294c4.616 6.89.045 18.873-6.664 26.939-6.649 8.102-15.331 12.265-22.766 14.539-7.49 2.244-13.622 2.58-22.785 7.776-9.205 5.254-21.327 15.444-31.997 15.439s-19.843-10.147-22.414-21.51 1.356-23.917 7.707-32.878c6.409-8.92 15.236-14.239 23.528-13.896 8.268.247 15.973 6.063 23.049 5.817 7.038-.188 13.545-6.461 23.7-8.703s24.025-.414 28.642 6.476Z"/><path fill="#d0d1d3" d="M153.961 176.36a21.183 21.183 0 1 0 11.706 27.576 21.183 21.183 0 0 0-11.706-27.576Zm-.09 26.325-9.066-3.663a1.629 1.629 0 0 1-.9-2.12l5.494-13.599a1.63 1.63 0 0 1 3.022 1.221l-4.883 12.087 7.553 3.052a1.63 1.63 0 1 1-1.22 3.022Z"/><rect width="20" height="6" fill="#d0d1d3" rx="3" transform="translate(100 190)"/><rect width="16" height="6" fill="#d0d1d3" rx="3" transform="translate(110 178)"/><rect width="27" height="6" fill="#d0d1d3" rx="3" transform="translate(97 205)"/><rect width="17" height="6" fill="#d0d1d3" rx="3" transform="translate(115 214)"/><text fill="#9c9c9d" font-family="HelveticaNeue-Medium, Helvetica Neue" font-size="15" font-weight="500" transform="translate(73 211)"><tspan x="0" y="0">No Recent Activity</tspan></text></g></svg>
                            </div>
                            <div class="{{ (auth()->user()->dark_mode) ? 'block' : 'hidden' }} w-[300px] opacity-60">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129.375 133.881"><g transform="translate(-72.625 -136)"><path d="M191.73 176.294c4.616 6.89.045 18.873-6.664 26.939-6.649 8.102-15.331 12.265-22.766 14.539-7.49 2.244-13.622 2.58-22.785 7.776-9.205 5.254-21.327 15.444-31.997 15.439s-19.843-10.147-22.414-21.51 1.356-23.917 7.707-32.878c6.409-8.92 15.236-14.239 23.528-13.896 8.268.247 15.973 6.063 23.049 5.817 7.038-.188 13.545-6.461 23.7-8.703s24.025-.414 28.642 6.476Z" fill="#606974"/><path d="M153.961 176.36a21.183 21.183 0 1 0 11.706 27.576 21.183 21.183 0 0 0-11.706-27.576Zm-.09 26.325-9.066-3.663a1.629 1.629 0 0 1-.9-2.12l5.494-13.599a1.63 1.63 0 0 1 3.022 1.221l-4.883 12.087 7.553 3.052a1.63 1.63 0 1 1-1.22 3.022Z" fill="#383d45"/><rect width="20" height="6" rx="3" transform="translate(100 190)" fill="#383d45"/><rect width="16" height="6" rx="3" transform="translate(110 178)" fill="#383d45"/><rect width="27" height="6" rx="3" transform="translate(97 205)" fill="#383d45"/><rect width="17" height="6" rx="3" transform="translate(115 214)" fill="#383d45"/><path d="M74.065 200.29h1.98l4.89 7.89h.03v-7.89h1.785V211h-1.98l-4.875-7.875h-.045V211h-1.785Zm14.22 10.92a4.223 4.223 0 0 1-1.658-.31 3.535 3.535 0 0 1-1.227-.845 3.625 3.625 0 0 1-.765-1.29 4.966 4.966 0 0 1-.262-1.65 4.918 4.918 0 0 1 .262-1.635 3.625 3.625 0 0 1 .765-1.29 3.535 3.535 0 0 1 1.23-.848 4.223 4.223 0 0 1 1.658-.307 4.223 4.223 0 0 1 1.658.307 3.535 3.535 0 0 1 1.23.848 3.625 3.625 0 0 1 .765 1.29 4.918 4.918 0 0 1 .259 1.635 4.966 4.966 0 0 1-.263 1.65 3.625 3.625 0 0 1-.765 1.29 3.535 3.535 0 0 1-1.23.847 4.223 4.223 0 0 1-1.657.308Zm0-1.35a1.962 1.962 0 0 0 .99-.24 2.086 2.086 0 0 0 .69-.63 2.749 2.749 0 0 0 .4-.877 3.926 3.926 0 0 0 .128-1 3.955 3.955 0 0 0-.128-.99 2.654 2.654 0 0 0-.4-.878 2.119 2.119 0 0 0-.69-.622 1.962 1.962 0 0 0-.99-.24 1.962 1.962 0 0 0-.99.24 2.119 2.119 0 0 0-.69.622 2.654 2.654 0 0 0-.4.878 3.955 3.955 0 0 0-.128.99 3.926 3.926 0 0 0 .128 1 2.75 2.75 0 0 0 .4.877 2.086 2.086 0 0 0 .69.63 1.962 1.962 0 0 0 .99.24Zm9.75-9.57h5.115a3.968 3.968 0 0 1 2.655.765 2.665 2.665 0 0 1 .885 2.13 3.11 3.11 0 0 1-.225 1.268 2.767 2.767 0 0 1-.525.81 2.051 2.051 0 0 1-.593.443q-.292.135-.427.18v.03a1.913 1.913 0 0 1 .517.15 1.527 1.527 0 0 1 .518.383 2.083 2.083 0 0 1 .4.682 3.017 3.017 0 0 1 .158 1.05 9.5 9.5 0 0 0 .14 1.719 2.26 2.26 0 0 0 .447 1.1h-2.01a1.75 1.75 0 0 1-.247-.765q-.037-.42-.038-.81a7.721 7.721 0 0 0-.09-1.268 2.21 2.21 0 0 0-.33-.885 1.4 1.4 0 0 0-.653-.517 2.879 2.879 0 0 0-1.062-.165h-2.76V211h-1.875Zm1.875 4.875h3.075a1.951 1.951 0 0 0 1.365-.427 1.658 1.658 0 0 0 .465-1.283 1.984 1.984 0 0 0-.15-.832 1.213 1.213 0 0 0-.413-.5 1.516 1.516 0 0 0-.6-.24 3.978 3.978 0 0 0-.7-.06H99.91Zm13.77 1.275a2.758 2.758 0 0 0-.173-.78 2.078 2.078 0 0 0-.39-.653 1.931 1.931 0 0 0-.6-.45 1.768 1.768 0 0 0-.787-.173 2.055 2.055 0 0 0-.818.158 1.87 1.87 0 0 0-.63.435 2.151 2.151 0 0 0-.42.652 2.276 2.276 0 0 0-.173.81Zm-3.99 1.125a2.978 2.978 0 0 0 .127.87 2.144 2.144 0 0 0 .382.735 1.844 1.844 0 0 0 .645.5 2.128 2.128 0 0 0 .93.188 2.054 2.054 0 0 0 1.208-.322 1.906 1.906 0 0 0 .682-.968h1.62a3.224 3.224 0 0 1-.464 1.132 3.235 3.235 0 0 1-.795.832 3.431 3.431 0 0 1-1.042.51 4.2 4.2 0 0 1-1.208.168 4.106 4.106 0 0 1-1.62-.3 3.349 3.349 0 0 1-1.193-.84 3.565 3.565 0 0 1-.735-1.29 5.24 5.24 0 0 1-.247-1.65 4.668 4.668 0 0 1 .262-1.568 4.013 4.013 0 0 1 .75-1.3 3.587 3.587 0 0 1 1.178-.893 3.571 3.571 0 0 1 1.56-.33 3.475 3.475 0 0 1 1.642.382 3.6 3.6 0 0 1 1.208 1.009 4.1 4.1 0 0 1 .7 1.447 4.437 4.437 0 0 1 .113 1.688Zm12.24-1.725a1.6 1.6 0 0 0-.578-1.087 1.884 1.884 0 0 0-1.192-.368 2.459 2.459 0 0 0-.705.113 1.673 1.673 0 0 0-.69.42 2.355 2.355 0 0 0-.525.855 4.07 4.07 0 0 0-.21 1.433 4.194 4.194 0 0 0 .112.96 2.624 2.624 0 0 0 .36.855 1.95 1.95 0 0 0 .638.608 1.814 1.814 0 0 0 .945.232 1.721 1.721 0 0 0 1.237-.465 2.161 2.161 0 0 0 .608-1.306h1.71a3.756 3.756 0 0 1-1.147 2.317 3.5 3.5 0 0 1-2.408.8 3.965 3.965 0 0 1-1.613-.307 3.418 3.418 0 0 1-1.178-.84 3.567 3.567 0 0 1-.727-1.26 4.952 4.952 0 0 1-.247-1.59 5.432 5.432 0 0 1 .24-1.635 3.745 3.745 0 0 1 .72-1.328 3.369 3.369 0 0 1 1.193-.885 4.025 4.025 0 0 1 1.672-.322 4.674 4.674 0 0 1 1.283.172 3.378 3.378 0 0 1 1.08.518 2.755 2.755 0 0 1 .772.87 2.979 2.979 0 0 1 .36 1.245Zm8.43.6a2.758 2.758 0 0 0-.172-.78 2.078 2.078 0 0 0-.39-.653 1.931 1.931 0 0 0-.6-.45 1.768 1.768 0 0 0-.787-.173 2.055 2.055 0 0 0-.818.158 1.87 1.87 0 0 0-.63.435 2.151 2.151 0 0 0-.42.652 2.276 2.276 0 0 0-.173.81Zm-3.99 1.125a2.978 2.978 0 0 0 .127.87 2.144 2.144 0 0 0 .382.735 1.844 1.844 0 0 0 .645.5 2.128 2.128 0 0 0 .93.188 2.054 2.054 0 0 0 1.208-.322 1.906 1.906 0 0 0 .682-.968h1.62a3.224 3.224 0 0 1-.464 1.132 3.235 3.235 0 0 1-.8.832 3.431 3.431 0 0 1-1.042.51 4.2 4.2 0 0 1-1.203.168 4.106 4.106 0 0 1-1.62-.3 3.349 3.349 0 0 1-1.193-.84 3.565 3.565 0 0 1-.735-1.29 5.24 5.24 0 0 1-.247-1.65 4.668 4.668 0 0 1 .262-1.568 4.013 4.013 0 0 1 .75-1.3 3.587 3.587 0 0 1 1.178-.893 3.571 3.571 0 0 1 1.56-.33 3.475 3.475 0 0 1 1.642.382 3.6 3.6 0 0 1 1.208 1.009 4.1 4.1 0 0 1 .7 1.447 4.437 4.437 0 0 1 .113 1.688Zm7.005-4.32h1.62v1.14l.03.03a2.867 2.867 0 0 1 1.02-1.015 2.718 2.718 0 0 1 1.4-.368 2.9 2.9 0 0 1 2.01.66 2.526 2.526 0 0 1 .735 1.98V211h-1.71v-4.875a2.107 2.107 0 0 0-.39-1.328 1.417 1.417 0 0 0-1.125-.412 1.858 1.858 0 0 0-.78.158 1.692 1.692 0 0 0-.585.435 2.045 2.045 0 0 0-.375.652 2.329 2.329 0 0 0-.135.8V211h-1.71Zm7.83 0h1.295v-2.325h1.71v2.325h1.54v1.275h-1.545v4.14a4.13 4.13 0 0 0 .022.465.8.8 0 0 0 .1.33.5.5 0 0 0 .248.2 1.218 1.218 0 0 0 .45.068q.18 0 .36-.008a1.788 1.788 0 0 0 .36-.053v1.32l-.555.06a5.024 5.024 0 0 1-.555.03 3.785 3.785 0 0 1-1.088-.127 1.452 1.452 0 0 1-.645-.375 1.294 1.294 0 0 1-.315-.622 4.684 4.684 0 0 1-.1-.855v-4.573h-1.29Zm13.05-2.955h2l4.12 10.71h-2.01l-1-2.835h-4.28L152.08 211h-1.935Zm-.655 6.45h3.27l-1.6-4.605h-.045Zm12.795-.9a1.6 1.6 0 0 0-.577-1.087 1.884 1.884 0 0 0-1.193-.368 2.459 2.459 0 0 0-.7.113 1.673 1.673 0 0 0-.69.42 2.355 2.355 0 0 0-.525.855 4.07 4.07 0 0 0-.21 1.433 4.2 4.2 0 0 0 .112.96 2.625 2.625 0 0 0 .36.855 1.95 1.95 0 0 0 .638.608 1.814 1.814 0 0 0 .945.232 1.721 1.721 0 0 0 1.238-.465 2.161 2.161 0 0 0 .597-1.306h1.71a3.756 3.756 0 0 1-1.148 2.317 3.5 3.5 0 0 1-2.408.8 3.965 3.965 0 0 1-1.612-.307 3.418 3.418 0 0 1-1.177-.84 3.567 3.567 0 0 1-.728-1.26 4.952 4.952 0 0 1-.247-1.59 5.433 5.433 0 0 1 .24-1.635 3.745 3.745 0 0 1 .72-1.328 3.369 3.369 0 0 1 1.192-.885 4.025 4.025 0 0 1 1.668-.327 4.674 4.674 0 0 1 1.283.172 3.378 3.378 0 0 1 1.08.518 2.755 2.755 0 0 1 .772.87 2.979 2.979 0 0 1 .365 1.245Zm2.325-2.595h1.29v-2.325h1.71v2.325h1.545v1.275h-1.55v4.14a4.13 4.13 0 0 0 .022.465.8.8 0 0 0 .1.33.5.5 0 0 0 .248.2 1.218 1.218 0 0 0 .45.068q.18 0 .36-.008a1.788 1.788 0 0 0 .36-.053v1.32l-.555.06a5.024 5.024 0 0 1-.555.03 3.785 3.785 0 0 1-1.088-.127 1.452 1.452 0 0 1-.645-.375 1.294 1.294 0 0 1-.312-.62 4.684 4.684 0 0 1-.1-.855v-4.575h-1.29Zm5.82-2.955h1.71v1.62h-1.71Zm0 2.955h1.71V211h-1.71Zm2.805 0h1.86l1.96 5.955h.03l1.89-5.955h1.77L182.08 211h-1.92Zm8.595-2.955h1.71v1.62h-1.71Zm0 2.955h1.71V211h-1.71Zm2.79 0h1.29v-2.325h1.71v2.325h1.545v1.275h-1.545v4.14a4.13 4.13 0 0 0 .022.465.8.8 0 0 0 .1.33.5.5 0 0 0 .248.2 1.218 1.218 0 0 0 .45.068q.18 0 .36-.008a1.788 1.788 0 0 0 .36-.053v1.32l-.555.06a5.024 5.024 0 0 1-.555.03 3.785 3.785 0 0 1-1.088-.127 1.452 1.452 0 0 1-.645-.375 1.294 1.294 0 0 1-.315-.622 4.684 4.684 0 0 1-.1-.855v-4.573h-1.29Zm4.92 0h1.875l2.025 5.79h.03l1.965-5.79h1.785l-3.02 8.175q-.21.525-.412 1a3.6 3.6 0 0 1-.5.848 2.139 2.139 0 0 1-.728.585 2.479 2.479 0 0 1-1.11.217 7.782 7.782 0 0 1-1.185-.09v-1.435q.21.03.4.068a2.14 2.14 0 0 0 .4.037 1.394 1.394 0 0 0 .5-.075.819.819 0 0 0 .323-.217 1.351 1.351 0 0 0 .217-.337 3.3 3.3 0 0 0 .165-.45l.195-.6Z" fill="#a0aab7"/></g></svg>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
            @if(count($activities) >= 5)
                <div class="mt-6 flex flex-col justify-stretch" x-cloak x-show.transition="more" >
                    <button wire:click.prevent="showMoreActivities(10)" @click="more = false" type="button" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#3c9182]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:transition-colors">
                        See more
                    </button>
                </div>
                <div class="mt-6 flex flex-col justify-stretch" x-cloak x-show.transition="!more" >
                    <button wire:click.prevent="showMoreActivities(5)" @click="more = true" type="button" class="{{ (auth()->user()->dark_mode) ? 'bg-[#4FAE9D] sm:hover:bg-[#3c9182]' : 'bg-[#993BCE] sm:hover:bg-[#57168C]' }} inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:transition-colors">
                        See less
                    </button>
                </div>
            @endif
        </div>
    </section>
</div>
