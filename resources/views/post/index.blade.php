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
        <div class="mb-3 md:mb-5">
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="{{ route('home') }}">
                        Home
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                    aria-current="page">
                    List Post
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
        <x-table>
            <x-slot name="thead">
                <x-th>Title</x-th>
                <x-th>Status</x-th>
            </x-slot>

            <x-slot name="tbody">
                @foreach ($posts as $post)
                    <tr>
                        <x-td>
                            {{ $post['title'] }}
                        </x-td>
                        <x-td>
                            <x-badge :status="$post['status']">{{ ucfirst($post['status']) }}</x-badge>
                        </x-td>
                        <td class="p-3 whitespace-nowrap text-end text-sm font-medium space-x-2">
                            <a href="{{ route('posts.show', $post['slug']) }}"
                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Detail</a>
                            <a href="{{ route('posts.edit', $post['slug']) }}"
                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-500 dark:hover:text-gray-400 dark:focus:text-gray-400">Edit</a>
                            <form action="{{ route('posts.delete', $post['slug']) }}" method="POST"
                                class="inline-flex items-center gap-x-2 mb-0 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:hover:text-red-400 dark:focus:text-red-400">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-table>
    </div>
</x-app-layout>
