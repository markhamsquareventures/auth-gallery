@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-2 text-md px-4 py-3 border-neutral-900 focus:outline-none focus:border-neutral-900 focus:ring-2 focus:ring-lime-300 rounded-sm transition-colors ease-in-out duration-150']) }}>
