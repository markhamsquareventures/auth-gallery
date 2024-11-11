@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'text-sm p-4 bg-zinc-800 hover:bg-zinc-700 transition-colors ease-in-out duration-150 focus:bg-zinc-800 border-none focus:ring-zinc-500 rounded-xl focus:shadow-spread']) }}>
