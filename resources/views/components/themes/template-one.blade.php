<div class="flex py-[3.125rem] px-[1.5625rem] font-lato" x-data="{ test: false }">

    <x-themes.navigation.nav></x-themes.navigation.nav>

    <div class="hidden 2300:block flex-1 space-y-[3.125rem]">
        <x-themes.blocks.intro></x-themes.blocks.intro>

        <x-themes.blocks.skills></x-themes.blocks.skills>

        <x-themes.blocks.experience></x-themes.blocks.experience>
    </div>

    <div class="hidden 2300:block flex-1 space-y-[3.125rem]">
        <x-themes.blocks.projects></x-themes.blocks.projects>

        <x-themes.blocks.testimonials></x-themes.blocks.testimonials>

        <x-themes.blocks.contact></x-themes.blocks.contact>
    </div>

    <div class="2300:hidden flex-1 space-y-[3.125rem]">
        <div class="flex">
            <x-themes.blocks.intro></x-themes.blocks.intro>

            <x-themes.blocks.skills></x-themes.blocks.skills>
        </div>

        <x-themes.blocks.projects></x-themes.blocks.projects>

        <x-themes.blocks.testimonials></x-themes.blocks.testimonials>

        <div class="flex">
            <x-themes.blocks.experience></x-themes.blocks.experience>

            <x-themes.blocks.contact></x-themes.blocks.contact>
        </div>
    </div>

</div>
