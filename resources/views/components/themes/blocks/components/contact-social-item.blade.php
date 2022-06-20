@aware(['link', 'animateType', 'animateDelay'])

@if($link)
    <span
        data-aos="{{ $animateType }}"
        data-aos-delay="{{ $animateDelay }}">
        <a
            href="{{ $link }}" target="_blank"
            class="opacity-75 sm:hover:opacity-100 sm:transition-opacity">
            {{ $slot }}
        </a>
    </span>
@endif
