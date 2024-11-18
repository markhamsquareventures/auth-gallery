<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center text-md w-full text-center p-4 bg-neutral-800 border border-transparent rounded-sm font-black text-white uppercase tracking-widest hover:bg-lime-300 hover:text-neutral-900 hover:scale-[1.025] hover:shadow-[0_0_6px_3px_rgba(190,242,100,.4)] focus:bg-neutral-700 active:bg-lime-400 focus:outline-none focus:ring-2 focus:ring-lime-300 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>



