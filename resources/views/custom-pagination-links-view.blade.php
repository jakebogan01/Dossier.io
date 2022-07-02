<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="flex items-center justify-center bg-gray-100 px-2 py-1 text-gray-400 rounded-lg cursor-pointer">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="flex items-center justify-center bg-white px-2 py-1 text-gray-500 hover:text-gray-600 rounded-lg cursor-pointer">
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
            </span>

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="flex items-center justify-center bg-white px-2 py-1 text-gray-500 hover:text-gray-600 rounded-lg cursor-pointer">
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span class="flex items-center justify-center bg-gray-100 px-2 py-1 text-gray-400 rounded-lg cursor-pointer">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
