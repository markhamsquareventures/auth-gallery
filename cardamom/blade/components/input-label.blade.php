@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-neutral-800 tracking-snug']) }}>
    {{ $value ?? $slot }}
</label>
