@if($featuredUsers !== null)
    @foreach($featuredUsers as $key => $user)
        <a href="{{ route('theme-one', str($user)->slug()->__toString()) }}" data-aos="fade-up" data-aos-delay="{{ $key }}00" data-aos-anchor-placement="top-bottom" target="_blank">
            <div class="relative space-y-4 text-center group">
                <img class="mx-auto h-16 w-16 rounded-full border-4 border-[#9D59EF] sm:group-hover:border-white sm:transition-all duration-200 ease-linear transform sm:group-hover:-translate-y-2" src="{{ $user->first()->profile->profile_photo_path }}" alt="{{ $user->first()->profile->portfolio_name }}" loading="eager">
                <div class="space-y-2">
                    <div class="text-xs font-medium lg:text-sm">
                        <h3 class="text-white">
                            {{ $user->first()->profile->portfolio_name }}
                        </h3>
                        <p class="text-gray-400">
                            {{ $user->first()->profile->job_position }}
                        </p>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@endif
