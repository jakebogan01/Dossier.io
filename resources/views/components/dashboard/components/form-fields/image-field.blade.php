@aware(['model', 'message'])

<div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent' : 'bg-transparent border-gray-300' }} relative mt-1 flex justify-center px-6 {{ (auth()->user()->dark_mode) ? 'pt-8' : 'pt-5' }} pb-6 border-2 border-gray-300 border-dashed rounded-md">
    <label for="{{ $model }}" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-6 left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
        Photo
    </label>
    <div class="space-y-1 text-center">
        <div class="{{ (auth()->user()->dark_mode) ? 'text-white' : 'text-gray-600' }} flex text-sm">
            <label for="{{ $model }}" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white sm:hover:text-[#4FAE9D]' : 'bg-white text-indigo-600 sm:hover:text-indigo-500' }} relative cursor-pointer rounded-md font-medium focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                <span>
                    Upload a file
                </span>
                <input wire:model="{{ $model }}" id="{{ $model }}" name="{{ $model }}" type="file" class="sr-only">
            </label>
        </div>
    </div>
</div>
