<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56]' : 'bg-gray-100' }} rounded-b-lg p-4 flex justify-between">
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56] text-gray-500' : 'bg-gray-100 text-gray-300' }} flex items-center justify-center px-2 py-1 rounded-lg cursor-pointer">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" type="button" class="flex items-center justify-center bg-white px-2 py-1 text-gray-500 hover:text-gray-600 rounded-lg cursor-pointer">
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
            </span>

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" type="button" rel="next" class="flex items-center justify-center bg-white px-2 py-1 text-gray-500 hover:text-gray-600 rounded-lg cursor-pointer">
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span class="{{ (auth()->user()->dark_mode) ? 'bg-[#434c56] text-gray-500' : 'bg-gray-100 text-gray-300' }} flex items-center justify-center px-2 py-1 rounded-lg cursor-pointer">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
