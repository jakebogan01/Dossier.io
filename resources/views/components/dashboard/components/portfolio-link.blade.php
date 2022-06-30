<button aria-label="Copy Portfolio URL" type="button" x-data @click="$tooltip('Copied!')" class="usersPortfolio cursor-pointer" onclick="copyText()">
    <span class="sr-only">https://dossier.test/portfolio/{{ $usersPrtfolio }}</span>
    <span class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-[#3531B87F]' }} {{ (auth()->user()->dark_mode) ? 'sm:hover:text-blue-300' : 'sm:hover:text-[#3531B8]' }} block transform sm:hover:scale-90 sm:transition-all">portfolio/{{ $usersPrtfolio }}</span>
</button>
