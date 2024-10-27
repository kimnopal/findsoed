@php
$status = [
'hilang',
'temuan',
'ditemukan'
];
@endphp

@if(count($errors) != 0)
@dd($errors)
@endif
<x-app-layout>
    <x-slot name="title">
        Create Post
    </x-slot>

    <div class="mb-5">
        <ol class="flex items-center whitespace-nowrap">
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    href="{{ route('home') }}">
                    Home
                </a>
                <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                aria-current="page">
                Buat Post
            </li>
        </ol>
    </div>

    <h2 class="text-2xl font-semibold mb-3">Buat Post</h2>

    <div class="grid grid-cols-12">
        <div class="col-span-8">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <x-input-label type="text" id="title" name="title" label="Judul" placeholder="Judul" />

                <x-input-file type="file" name="photo" id="photo" label="Foto Barang" />

                <x-textarea id="description" name="description" label="Deskripsi" placeholder="Tulis deskripsi" />

                <x-select id="status" name="status" label="Status" placeholder="Pilih Status" :data="$status" />

                <x-input-label type="text" id="contact" name="contact" label="Kontak Whatsapp" placeholder="+62" />

                <button type="submit"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Post
                </button>
            </form>
        </div>
    </div>
</x-app-layout>