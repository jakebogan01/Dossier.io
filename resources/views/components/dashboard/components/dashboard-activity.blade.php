@aware(['$activities'])

@if(count($activities) >= 1)
    @foreach($activities as $key => $activity)
        <li>
            <div class="relative {{ ($loop->last) ? 'pb-0' : 'pb-8' }}">
                @if(!$loop->last)
                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                @endif
                <a href="{{ route(strtolower($activity->section)) }}">
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
                                <span class="text-sm text-gray-500"><span class="font-medium text-gray-900">{{ $activity->section }}</span> {{ $activity->action }}</span>
                            </div>
                            <div class="text-right text-sm whitespace-nowrap text-gray-500 pr-1">
                                <time datetime="2020-09-20">{{ $activity->serializeDate(now()) }}</time>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </li>
    @endforeach
@else
    <li class="flex justify-center items-center">
        <div class="w-[300px] opacity-60">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129.375 133.881">
                <g transform="translate(-72.625 -136)">
                    <path fill="#e6e7eb" d="M191.73 176.294c4.616 6.89.045 18.873-6.664 26.939-6.649 8.102-15.331 12.265-22.766 14.539-7.49 2.244-13.622 2.58-22.785 7.776-9.205 5.254-21.327 15.444-31.997 15.439s-19.843-10.147-22.414-21.51 1.356-23.917 7.707-32.878c6.409-8.92 15.236-14.239 23.528-13.896 8.268.247 15.973 6.063 23.049 5.817 7.038-.188 13.545-6.461 23.7-8.703s24.025-.414 28.642 6.476Z"/>
                    <path fill="#d0d1d3" d="M153.961 176.36a21.183 21.183 0 1 0 11.706 27.576 21.183 21.183 0 0 0-11.706-27.576Zm-.09 26.325-9.066-3.663a1.629 1.629 0 0 1-.9-2.12l5.494-13.599a1.63 1.63 0 0 1 3.022 1.221l-4.883 12.087 7.553 3.052a1.63 1.63 0 1 1-1.22 3.022Z"/>
                    <rect width="20" height="6" fill="#d0d1d3" rx="3" transform="translate(100 190)"/>
                    <rect width="16" height="6" fill="#d0d1d3" rx="3" transform="translate(110 178)"/>
                    <rect width="27" height="6" fill="#d0d1d3" rx="3" transform="translate(97 205)"/>
                    <rect width="17" height="6" fill="#d0d1d3" rx="3" transform="translate(115 214)"/>
                    <text fill="#9c9c9d" font-family="HelveticaNeue-Medium, Helvetica Neue" font-size="15" font-weight="500" transform="translate(73 211)"><tspan x="0" y="0">No Recent Activity</tspan></text>
                </g>
            </svg>
        </div>
    </li>
@endif
