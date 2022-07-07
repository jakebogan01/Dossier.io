@aware(['user', 'skillIcons', 'class', 'animateType', 'animateDelay'])

@if($user['skill'] !== "")
    <li class="{{ $class }}" data-aos="{{ $animateType }}" data-aos-delay="{{ $animateDelay }}">
        <div class="flex justify-center pb-4">
            <div class="sm:absolute top-0 sm:left-3/4 sm:-translate-x-1/2 sm:-translate-y-1/2 flex items-center justify-center text-[#4046FF] w-[65px] h-[65px] rounded-full sm:transition-all" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                {!! $skillIcons[$user['skill']] !!}
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
                    {{ $user['description'] ?: 'SkillDescription' }}
                </p>
            </div>
        </div>
    </li>
@endif
