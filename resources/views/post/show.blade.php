<x-app-layout>
    <x-slot name="title">
        Detail Post
    </x-slot>

    <div class="grid grid-cols-12">
        <div class="col-span-10 col-start-2">
            <div class="mb-5">
                <ol class="flex items-center whitespace-nowrap">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="#">
                            Home
                        </a>
                        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </li>
                    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                        aria-current="page">
                        Detail Post
                    </li>
                </ol>
            </div>
        </div>
    </div>
    {{-- <h2 class="text-2xl font-semibold mb-3">Create Post</h2> --}}

    <div class="grid grid-cols-12 mb-4">
        <div class="col-span-10 col-start-2">
            <h2 class="text-3xl font-semibold text-gray-800">{{ $post['title'] }}
            </h2>


        </div>
    </div>

    <div class="grid grid-cols-12 mb-4">
        <div class="col-span-10 col-start-2">
            <img src="{{ asset('images/posts/' . $post['photo']) }}" alt="Foto Barang Hilang"
                class="w-full min-h-96 h-96 object-cover rounded-lg">
        </div>
    </div>

    <div class="grid grid-cols-12 mb-3">
        <div class="col-span-10 col-start-2">
            <div class="flex gap-3 items-center">
                <div class="flex justify-between">
                    <div class="flex items-center cursor-pointer">
                        <img class="inline-block shrink-0 size-6 rounded-full"
                            src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                            alt="Avatar">
                        <div class="ms-3">
                            <p class="text-sm font-medium text-gray-400 dark:text-neutral-500">{{
                                auth()->user()->username }}
                            </p>
                        </div>
                    </div>
                </div>
                <span class="size-1 bg-gray-300 rounded-full dark:bg-neutral-600"></span>
                <span
                    class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-800/30 dark:text-red-500">
                    Hilang
                </span>
                <span class="size-1 bg-gray-300 rounded-full dark:bg-neutral-600"></span>
                <p class="text-sm font-medium text-gray-400 flex gap-2 items-center dark:text-neutral-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-calendar">
                        <path d="M8 2v4" />
                        <path d="M16 2v4" />
                        <rect width="18" height="18" x="3" y="4" rx="2" />
                        <path d="M3 10h18" />
                    </svg>
                    <span>{{ $post["created_at"]->diffForHumans() }}</span>
                </p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 mb-5">
        <div class="col-span-10 col-start-2">
            <p class="text-justify text-gray-800">{{ $post['description'] }}</p>
        </div>
    </div>

    <div class="grid grid-cols-12">
        <div class="col-span-10 col-start-2">
            <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-100 text-teal-800 hover:bg-teal-200 focus:outline-none focus:bg-teal-200 disabled:opacity-50 disabled:pointer-events-none dark:text-teal-500 dark:bg-teal-800/30 dark:hover:bg-teal-800/20 dark:focus:bg-teal-800/20">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-phone">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                Kontak Pemilik
            </button>
        </div>
    </div>
</x-app-layout>