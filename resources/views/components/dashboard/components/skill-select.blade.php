@aware(['skillIcons'])

<div class="col-span-12 sm:col-span-3 min-w-[300px]">
    <label for="location" class="text-sm font-medium text-gray-700">{{ $slot }}</label>
    <select id="location" name="location" class="h-[38px] mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
        <option disabled selected value></option>
        @foreach($skillIcons as $skill => $value)
            <option>{{ $skill }}</option>
        @endforeach
    </select>
</div>
