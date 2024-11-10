@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'bg-neutral-100 hover:bg-neutral-200 transition-colors ease-in-out duration-150 dark:hover:bg-neutral-700 dark:focus:bg-neutral-900 focus:bg-neutral-100 dark:bg-neutral-800 border-none dark:text-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 rounded-lg']) }}>
