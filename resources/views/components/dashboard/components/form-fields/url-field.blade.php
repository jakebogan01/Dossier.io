@aware(['type', 'model', 'title', 'message', 'grid'])

<div class="{{ $grid }}">
    <div class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
        <label for="{{ $model }}" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-6 left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
            {{ $title }}
        </label>
        <div class="relative rounded-md shadow-sm">
            <input wire:model="{{ $model }}" type="{{ $type }}" name="{{ $model }}" id="{{ $model }}" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-transparent text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm">
        </div>
    </div>
    <div>
        @error($model) <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
    </div>
</div>
