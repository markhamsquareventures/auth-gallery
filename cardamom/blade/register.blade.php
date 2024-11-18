<x-guest-layout>
    <div class="mb-6 space-y-2">
        <h1 class="text-2xl text-neutral-950 font-black">
            Create your account
        </h1>
        <p class="text-neutral-600 text-sm mb-6">
            Already have an account? <a href="{{ route('login') }}" class="underline hover:text-white transition-colors ease-in-out duration-150">Log in</a>.
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div>
            <x-cardamom.input-label for="first_name" :value="__('First Name')" />
            <x-cardamom.text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                :value="old('first_name')" required autofocus autocomplete="first_name" />
            <x-cardamom.input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="mt-4">
            <x-cardamom.input-label for="last_name" :value="__('Last Name')" />
                <x-cardamom.text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                :value="old('last_name')" required autocomplete="last_name" />
            <x-cardamom.input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-cardamom.input-label for="email" :value="__('Email')" />
            <x-cardamom.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-cardamom.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-cardamom.input-label for="password" :value="__('Password')" />

            <x-cardamom.text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-cardamom.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-cardamom.input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-cardamom.text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-cardamom.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <p class="text-neutral-600 text-sm mt-4">
            You agree to our <a href="#"
                class="underline hover:text-white transition-colors ease-in-out duration-150">terms
                of
                service</a> and
            <a href="#"
                class="underline hover:text-white transition-colors ease-in-out duration-150">privacy
                policy</a>.
        </p>

        <div class="mt-6">
            <x-cardamom.primary-button>
                {{ __('Register') }}
            </x-cardamom.primary-button>
        </div>
    </form>
</x-guest-layout>
