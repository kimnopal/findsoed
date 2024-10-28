<style>
    .dt-layout-row:has(.dt-search),
    .dt-layout-row:has(.dt-length),
    .dt-layout-row:has(.dt-paging) {
        display: none !important;
    }
</style>

<x-app-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <div class="">
        <div class="mb-5">
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="{{ route('home') }}">
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

    {{-- <div class="grid grid-cols-12 mb-5">
        <div class="col-span-6 col-start-4">
            <x-input-icon type="text" placeholder="Cari barang">
                <svg class="shrink-0 size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
            </x-input-icon>
        </div>
    </div> --}}

    <div class=" gap-3">
        <x-table :posts="$posts" />
        {{-- @foreach ($posts as $post)
        <div class="lg:col-span-6 col-span-12">
            <x-card :post="$post" />
        </div>
        @endforeach --}}

        {{-- <div class="lg:col-span-6 col-span-12">
            <x-card></x-card>
        </div>

        <div class="lg:col-span-6 col-span-12">
            <x-card></x-card>
        </div> --}}
    </div>
</x-app-layout>