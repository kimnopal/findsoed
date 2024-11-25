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

<body>
    <div class="container h-screen grid grid-cols-12 justify-center items-center">
        <div
            class="col-span-12 sm:col-span-8 sm:col-start-3 lg:col-span-6 lg:col-start-4 xl:col-span-4 xl:col-start-5 h-fit flex flex-col">
            @yield('form')
        </div>
    </div>
</body>

</html>
