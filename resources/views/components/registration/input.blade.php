@props(['disabled' => false])

<input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'bg-[#101533] bg-opacity-50 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full border-[#7784d1] rounded-2xl placeholder-[#747788] text-white']) !!}>
