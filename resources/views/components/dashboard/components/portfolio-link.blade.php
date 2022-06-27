<button type="button" x-data @click="$tooltip('Copied!')" class="usersPortfolio cursor-pointer" onclick="copyText()">
    <span class="sr-only">https://dossier.test/portfolio/{{ $usersPrtfolio }}</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-current {{ (auth()->user()->dark_mode) ? 'text-white' : 'text-[#3531B87F]' }} hover:text-[#3531B8] transform hover:scale-75 transition-all" viewBox="0 0 32 32"><path d="M20.938,20.271l7.333-7.333a1.309,1.309,0,0,0,0-1.876L20.938,3.729A1.183,1.183,0,0,0,19.5,3.437a1.245,1.245,0,0,0-.834,1.229V8a22.912,22.912,0,0,0-4.5.406A14.442,14.442,0,0,0,10.78,9.468a8.825,8.825,0,0,0-2.375,1.646A9.569,9.569,0,0,0,6.812,13.1a9.349,9.349,0,0,0-.927,2.271A14.292,14.292,0,0,0,5.437,17.7q-.1,1.051-.1,2.3,0,3.771,3.479,8.417a.692.692,0,0,0,.521.25A.6.6,0,0,0,9.6,28.6a.593.593,0,0,0,.4-.687q-.916-7.375,1.292-9.854A5.478,5.478,0,0,1,14,16.49,17.908,17.908,0,0,1,18.667,16v3.333a1.246,1.246,0,0,0,.834,1.229,1.292,1.292,0,0,0,1.438-.292ZM32,6V26a6.009,6.009,0,0,1-6,6H6a5.781,5.781,0,0,1-4.24-1.76A5.775,5.775,0,0,1,0,26V6A5.781,5.781,0,0,1,1.76,1.76,5.775,5.775,0,0,1,6,0H26a5.781,5.781,0,0,1,4.24,1.76A5.775,5.775,0,0,1,32,6Z"/></svg>
</button>
