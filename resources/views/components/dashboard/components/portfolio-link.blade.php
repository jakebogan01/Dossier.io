<button type="button" x-data @click="$tooltip('Copied!')" class="usersPortfolio cursor-pointer" onclick="copyText()">
    <span class="sr-only">https://dossier.test/portfolio/{{ $usersPrtfolio }}</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-[#3531B87F] hover:text-[#3531B8] transform hover:scale-75 transition-all" viewBox="0 0 20 20" fill="currentColor">
      <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z" />
      <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z" />
    </svg>
</button>
