@aware(['project'])

<li x-bind="disableNextAndPreviousButtons" class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center g-no-repeat bg-center bg-cover" role="option" style="background-image: url('https://avatars.githubusercontent.com/u/66225768?v=4')">
    <div class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 px-[25px] sm:pl-16" style="background-color: rgba(0,0,0,0.5)">
        <h3 class="flex items-center font-bold text-[23px] mb-6 opacity-70" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="50">
            {{ $project->title ?: 'Need title' }}
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 opacity-50 sm:hover:opacity-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
            </span>
        </h3>
        <p class="font-bold text-base sm:max-w-[300px] leading-loose mb-6" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="100">
            {{ $project->description ?: 'Need description' }}
        </p>
        <a href="{{ $project->links['github'] }}" class="block">
            <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                VIEW PROJECT
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
            </button>
        </a>
        <a href="{{ $project->links['code'] }}" class="block">
            <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="200">
                VIEW CODE
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
            </button>
        </a>
    </div>
</li>
