<x-guest-layout>
    <div class="bg-white/10 sm:p-1.5 rounded-lg backdrop-blur-lg">
        <div
            class="w-full p-4 bg-zinc-900 border border-zinc-800 overflow-hidden rounded-t-2xl sm:rounded-lg">
            <div class="px-4 sm:px-0">
                <h1 class="text-2xl text-white">Create your account</h1>
                <p class="text-zinc-400 text-sm mt-1.5">
                    Have an account already? <a href="{{ route('login') }}"
                        class="underline hover:text-white transition-colors ease-in-out duration-150">{{ __('Log in') }}</a>
                </p>
            </div>
            <form method="POST" action="{{ route('register') }}" class="mt-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-pepper.text-input id="name" class="block mt-1.5 w-full" type="text" name="name"
                        :placeholder="__('Name')" :value="old('name')" required autofocus autocomplete="name" />
                    <x-pepper.input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-pepper.text-input id="email" class="block mt-1.5 w-full" type="email" name="email" :placeholder="__('Email')"
                        :value="old('email')" required autocomplete="username" />
                    <x-pepper.input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-pepper.text-input id="password" class="block mt-1.5 w-full" type="password" name="password" required
                        :placeholder="__('Password')" autocomplete="new-password" />

                    <x-pepper.input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-pepper.text-input id="password_confirmation" class="block mt-1.5 w-full" type="password"
                        :placeholder="__('Confirm Password')" name="password_confirmation" required
                        autocomplete="new-password" />

                    <x-pepper.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <p class="text-zinc-400 text-sm mt-4">
                    By creating an account, you agree to our <a href="#"
                        class="underline hover:text-white transition-colors ease-in-out duration-150">terms
                        of
                        service</a> and
                    <a href="#"
                        class="underline hover:text-white transition-colors ease-in-out duration-150">privacy
                        policy</a>.
                </p>

                <div class="flex items-center justify-end mt-4">
                    <x-pepper.primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-pepper.primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
