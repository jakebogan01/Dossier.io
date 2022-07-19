@aware(['project'])

<li x-bind="disableNextAndPreviousButtons" class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center bg-no-repeat bg-center bg-cover" role="option" style="background-image: url('{{ $project->profile_photo_path }}')">
    <div class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 px-[25px] sm:pl-16" style="background-color: rgba(0,0,0,0.5)">
        <h3 class="flex items-center font-bold text-[23px] mb-6 opacity-70" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="50">
            {{ $project->title ?: 'Project title' }}
            <livewire:update-project-like :project="$project" />
        </h3>
        <p class="font-bold text-base sm:max-w-[300px] leading-loose mb-6" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="100">
            {{ $project->description ?: 'Project description' }}
        </p>
        @if($project->links['github'])
            <a href="{{ $project->links['code'] }}" class="block">
                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                    VIEW PROJECT
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
            </a>
        @endif
        @if($project->links['code'])
            <a href="{{ $project->links['github'] }}" class="block">
                <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="200">
                    VIEW CODE
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
            </a>
        @endif
    </div>
</li>
