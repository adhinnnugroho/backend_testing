<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-sm font-semibold text-xs text-white hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-700 focus:outline-hidden focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
