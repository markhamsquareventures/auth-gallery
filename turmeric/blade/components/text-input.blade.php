@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-stone-300 hover:border-stone-400 dark:border-stone-700 dark:bg-stone-900 dark:text-stone-300 focus:border-amber-300 dark:focus:border-amber-600 focus:ring-amber-300 dark:focus:ring-amber-600 rounded-md transition-all ease-in-out duration-150']) }}>
