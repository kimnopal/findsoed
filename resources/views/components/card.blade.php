<a href="{{ route('posts.show', $post['slug']) }}"
    class="flex flex-col h-full bg-white border shadow-sm rounded-xl sm:flex-row group hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <img class="min-w-56 w-full min-h-60 h-60 sm:aspect-square sm:w-56 sm:h-auto rounded-xl object-cover"
        {{--
        src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80"
        --}} src="{{ asset('images/posts/' . $post['photo']) }}" alt="Foto Barang Hilang">
    <div class="w-full p-4 md:p-5">
        <div class="flex justify-between items-center flex-wrap mb-3">
            <x-badge status="{{ $post['status'] }}">{{ ucfirst($post['status']) }}</x-badge>
            <p class=" text-sm font-medium text-gray-400 dark:text-neutral-500">
                {{ $post['created_at']->diffForHumans() }}
            </p>
        </div>

        <div class="mb-4">
            <h3 class="text-xl font-bold text-gray-800 line-clamp-2 group-hover:underline dark:text-white">
                {{ $post['title'] }}
            </h3>

            <p class="mt-1 text-gray-500 dark:text-neutral-400 line-clamp-3">
                {{-- Some quick example text to build on the card title and make up the bulk of the card's content. --}}
                {{ $post['description'] }}
            </p>
        </div>

        <div class="shrink-0 group block mb-3">
            <div class="flex items-center">
                <img class="inline-block shrink-0 size-6 rounded-full"
                    src="{{ $post['user']['avatar'] ?? 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80' }}"
                    alt="Avatar">
                <div class="ms-2">
                    <h3 class="text-sm text-gray-400 dark:text-white">{{ $post['user']['username'] }}</h3>
                </div>
            </div>
        </div>

        {{-- <div class="flex justify-end"> --}}


        {{--
        </div> --}}

    </div>

</a>
