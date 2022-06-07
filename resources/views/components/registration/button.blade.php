<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm font-medium text-white bg-[#3273F6] sm:hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors']) }}>
    {{ $slot }}
</button>
