@aware(['type', 'model', 'title', 'message', 'max', 'min', 'minDate', 'pattern', 'required'])

<div>
    <div class="{{ (auth()->user()->dark_mode) ? 'border-transparent focus-within:ring-transparent focus-within:border-transparent' : 'border-gray-300 focus-within:ring-indigo-600 focus-within:border-indigo-600' }} relative border rounded-md shadow-sm focus-within:ring-1">
    <label for="{{ $model }}" class="{{ (auth()->user()->dark_mode) ? 'bg-transparent text-white -top-6 left-0' : 'bg-white text-gray-900 -top-2 left-2' }} absolute -mt-px inline-block px-1 text-xs font-medium">
        {{ $title }}
    </label>
    <input wire:model="{{ $model }}" type="{{ $type }}" name="{{ $model }}" id="{{ $model }}" maxlength="{{ $max }}" minlength="{{ $min }}" min="{{ $minDate }}" max="{{ NOW()->format('Y-d-m') }}" autocomplete="on" {{ $pattern }} class="{{ (auth()->user()->dark_mode) ? 'bg-[#262c33] text-white' : 'bg-white text-gray-900' }} block w-full border-0 px-3 py-2 rounded-md placeholder-gray-500 focus:ring-0 sm:text-sm" {{ $required }}>
    </div>
    @error($model) <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
</div>
