<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>{{ $title ? $title . ' - ' . env('APP_NAME') : env('APP_NAME') }}</title>

    <style>
        .dt-layout-row:has(.dt-search),
        .dt-layout-row:has(.dt-length),
        .dt-layout-row:has(.dt-paging) {
            display: none !important;
        }
    </style>
</head>

<body class="bg-gray-50">
    @include('components.navbar-dashboard')
    {{-- <!-- Navigation Toggle -->
    <div class="py-16 text-center">
        <button type="button"
            class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-start bg-gray-800 border border-gray-800 text-white text-sm font-medium rounded-lg shadow-sm align-middle hover:bg-gray-950 focus:outline-none focus:bg-gray-900 dark:bg-white dark:text-neutral-800 dark:hover:bg-neutral-200 dark:focus:bg-neutral-200"
            aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-example"
            aria-label="Toggle navigation" data-hs-overlay="#hs-offcanvas-example">
            Open
        </button>
    </div>
    <!-- End Navigation Toggle --> --}}
    @include('components.aside')
    <main class="mt-5 ps-[255px] pt-12">
        <div class="px-6">
            {{ $slot }}
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
</body>

</html>
