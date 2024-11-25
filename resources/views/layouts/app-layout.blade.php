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
    <main class="container mt-6 max-w-[1125px] mb-5 w-screen">
        {{ $slot }}
    </main>
    <footer class="w-full flex flex-col items-center justify-center p-5 gap-3">
        <div class="">
            Built with <span class="text-red-500">❤️</span> by <a href='https://www.instagram.com/osc.unsoed'
                target="_blank"
                class="text-blue-600 decoration-blue-600 hover:opacity-80 focus:outline-none focus:opacity-80">@osc.unsoed</a>
        </div>
        <div class="flex gap-3">
            <a class="text-gray-600 underline decoration-gray-600 hover:opacity-80 focus:outline-none focus:opacity-80"
                href="https://www.instagram.com/osc.unsoed" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-instagram">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                </svg></a>

            <a class="text-gray-600 underline decoration-gray-600 hover:opacity-80 focus:outline-none focus:opacity-80"
                href="https://github.com/oscunsoed" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-github">
                    <path
                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                    <path d="M9 18c-4.51 2-5-2-7-2" />
                </svg>
            </a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
</body>

</html>
