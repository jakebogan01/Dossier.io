@aware (['currentUser'])

<li class="py-4 flex items-center justify-between">
    <div class="flex flex-col">
        {{ $slot }}
    </div>
    <div
        @if ($currentUser->settings['public'] !== null || isset($currentUser->settings['public']))
            x-data="{ value: {{ $currentUser->settings['public'] ?: false }} }"
        @else
            x-data="{ value: false }"
        @endif
        class="flex items-center justify-center"
        x-id="['toggle-label']">
        <input type="hidden" name="sendNotifications" :value="value">

        <!-- Label -->
        <label
            @click="$refs.toggle.click(); $refs.toggle.focus()"
            :id="$id('toggle-label')"
            class="text-gray-900 transition-colors dark:text-white">
            Send notifications
        </label>

        <!-- Button -->
        <button
            x-ref="toggle"
            @click="value = ! value"
            type="button"
            role="switch"
            :aria-checked="value"
            :aria-labelledby="$id('toggle-label')"
            :class="value ? 'bg-indigo-600 border-2 border-transparent' : 'bg-gray-200 border-2 border-transparent'"
            class="ml-4 relative h-6 w-11 px-0 inline-flex flex-shrink-0 rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
            <span
                :class="value ? 'bg-white translate-x-5' : 'bg-white translate-x-0'"
                class="inline-block h-5 w-5 rounded-full transition shadow transform ring-0 ease-in-out duration-200"
                aria-hidden="true"></span>
        </button>
    </div>
</li>
