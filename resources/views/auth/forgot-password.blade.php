<x-guest-layout>
    <x-registration.authentication-card>
        <div
            class="mb-6 text-white"
            data-aos="fade-up"
            data-aos-delay="250">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <x-registration.validation-errors />
        <form
            method="POST"
            action="{{ route('password.email') }}"
            class="space-y-6">
            @csrf
            <div
                data-aos="fade-up"
                data-aos-delay="300">
                <x-registration.label
                    for="email"
                    value="{{ __('Email') }}" />
                <x-registration.input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    placeholder="Your Email"
                    style="padding: 10px 0 10px 20px;"
                    required
                    autofocus />
            </div>
            <div class="pt-2">
                <x-registration.button
                    data-aos="fade-up"
                    data-aos-delay="350">
                    {{ __('Email Password Reset Link') }}
                </x-registration.button>
                <a
                    href="{{ route('login') }}"
                    class="w-full flex justify-center mt-4 py-2 px-4 border border-transparent rounded-md shadow-sm font-medium text-white bg-indigo-700 sm:hover:bg-[#3273F6] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 all:transition-colors"
                    data-aos="fade-up"
                    data-aos-delay="400">
                    Back
                </a>
            </div>
        </form>
    </x-registration.authentication-card>
</x-guest-layout>
