<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>@yield('title')</title>
</head>

<body class="h-screen grid grid-rows-[1fr]">
    {{-- <a href="" class="container flex gap-2 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
            <path d="m12 19-7-7 7-7" />
            <path d="M19 12H5" />
        </svg>
        <span class="w-fit">back</span>
    </a> --}}
    <div class="container grid grid-cols-12 justify-center items-center">
        <div
            class="col-span-12 sm:col-span-8 sm:col-start-3 lg:col-span-6 lg:col-start-4 xl:col-span-4 xl:col-start-5 h-fit flex flex-col">
            @yield('form')
        </div>
    </div>
</body>

</html>
