<div class="template_one flex font-lato" x-data="{ menuStatus: false, showBar: false }">
    <x-themes.navigation.nav :user="$user"></x-themes.navigation.nav>
    <div class="flex-1">
        <x-themes.blocks.intro :user="$user"></x-themes.blocks.intro>
        <x-themes.blocks.skills :user="$user" :skillIcons="$skillIcons"></x-themes.blocks.skills>
        <x-themes.blocks.experience :user="$user"></x-themes.blocks.experience>
        <x-themes.blocks.projects :user="$user"></x-themes.blocks.projects>
        <x-themes.blocks.testimonials :user="$user"></x-themes.blocks.testimonials>
        <x-themes.blocks.contact :user="$user"></x-themes.blocks.contact>
    </div>
    <a href="#home" aria-label="scroll up" class="fixed bottom-0 right-0 opacity-0 -translate-y-10 -translate-x-2 sm:transition-all z-50" :class="{ 'opacity-100' : showBar }" @scroll.window="showBar = (window.pageYOffset >= 20)">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 h-16 opacity-50 sm:hover:opacity-100 sm:transition-opacity" viewBox="0 0 20 20" fill="#ffffff"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" /></svg>
    </a>
</div>
