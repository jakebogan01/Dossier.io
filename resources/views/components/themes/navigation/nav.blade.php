@aware(['user'])

<nav :class="{ 'w-[3.625rem]': menuStatus, 'w-0': !menuStatus }" x-cloak="menuStatus" class="mt-10 transition-all duration-300 delay-500 overflow-hidden">
    <div class="relative flex flex-col items-center justify-center">
        <div :class="{ 'visible': menuStatus, 'invisible': !menuStatus }" class="fixed top-8 space-y-8 invisible">
            <a href="#home" class="block opacity-50 sm:hover:opacity-100 transition-opacity" aria-current="page">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-700': menuStatus, 'translate-y-10 opacity-0 delay-350': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.5,17.5,0,0,0,17.5,0Zm0,8.065,8.545,6.641v12.23H20.166V19.553H14.834v7.383H8.955V14.706Z" fill="#fff"/></svg>
            </a>
            @if($user->skill)
                <a href="#skills" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-800': menuStatus, 'translate-y-10 opacity-0 delay-300': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M22.25,15.25h-3.5v-3.5h3.5m0,17.5h-3.5V18.75h3.5M20.5,3A17.5,17.5,0,1,0,38,20.5,17.5,17.5,0,0,0,20.5,3Z" transform="translate(-3 -3)" fill="#fff"/></svg>
                </a>
            @endif
            @if(count($user->experiences) >= 1)
                <a href="#experience" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-900': menuStatus, 'translate-y-10 opacity-0 delay-250': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M18.512,29.673a11.258,11.258,0,0,1-7.937-3.247l7.937-7.84V7.5a11.087,11.087,0,1,1,0,22.173Z" transform="translate(-1.039 -1.087)" fill="#fff"/><path d="M36.5,19A17.5,17.5,0,1,1,19,1.5,17.5,17.5,0,0,1,36.5,19Zm-3.182,0A14.318,14.318,0,1,1,19,4.682,14.318,14.318,0,0,1,33.318,19Z" transform="translate(-1.5 -1.5)" fill="#fff" fill-rule="evenodd"/></svg>
                </a>
            @endif
            @if(count($user->projects) >= 1)
                <a href="#projects" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1000': menuStatus, 'translate-y-10 opacity-0 delay-200': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.5,17.5,0,0,0,17.5,0Zm5.888,5.467a1.965,1.965,0,0,1,1.387.57l2.912,2.911a2.151,2.151,0,0,1-.121,3.034,2.151,2.151,0,0,1-3.034.122L21.621,9.192a2.151,2.151,0,0,1,.122-3.034,2.308,2.308,0,0,1,1.644-.691Zm-4.8,3.846,5.824,5.823L14.949,24.6,9.125,18.774l9.464-9.461ZM7.614,19.876l6.142,6.143L6.076,27.557l1.538-7.681Z" fill="#fff"/></svg>
                </a>
            @endif
            @if(count($user->testimonials) >= 1)
                <a href="#testimonials" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1100': menuStatus, 'translate-y-10 opacity-0 delay-150': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.5,17.5,0,0,0,17.5,0ZM16.16,8.238l.752,3.463c-2.2.488-4.229,1.122-4.065,3.583h2.589V24.5h-7.8V15.885c0-6.845,5.028-7.4,8.523-7.648Zm10.448,0,.754,3.463c-2.2.488-4.229,1.122-4.065,3.583h2.589V24.5h-7.8V15.885c0-6.845,5.026-7.4,8.522-7.648Z" fill="#fff"/></svg>
                </a>
            @endif
            @if($user->contact)
                <a href="#contact" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1200': menuStatus, 'translate-y-10 opacity-0 delay-100': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M20.875,3.375a17.5,17.5,0,1,0,17.5,17.5A17.551,17.551,0,0,0,20.875,3.375Zm0,5.251a5.251,5.251,0,1,1-5.251,5.251,5.268,5.268,0,0,1,5.251-5.251Zm0,25.274a12.747,12.747,0,0,1-10.5-5.6c.084-3.5,7-5.426,10.5-5.426S31.291,24.8,31.375,28.3A12.771,12.771,0,0,1,20.875,33.9Z" transform="translate(-3.375 -3.375)" fill="#fff"/></svg>
                </a>
            @endif
            <a href="/dashboard" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1300': menuStatus, 'translate-y-10 opacity-0 delay-50': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><g transform="translate(-126 -1019.068)"><circle cx="17.5" cy="17.5" r="17.5" transform="translate(126 1019.068)" fill="#fff"/><path d="M5.621,15.71h6.726a1.121,1.121,0,0,0,1.121-1.121V5.621A1.121,1.121,0,0,0,12.347,4.5H5.621A1.121,1.121,0,0,0,4.5,5.621v8.968A1.121,1.121,0,0,0,5.621,15.71ZM4.5,23.558a1.121,1.121,0,0,0,1.121,1.121h6.726a1.121,1.121,0,0,0,1.121-1.121V19.074a1.121,1.121,0,0,0-1.121-1.121H5.621A1.121,1.121,0,0,0,4.5,19.074Zm11.21,0a1.121,1.121,0,0,0,1.121,1.121h6.726a1.121,1.121,0,0,0,1.121-1.121V15.71a1.121,1.121,0,0,0-1.121-1.121H16.831A1.121,1.121,0,0,0,15.71,15.71Zm1.121-11.21h6.726a1.121,1.121,0,0,0,1.121-1.121V5.621A1.121,1.121,0,0,0,23.558,4.5H16.831A1.121,1.121,0,0,0,15.71,5.621v5.605A1.121,1.121,0,0,0,16.831,12.347Z" transform="translate(128.91 1021.979)" fill="#0f1119"/></g></svg>
            </a>
            <span @click="menuStatus = false" class="block opacity-50 sm:hover:opacity-100 transition-opacity cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1400': menuStatus, 'translate-y-10 opacity-0': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M20.875,3.375a17.5,17.5,0,1,0,17.5,17.5A17.5,17.5,0,0,0,20.875,3.375Zm4.433,23.836-4.433-4.435L16.442,27.21a1.345,1.345,0,1,1-1.9-1.9l4.433-4.433L14.54,16.44a1.345,1.345,0,1,1,1.9-1.9l4.433,4.433,4.433-4.433a1.344,1.344,0,0,1,1.9,1.9l-4.433,4.436,4.433,4.433a1.351,1.351,0,0,1,0,1.9,1.335,1.335,0,0,1-1.9,0Z" transform="translate(-3.375 -3.375)" fill="#fff"/></svg>
            </span>
        </div>
    </div>
</nav>
