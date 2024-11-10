<x-guest-layout>
    <div
        class="col-span-12 md:col-span-7 flex flex-col justify-between p-5 lg:p-8 bg-white dark:bg-stone-900 rounded-2xl">
        <div class="flex items-center gap-3 text-amber-900 dark:text-amber-100 text-sm mb-8">
            <a class="text-amber-800 dark:text-amber-200 bg-amber-50 dark:bg-amber-950/80 rounded-full px-5 py-2 inline-block hover:bg-amber-100 dark:hover:bg-amber-900 transition-all ease-in-out duration-200"
                href="/">
                {{-- Heroicon: ArrowLeft --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18">
                    </path>
                </svg>
            </a> Home
        </div>
        <div class="w-full sm:max-w-sm mx-auto">
            <div>
                <a href="/">
                    <x-turmeric.application-logo />
                </a>
                <h1 class="text-4xl font-instrument-serif text-neutral-950 dark:text-white mt-2">Create your account
                </h1>
            </div>
            <form method="POST" action="{{ route('register') }}" class="mt-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-turmeric.input-label for="name" :value="__('Name')" />
                    <x-turmeric.text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-turmeric.input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-turmeric.input-label for="email" :value="__('Email')" />
                    <x-turmeric.text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-turmeric.input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-turmeric.input-label for="password" :value="__('Password')" />

                    <x-turmeric.text-input id="password" class="block mt-1 w-full" type="password" name="password"
                        required autocomplete="new-password" />

                    <x-turmeric.input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-turmeric.input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-turmeric.text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-turmeric.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-turmeric.primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-turmeric.primary-button>
                </div>
            </form>
        </div>
        <div class="w-full sm:max-w-sm mx-auto">
            <p class="text-stone-500 dark:text-stone-400 text-sm mt-1.5">
                Have an account already? <a href="{{ route('login') }}"
                    class="underline hover:text-amber-900 dark:hover:text-amber-100 transition-colors ease-in-out duration-150">{{ __('Log in') }}</a>
            </p>
        </div>
    </div>
    <div class="col-span-12 md:col-span-5 hidden md:flex flex-col justify-end p-8">
        <h2 class="text-stone-950 dark:text-white font-instrument-serif italic text-4xl xl:text-5xl">Free, handcrafted auth screens for Laravel projects.</h2>
        <p class="text-stone-800 dark:text-stone-200 font-semibold tracking-tight text-xl mt-4">– Auth.Gallery</p>
    </div>
</x-guest-layout>
