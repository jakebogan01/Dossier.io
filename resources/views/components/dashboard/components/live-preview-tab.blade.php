@aware(['currentUser', 'tabOne', 'tabTwo', 'tabThree'])

<ul role="tablist" class="flex items-center">
    <li @click="formOne = true; formTwo = false; formThree = false">
        <button type="button"
            :class="(tab === 'introduction') ? '{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} bg-white' : '{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }} bg-transparent'"
            @click.prevent="tab = 'introduction';
            window.location.hash = 'introduction'"
            class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
            role="tab">
            {{ $tabOne }}
        </button>
    </li>
    <li @click="formOne = false; formTwo = true; formThree = false">
        <button type="button"
                :class="(tab === 'facts') ? '{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} bg-white' : '{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }} bg-transparent'"
                @click.prevent="tab = 'facts';
                window.location.hash = 'facts'"
                class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                role="tab">
            {{ $tabTwo }}
        </button>
    </li>
    <li @click="formOne = false; formTwo = false; formThree = true">
        <button type="button"
                :class="(tab === 'skills') ? '{{ (auth()->user()->dark_mode) ? 'text-gray-800' : 'text-[#993BCE]' }} bg-white' : '{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-400' }} bg-transparent'"
                @click.prevent="tab = 'skills';
                window.location.hash = 'skills'"
                class="inline-flex font-semibold px-5 py-2.5 rounded-t-md"
                role="tab">
            {{ $tabThree }}
        </button>
    </li>
</ul>
