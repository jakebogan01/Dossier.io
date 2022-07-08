@aware(['user', 'class', 'animateType', 'animateDelay'])

@if($user->title !== "")
    <li data-aos="{{ $animateType }}" data-aos-delay="{{ $animateDelay }}" class="{{ $class }}">
        <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                <img class="card_image object-cover shadow-lg rounded-lg transform sm:transition duration-300" src="{{ $user->profile_photo_path }}" alt="" loading="eager">
            </div>
            <div class="text-white text-base font-bold leading-loose space-y-1">
                <h3 class="text-xl">
                    {{ $user->title ?: 'Full Name' }}
                </h3>
                <p class="text-blue-500">
                    {{ $user->job_position ?: 'Job Title' }}
                </p>
            </div>
            <div class="text-[#B1B7D6] text-base font-bold leading-loose">
                <p>
                    {{ $user->description ?: '' }}
                </p>
            </div>
            <ul role="list" class="flex items-center space-x-5">
                @if($user->links['facebook'])
                    <li>
                        <a href="{{ $user->links['facebook'] ?: '#'}}" class="text-yellow-200 sm:hover:text-yellow-300">
                            <span class="sr-only">
                                Facebook
                            </span>
                            <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M18.893 0a1.065 1.065 0 0 1 .781.326 1.065 1.065 0 0 1 .326.781v17.786A1.112 1.112 0 0 1 18.893 20H13.8v-7.747h2.591l.391-3.021H13.8V7.3a1.668 1.668 0 0 1 .306-1.094 1.52 1.52 0 0 1 1.194-.36l1.588-.013v-2.7a17.453 17.453 0 0 0-2.318-.117 3.868 3.868 0 0 0-2.832 1.042 3.937 3.937 0 0 0-1.061 2.943v2.231h-2.6v3.021h2.6V20h-9.57a1.065 1.065 0 0 1-.781-.326A1.065 1.065 0 0 1 0 18.893V1.107A1.065 1.065 0 0 1 .326.326 1.065 1.065 0 0 1 1.107 0Z" /></svg>
                        </a>
                    </li>
                @endif
                @if($user->links['linkedin'])
                    <li>
                        <a href="{{ $user->links['linkedin'] ?: '#' }}" class="text-yellow-200 sm:hover:text-yellow-300">
                            <span class="sr-only">
                                LinkedIn
                            </span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" /></svg>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </li>
@endif
