<!-- ========== HEADER ========== -->
<header
    class="bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
    <nav
        class="relative max-w-[1125px] container w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto py-2">
        <!-- Logo w/ Collapse Button -->
        <div class="flex items-center justify-between">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white"
                href="{{ route('home') }}" aria-label="Brand">Brand</a>

            <!-- Collapse Button -->
            <div class="md:hidden">
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
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
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
                    <div class="relative flex flex-wrap items-center gap-x-5 md:ps-2.5 mt-1 md:mt-0 md:ms-1.5 
                        {{-- before:block before:absolute before:top-1/2 before:-start-px before:w-px before:h-4 before:bg-gray-300 before:-translate-y-1/2 dark:before:bg-neutral-700 --}}
                        ">
                        @auth
                        <a href="/posts/create"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            + Post
                        </a>
                        <div class="shrink-0 group block">
                            <div class="hs-dropdown relative [--placement:bottom]">
                                <div class="flex items-center cursor-pointer hs-dropdown-toggle"
                                    id="hs-dropdown-with-header" aria-haspopup="menu" aria-expanded="false"
                                    aria-label="Dropdown">
                                    <img class="inline-block shrink-0 size-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                        alt="Avatar">
                                    <div class="ms-3">
                                        {{-- <h3 class="text-sm font-semibold text-gray-800 dark:text-white"></h3>
                                        --}}
                                        <p class="text-sm font-medium text-gray-400 dark:text-neutral-500">{{
                                            auth()->user()->username }}
                                        </p>
                                    </div>
                                    <svg class="hs-dropdown-open:rotate-180 size-4 ms-1"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                </div>

                                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700"
                                    role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-with-header">
                                    <div class="py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                        <p class="text-sm font-medium text-gray-800 dark:text-neutral-300">{{
                                            auth()->user()->name }}</p>
                                        <p class="text-sm text-gray-500 dark:text-neutral-400">{{
                                            auth()->user()->email }}</p>
                                    </div>
                                    <div class="p-1 space-y-0.5">
                                        <form action="{{ route('auth.logout') }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                                href="#">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                                                </svg>
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @else
                        <x-nav-link href="/login">
                            <svg class="shrink-0 size-4 me-3 md:me-2" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                            Log in
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
<!-- ========== END HEADER ========== -->