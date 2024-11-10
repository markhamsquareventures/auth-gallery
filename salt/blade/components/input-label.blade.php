@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm tracking-tight text-neutral-800 dark:text-neutral-200']) }}>
    {{ $value ?? $slot }}
</label>
