<x-guest-layout>
    <x-registration.authentication-card>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>
        <x-registration.validation-errors />
        <form
            method="POST"
            action="{{ route('password.confirm') }}"
            class="space-y-6">
            @csrf
            <div
                data-aos="fade-up"
                data-aos-delay="300">
                <x-registration.label
                    for="password"
                    value="{{ __('Password') }}" />
                <x-registration.input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="Password"
                    autocomplete="current-password"
                    style="padding: 10px 0 10px 20px;"
                    required
                    autofocus />
            </div>
            <div class="pt-2">
                <x-registration.button
                    data-aos="fade-up"
                    data-aos-delay="350">
                    {{ __('Confirm') }}
                </x-registration.button>
                <a
                    href="/"
                    class="w-full flex justify-center mt-4 py-2 px-4 border border-transparent rounded-md shadow-sm font-medium text-white bg-indigo-700 sm:hover:bg-[#3273F6] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 all:transition-colors"
                    data-aos="fade-up"
                    data-aos-delay="400">
                    Cancel
                </a>
            </div>
        </form>
    </x-registration.authentication-card>
</x-guest-layout>
