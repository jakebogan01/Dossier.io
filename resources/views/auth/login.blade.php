<x-guest-layout>
    <x-registration.authentication-card>
        <x-registration.validation-errors />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="pb-2">
            <h2 data-aos="fade-up" data-aos-delay="250" class="mt-16 md:mt-6 text-3xl font-extrabold text-white cursor-default tracking-wider">
                Welcome Back
            </h2>
        </div>
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            <div data-aos="fade-up" data-aos-delay="300">
                <x-registration.label for="email" value="{{ __('Email') }}" />
                <x-registration.input id="email" type="email" name="email" :value="old('email')" placeholder="Your Email" style="padding: 10px 0 10px 20px;" required autofocus />
            </div>
            <div data-aos="fade-up" data-aos-delay="350">
                <x-registration.label for="password" value="{{ __('Password') }}" />
                <x-registration.input id="password" type="password" name="password" placeholder="Your Password" style="padding: 10px 0 10px 20px;" required autocomplete="current-password" />
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="flex items-center justify-between">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" checked />
                    <span class="ml-2 text-sm text-gray-300">{{ __('Remember me') }}</span>
                </label>
                <div class="text-sm">
                    <a href="{{ route('register') }}" class="p-0 m-0 font-medium text-gray-200 sm:hover:text-gray-400 sm:transition-colors">
                        {{ __('Register') }}
                    </a>
                    <span class="p-0 m-0 font-medium text-gray-200">or</span>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="font-medium text-gray-200 sm:hover:text-gray-400 sm:transition-colors">
                            {{ __('forgot password?') }}
                        </a>
                    @endif
                </div>
            </div>
            <div>
                <x-registration.button data-aos="fade-up" data-aos-delay="600">
                    {{ __('Log in') }}
                </x-registration.button>
                <a href="{{ route('home') }}" data-aos="fade-up" data-aos-delay="600" class="w-full flex justify-center mt-4 py-2 px-4 border border-transparent rounded-md shadow-sm font-medium text-white bg-indigo-700 sm:hover:bg-[#3273F6] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:transition-colors">
                    Cancel
                </a>
            </div>
        </form>
    </x-registration.authentication-card>
</x-guest-layout>
