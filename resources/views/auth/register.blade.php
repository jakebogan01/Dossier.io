<x-guest-layout>
    <x-registration.authentication-card>
        <x-registration.validation-errors />
        <div class="pb-2">
            <h2 data-aos="fade-up" data-aos-delay="250" class="mt-16 md:mt-6 text-3xl font-extrabold text-white cursor-default">
                Create an account
            </h2>
        </div>
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf
            <div data-aos="fade-up" data-aos-delay="300">
                <x-registration.label for="name" value="{{ __('Name') }}" />
                <x-registration.input id="name" type="text" name="name" :value="old('name')" required autofocus spellcheck="true" autocomplete="name" placeholder="Your Name" style="padding: 10px 0 10px 20px;" />
            </div>
            <div data-aos="fade-up" data-aos-delay="350">
                <x-registration.label for="email" value="{{ __('Email') }}" />
                <x-registration.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Your Email" style="padding: 10px 0 10px 20px;" />
            </div>
            <div data-aos="fade-up" data-aos-delay="400">
                <x-registration.label for="password" value="{{ __('Password') }}" />
                <x-registration.input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Your Password" style="padding: 10px 0 10px 20px;" />
            </div>
            <div data-aos="fade-up" data-aos-delay="450">
                <x-registration.label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-registration.input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" style="padding: 10px 0 10px 20px;" placeholder="Confirm Password" />
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="flex items-center">
                <div class="text-sm">
                    <a href="{{ route('login') }}" class="font-medium text-gray-200 sm:hover:text-gray-400 sm:transition-colors">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </div>
            <div>
                <x-registration.button data-aos="fade-up" data-aos-delay="550">
                    {{ __('Register') }}
                </x-registration.button>
                <a data-aos="fade-up" data-aos-delay="600" href="/" class="w-full flex justify-center mt-4 py-2 px-4 border border-transparent rounded-md shadow-sm font-medium text-white bg-indigo-700 sm:hover:bg-[#3273F6] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:transition-colors">
                    Cancel
                </a>
            </div>
        </form>
    </x-registration.authentication-card>
</x-guest-layout>
