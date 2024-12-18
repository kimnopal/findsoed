<!-- ========== HEADER ========== -->
<header
    class="bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
    <nav
        class="relative max-w-[1125px] container w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto py-3">
        <!-- Logo w/ Collapse Button -->
        <div class="flex items-center justify-between">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white"
                href="{{ route('home') }}" aria-label="Brand">{{ env('APP_NAME') }}</a>

            <!-- Collapse Button -->
            <div class="flex gap-3 md:hidden">
                <button
                    class="p-2 items-center text-sm text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500 flex"
                    aria-haspopup="dialog" aria-expanded="false" aria-controls="info" data-hs-overlay="#info">
                    <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 block" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-info">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 16v-4" />
                        <path d="M12 8h.01" />
                    </svg>
                </button>
                <button type="button"
                    class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
            <!-- End Collapse Button -->
        </div>
        <!-- End Logo w/ Collapse Button -->
        <!-- Collapse -->
        <div id="hs-header-classic"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
            aria-labelledby="hs-header-classic-collapse">
            <div
                class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
                    {{-- <a
                        class="p-2 flex items-center text-sm text-blue-600 focus:outline-none focus:text-blue-600 dark:text-blue-500 dark:focus:text-blue-500"
                        href="#" aria-current="page">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                            <path
                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        </svg>
                        Landing
                    </a>
                    <x-nav-link href="">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        Account
                    </x-nav-link>

                    <x-nav-link href="#">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                            <path d="M18 14h-8" />
                            <path d="M15 18h-5" />
                            <path d="M10 6h8v4h-8V6Z" />
                        </svg>
                        Blog
                    </x-nav-link> --}}

                    <!-- Button Group -->
                    <div
                        class="relative flex flex-wrap flex-col-reverse items-center gap-y-2 md:gap-x-3 md:flex-row md:ps-2.5 mt-1 md:mt-0 md:ms-1.5 
                        {{-- before:block before:absolute before:top-1/2 before:-start-px before:w-px before:h-4 before:bg-gray-300 before:-translate-y-1/2 dark:before:bg-neutral-700 --}}
                        ">
                        <button
                            class="p-2 items-center text-sm text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500 hidden md:flex"
                            aria-haspopup="dialog" aria-expanded="false" aria-controls="info" data-hs-overlay="#info">
                            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 block" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-info">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 16v-4" />
                                <path d="M12 8h.01" />
                            </svg>
                        </button>
                        @auth
                            <a href="/posts/create"
                                class="w-full md:w-fit p-2 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-4" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-plus">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                                <span class="md:hidden">Add Post</span>
                                {{-- Post --}}
                            </a>
                            <div class="w-full md:hidden">
                                <div class="flex items-center border-b border-gray-200 dark:border-neutral-700">
                                    <img class="inline-block shrink-0 size-10 rounded-full"
                                        src="{{ auth()->user()->avatar ?? 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80' }}"
                                        alt="Avatar">
                                    <div class="py-3 px-4">
                                        <p class="text-sm font-medium text-gray-800 dark:text-neutral-300">
                                            {{ auth()->user()->name }}</p>
                                        <p class="text-sm text-gray-500 dark:text-neutral-400">
                                            {{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                <div class="py-1 space-y-0.5">
                                    @can('is-admin')
                                        <a href="{{ route('dashboard.index') }}"
                                            class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-4"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-layout-dashboard">
                                                <rect width="7" height="9" x="3" y="3" rx="1" />
                                                <rect width="7" height="5" x="14" y="3" rx="1" />
                                                <rect width="7" height="9" x="14" y="12" rx="1" />
                                                <rect width="7" height="5" x="3" y="16" rx="1" />
                                            </svg>
                                            Dashboard
                                        </a>
                                    @endcan
                                    <a href="{{ route('posts.index') }}"
                                        class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                        href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-4"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-file-text">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                            <path d="M10 9H8" />
                                            <path d="M16 13H8" />
                                            <path d="M16 17H8" />
                                        </svg>
                                        Posts
                                    </a>
                                    <form action="{{ route('auth.logout') }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-red-800 hover:bg-red-100 focus:outline-none focus:bg-red-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-4"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-log-out">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                                <polyline points="16 17 21 12 16 7" />
                                                <line x1="21" x2="9" y1="12" y2="12" />
                                            </svg>
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="shrink-0 group hidden md:block">
                                <div class="hs-dropdown relative [--placement:bottom]">
                                    <div class="flex items-center cursor-pointer hs-dropdown-toggle"
                                        id="hs-dropdown-with-header" aria-haspopup="menu" aria-expanded="false"
                                        aria-label="Dropdown">
                                        <img class="inline-block shrink-0 size-10 rounded-full"
                                            src="{{ auth()->user()->avatar ?? 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80' }}"
                                            alt="Avatar">
                                        {{-- <div class="ms-3">
                                            <p class="text-sm font-medium text-gray-400 dark:text-neutral-500">
                                                {{ auth()->user()->username }}
                                            </p>
                                        </div>
                                        <svg class="hs-dropdown-open:rotate-180 size-4 ms-1"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg> --}}
                                    </div>

                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700"
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="hs-dropdown-with-header">
                                        <div class="py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                            <p class="text-sm font-medium text-gray-800 dark:text-neutral-300">
                                                {{ auth()->user()->name }}</p>
                                            <p class="text-sm text-gray-500 dark:text-neutral-400">
                                                {{ auth()->user()->email }}</p>
                                        </div>
                                        <div class="p-1 space-y-0.5">
                                            @can('is-admin')
                                                <a href="{{ route('dashboard.index') }}"
                                                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-4"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-layout-dashboard">
                                                        <rect width="7" height="9" x="3" y="3" rx="1" />
                                                        <rect width="7" height="5" x="14" y="3" rx="1" />
                                                        <rect width="7" height="9" x="14" y="12" rx="1" />
                                                        <rect width="7" height="5" x="3" y="16" rx="1" />
                                                    </svg>
                                                    Dashboard
                                                </a>
                                            @endcan
                                            <a href="{{ route('posts.index') }}"
                                                class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 border-b border-gray-200 dark:border-neutral-700"
                                                href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-4"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                    <path d="M10 9H8" />
                                                    <path d="M16 13H8" />
                                                    <path d="M16 17H8" />
                                                </svg>
                                                Posts
                                            </a>
                                            <form action="{{ route('auth.logout') }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-red-800 hover:bg-red-100 focus:outline-none focus:bg-red-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-4"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-log-out">
                                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                                        <polyline points="16 17 21 12 16 7" />
                                                        <line x1="21" x2="9" y1="12"
                                                            y2="12" />
                                                    </svg>
                                                    Logout
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @else
                            <x-nav-link href="/login"
                                class="w-full md:w-fit p-2 inline-flex justify-center items-center gap-x-2 md:gap-x-1 text-sm font-medium rounded-lg border md:border-none border-gray-200 bg-white md:bg-transparent text-gray-800 shadow-sm md:shadow-none hover:bg-gray-50 md:hover:bg-transparent focus:outline-none focus:bg-gray-50 md:focus:bg-none disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                <svg class="shrink-0 size-4 me-3 md:me-0 md:size-5" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                                <span class="md:hidden">Log in</span>
                            </x-nav-link>
                        @endauth
                    </div>
                    <!-- End Button Group -->
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
</header>

<div id="info"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="info-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
        <div
            class="w-full max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 id="info-label" class="font-bold text-gray-800 dark:text-white flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-5 block" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-info">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 16v-4" />
                        <path d="M12 8h.01" />
                    </svg>
                    Tentang Findsoed
                </h3>
                <button type="button"
                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close" data-hs-overlay="#info">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <div class="space-y-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Apa itu Findsoed? 👋</h3>
                        <p class="mt-1 text-gray-800 dark:text-neutral-400">
                            Findsoed adalah platform inovatif yang memungkinkan kamu untuk melaporkan barang hilang atau
                            barang temuan dengan mudah. Platform ini menjadi solusi terbaik untuk menemukan barang -
                            barang yang hilang di lingkungan UNSOED.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Siapa dibalik Findsoed? ✨</h3>
                        <p class="mt-1 text-gray-800 dark:text-neutral-400">
                            Findsoed adalah hasil kolaborasi dari anggota <a
                                class="text-blue-600 underline decoration-blue-600 hover:opacity-80 focus:outline-none focus:opacity-80"
                                href="https://www.instagram.com/osc.unsoed">Open Source Community</a> (OSC) UNSOED,
                            yang
                            terdiri dari mahasiswa berbakat dengan semangat untuk menciptakan solusi berbasis teknologi.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Para Kontributor Hebat 🚀</h3>
                        <ul class="mt-1 text-gray-800 dark:text-neutral-400 space-y-1">
                            <li>
                                <a class="text-blue-600 underline decoration-blue-600 hover:opacity-80 focus:outline-none focus:opacity-80"
                                    href="https://www.instagram.com/falll.hkm/" target="_blank">Naufal Hakim</a>
                            </li>
                            <li>
                                <a class="text-blue-600 underline decoration-blue-600 hover:opacity-80 focus:outline-none focus:opacity-80"
                                    href="https://www.instagram.com/saujanashafi/" target="_blank">M Saujana Shafi
                                    Kehaulani</a>
                            </li>
                            <li>
                                <a class="text-blue-600 underline decoration-blue-600 hover:opacity-80 focus:outline-none focus:opacity-80"
                                    href="https://www.instagram.com/rassxmad/" target="_blank">Rafi Azhar
                                    Suadmaja</a>
                            </li>
                            <li>
                                <a class="text-blue-600 underline decoration-blue-600 hover:opacity-80 focus:outline-none focus:opacity-80"
                                    href="https://www.instagram.com/sahila.hm/" target="_blank">Sahila Hikmatul
                                    Maula</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    data-hs-overlay="#info">
                    Tutup
                </button>
                {{-- <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Save changes
                </button> --}}
            </div>
        </div>
    </div>
</div>
<!-- ========== END HEADER ========== -->
