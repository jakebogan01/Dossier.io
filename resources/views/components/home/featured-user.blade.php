@if($featuredUsers !== null)
    <h2 data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-center text-gray-400 text-sm font-semibold uppercase tracking-wide cursor-default">
        View some of our users portfolio's!
    </h2>
    <div class="mt-8 flex justify-center space-x-6">
        @foreach($featuredUsers as $key => $user)
            <a href="{{ route('theme-one', str($user->profile->slug)->slug()->__toString()) }}" data-aos="fade-up" data-aos-delay="{{ $key }}00" data-aos-anchor-placement="top-bottom" class="min-w-[140px]" target="_blank">
                <div class="relative space-y-4 text-center group">
                    <img class="mx-auto h-16 w-16 rounded-full border-4 border-[#9D59EF] sm:group-hover:border-white sm:transition-all duration-200 ease-linear transform sm:group-hover:-translate-y-2" src="{{ $user->profile->profile_photo_path }}" alt="{{ $user->profile->portfolio_name }}" loading="eager">
                    <div class="space-y-2">
                        <div class="text-xs font-medium lg:text-sm">
                            <h3 class="text-white">
                                {{ $user->profile->portfolio_name }}
                            </h3>
                            <p class="text-gray-400">
                                {{ $user->profile->job_position }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endif
