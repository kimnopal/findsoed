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
            class="col-span-4 col-start-5 h-fit flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
            <div class="p-4 md:p-5">
                <form action="">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">
                        @yield('header')
                    </h3>
                    <div class="mt-2 text-gray-500 dark:text-neutral-400">
                        <div class="w-full space-y-3">
                            @yield('input')
                        </div>
                    </div>
                    <div class="mt-3 flex gap-3 justify-between">
                        @yield('link')
                        <button type="button"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            @yield('header')
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>