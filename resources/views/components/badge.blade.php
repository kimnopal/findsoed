@php
    $status = [
        'hilang' => 'bg-red-100 text-red-800 dark:bg-red-800/30 dark:text-red-500',
        'temuan' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-800/30 dark:text-yellow-500',
        'ditemukan' => 'bg-blue-100 text-blue-800 dark:bg-blue-800/30 dark:text-blue-500',
    ][$status];
@endphp
<span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium {{ $status }}">
    {{ $slot }}
</span>
