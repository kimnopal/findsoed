<x-dashboard-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <div
        class="flex flex-col bg-white border border-gray-200 shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
        <div class="flex justify-between">
            <h2 class="text-2xl font-semibold mb-2">Users</h2>
            <button type="button"
                class="py-2 px-3 w-fit h-fit inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                + Tambah User
            </button>
        </div>

        <x-table>
            <x-slot name="thead">
                <x-th>Username</x-th>
                <x-th>Email</x-th>
                <x-th>Role</x-th>
            </x-slot>

            <x-slot name="tbody">
                @foreach ($users as $user)
                    <tr>
                        <x-td>
                            {{ $user['username'] }}
                        </x-td>
                        <x-td>
                            {{ $user['email'] }}
                        </x-td>
                        <x-td>
                            {{-- <x-badge :status="$post['status']">{{ ucfirst($post['status']) }}</x-badge> --}}
                            {{ $user['role']['name'] }}
                        </x-td>
                        <td class="p-3 whitespace-nowrap text-end text-sm font-medium space-x-2">
                            <a href="{{ '/' }}"
                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Detail</a>
                            <a href="{{ '/' }}"
                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:text-gray-500 dark:hover:text-gray-400 dark:focus:text-gray-400">Edit</a>
                            <form action="{{ '/' }}" method="POST"
                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:hover:text-red-400 dark:focus:text-red-400">
                                @csrf
                                @method('delete')
                                <button type="submit" class="">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-table>
    </div>
</x-dashboard-layout>
