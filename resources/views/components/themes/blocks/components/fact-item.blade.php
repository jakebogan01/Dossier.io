@aware(['fact', 'key'])

@if($fact !== "")
    <li class="flex items-center">
        <span data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-delay="{{ $key }}00">
            <svg xmlns="http://www.w3.org/2000/svg" class="min-w-[1.3125rem] w-[1.3125rem] h-[1.3125rem] mr-5" viewBox="0 0 21 21"><circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b" /><circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)" /></svg>
        </span>
        <span data-aos="fade-left" data-aos-anchor-placement="bottom-bottom" data-aos-delay="{{ $key }}00">
            {{ $fact }}
        </span>
    </li>
@endif
