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
</head>

<body class="min-h-screen grid grid-rows-[max-content_1fr_max-content]">
    @include('components.navbar')
    <main class="container mt-5 max-w-[1125px] mb-5">
        {{ $slot }}
    </main>
    <footer class="w-full flex justify-center p-5">
        <div class="">
            Built with <span class="text-red-500">&hearts;</span> by <a href='https://www.instagram.com/falll.hkm/'
                target="_blank" class="text-blue-600">@falll.hkm</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
</body>

</html>
