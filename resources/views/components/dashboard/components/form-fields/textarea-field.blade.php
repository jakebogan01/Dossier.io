@aware(['model', 'title', 'message', 'styles'])

<div class="{{ $styles }}">
    <div class="relative mt-1">
        <label for="{{ $model }}" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-[18px] left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
            {{ $title }}
        </label>
        <textarea wire:model.defer="{{ $model }}" id="{{ $model }}" name="{{ $model }}" rows="5" class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] border-transparent focus-within:ring-transparent focus-within:border-transparent text-white' : 'bg-white border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600 text-gray-900' }} shadow-sm mt-1 block w-full sm:text-sm border rounded-md"></textarea>
    </div>
    @error($model) <span class="text-danger error">{{ $message }}</span>@enderror
</div>
