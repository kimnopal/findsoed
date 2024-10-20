{{-- active text-blue-600 focus:outline-none focus:text-blue-600 dark:text-blue-500 dark:focus:text-blue-500 --}}

<a {{ $attributes }}
    class="p-2 flex items-center text-sm text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500">
    {{ $slot }}
</a>