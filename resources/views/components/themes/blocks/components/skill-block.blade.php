@aware(['user', 'class', 'animateType', 'animateDelay'])

@if($user['skill'] !== "")
    <li class="{{ $class }}" data-aos="{{ $animateType }}" data-aos-delay="{{ $animateDelay }}">
        <div class="flex justify-center pb-4">
            <div
                class="sm:absolute top-0 sm:left-3/4 sm:-translate-x-1/2 sm:-translate-y-1/2 flex items-center justify-center w-[65px] h-[65px] rounded-full sm:transition-all"
                style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="#4046FF"><path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/></svg>
            </div>
        </div>
        <div class="space-y-4 text-base font-bold leading-loose text-white text-center sm:text-left">
            <div class="text-white text-base font-bold leading-loose space-y-1">
                <h3 class="text-2xl">
                    {{ $user['skill'] ?: 'Skill Title' }}
                </h3>
            </div>
            <div class="max-w-[382px] sm:max-w-none mx-auto text-[#B1B7D6] text-base font-bold leading-loose">
                <p>
                    {{ $user['description'] ?: 'Description needed' }}
                </p>
            </div>
        </div>
    </li>
@endif