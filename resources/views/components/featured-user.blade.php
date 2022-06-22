@if(count($users) >= 1)
    @foreach($users as $key => $user)
        <a href="#"
           data-aos="fade-up"
           data-aos-delay="{{ $key }}00"
           data-aos-anchor-placement="top-bottom">
            <div class="relative space-y-4 text-center group">
                <img
                    class="mx-auto h-16 w-16 rounded-full border-4 border-[#9D59EF] sm:group-hover:border-white sm:transition-all duration-200 ease-linear transform sm:group-hover:-translate-y-2"
                    src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                    alt="Real User"
                    loading="eager">
                <div class="space-y-2">
                    <div class="text-xs font-medium lg:text-sm">
                        <h3 class="text-white">
                            {{ $user }}
                        </h3>
                        <p class="text-gray-400">
                            Co-Founder / CTO
                        </p>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@endif
