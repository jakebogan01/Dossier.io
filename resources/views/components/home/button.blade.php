@aware(['link', 'anchor', 'purpose'])

<a
@if($link)
    href="{{ route($link) }}"
@else
    href="{{ $anchor }}"
@endif
class="inline-flex rounded-md shadow">
    <button aria-label="{{ $purpose }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white sm:transition-colors']) }}>
        {{ $slot }}
    </button>
</a>
