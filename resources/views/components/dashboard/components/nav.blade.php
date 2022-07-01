<nav aria-label="Sidebar" {{ $attributes->merge(['class' => 'mt-5 flex-1']) }}>
    <a href="{{ route('dashboard') }}" class="{{ (auth()->user()->dark_mode) ? 'text-gray-500' : 'text-[#9650d9]' }} sm:hover:text-white group flex pb-4 text-sm font-bold sm:transition-colors">
            <span class="{{ (request()->routeIs('dashboard')) ? 'text-white' : '' }} relative flex items-center pl-10 grow">
            <span class="{{ (request()->routeIs('dashboard')) ? 'border-white' : 'border-transparent' }} absolute left-0 border h-full block round rounded-fulled-full"></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" /></svg>
            <span class="flex-1">
                Dashboard
            </span>
        </span>
    </a>
    <a href="{{ route('profile') }}" class="{{ (auth()->user()->dark_mode) ? 'text-gray-500' : 'text-[#9650d9]' }} sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors">
        <span class="{{ (request()->routeIs('profile')) ? 'text-white' : '' }} relative flex items-center pl-10 grow">
        <span class="{{ (request()->routeIs('profile')) ? 'border-white' : 'border-transparent' }} absolute left-0 border h-full block round rounded-fulled-full"></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
            <span class="flex-1">
                Profile
            </span>
        </span>
    </a>
    <a href="{{ route('skills') }}" class="{{ (auth()->user()->dark_mode) ? 'text-gray-500' : 'text-[#9650d9]' }} sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors">
        <span class="{{ (request()->routeIs('skills')) ? 'text-white' : '' }} relative flex items-center pl-10 grow">
        <span class="{{ (request()->routeIs('skills')) ? 'border-white' : 'border-transparent' }} absolute left-0 border h-full block round rounded-fulled-full"></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
            <span class="flex-1">
                Skills
            </span>
        </span>
    </a>
    <a href="{{ route('experiences') }}" class="{{ (auth()->user()->dark_mode) ? 'text-gray-500' : 'text-[#9650d9]' }} sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors">
        <span class="{{ (request()->routeIs('experiences')) ? 'text-white' : ''}} relative flex items-center pl-10 grow">
        <span class="{{ (request()->routeIs('experiences')) ? 'border-white' : 'border-transparent' }} absolute left-0 border h-full block round rounded-fulled-full"></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
            <span class="flex-1">
                Experience
            </span>
        </span>
    </a>
    <a href="{{ route('projects') }}" class="{{ (auth()->user()->dark_mode) ? 'text-gray-500' : 'text-[#9650d9]' }} sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors">
        <span class="{{ (request()->routeIs('projects')) ? 'text-white' : '' }} relative flex items-center pl-10 grow">
        <span class="{{ (request()->routeIs('projects')) ? 'border-white' : 'border-transparent' }} absolute left-0 border h-full block round rounded-fulled-full"></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
            <span class="flex-1">
                Projects
            </span>
        </span>
    </a>
    <a href="{{ route('testimonials') }}" class="{{ (auth()->user()->dark_mode) ? 'text-gray-500' : 'text-[#9650d9]' }} sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors">
        <span class="{{ (request()->routeIs('testimonials')) ? 'text-white' : ''}} relative flex items-center pl-10 grow">
        <span class="{{ (request()->routeIs('testimonials')) ? 'border-white' : 'border-transparent' }} absolute left-0 border h-full block round rounded-fulled-full"></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
            <span class="flex-1">
                Testimonials
            </span>
        </span>
    </a>
    <a href="{{ route('contact') }}" class="{{ (auth()->user()->dark_mode) ? 'text-gray-500' : 'text-[#9650d9]' }} sm:hover:text-white group flex py-4 text-sm font-bold sm:transition-colors">
        <span class="{{ (request()->routeIs('contact')) ? 'text-white' : '' }} relative flex items-center pl-10 grow">
        <span class="{{ (request()->routeIs('contact')) ? 'border-white' : 'border-transparent' }} absolute left-0 border h-full block round rounded-fulled-full"></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
            <span class="flex-1">
                Contact
            </span>
        </span>
    </a>
</nav>
