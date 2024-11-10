<x-guest-layout>
    <div class="px-4 sm:px-0">
        <h1 class="text-2xl text-neutral-950 dark:text-white">Create your account</h1>
        <p class="text-neutral-500 text-sm mt-1.5">
            Have an account already? <a href="{{ route('login') }}"
                class="underline hover:text-neutral-900 dark:hover:text-neutral-100 transition-colors ease-in-out duration-150">{{ __('Log in') }}</a>
        </p>
    </div>
    <div
        class="w-full mt-6 p-4 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 overflow-hidden rounded-t-2xl sm:rounded-lg">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-salt.input-label for="name" :value="__('Name')" />
                <x-salt.text-input id="name" class="block mt-1.5 w-full" type="text" name="name"
                    :value="old('name')" required autofocus autocomplete="name" />
                <x-salt.input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-salt.input-label for="email" :value="__('Email')" />
                <x-salt.text-input id="email" class="block mt-1.5 w-full" type="email" name="email"
                    :value="old('email')" required autocomplete="username" />
                <x-salt.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-salt.input-label for="password" :value="__('Password')" />

                <x-salt.text-input id="password" class="block mt-1.5 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-salt.input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-salt.input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-salt.text-input id="password_confirmation" class="block mt-1.5 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-salt.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <p class="text-neutral-500 text-sm mt-4">
                By creating an account, you agree to our <a href="#"
                    class="underline hover:text-neutral-900 dark:hover:text-neutral-100 transition-colors ease-in-out duration-150">terms of service</a> and
                <a href="#"
                    class="underline hover:text-neutral-900 dark:hover:text-neutral-100 transition-colors ease-in-out duration-150">privacy policy</a>.
            </p>

            <div class="flex items-center justify-end mt-4">
                <x-salt.primary-button class="ms-4">
                    {{ __('Register') }}
                </x-salt.primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
