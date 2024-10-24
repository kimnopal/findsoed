<a href="{{ route('post.show', $post['id']) }}"
    class="flex bg-white border shadow-sm rounded-xl group dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <img class="w-52 h-auto rounded-xl object-cover" {{--
        src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80"
        --}} src="{{ $post['photo'] }}" alt="Card Image">
    <div class="p-4 md:p-5">
        <div class="flex justify-between items-center flex-wrap mb-3">
            <span
                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-800/30 dark:text-red-500">
                Hilang
            </span>

            <p class=" text-sm font-medium text-gray-400 dark:text-neutral-500">
                {{ $post["created_at"]->diffForHumans() }}
            </p>
        </div>

        <div class="mb-4">
            <h3 class="text-xl font-bold text-gray-800 group-hover:underline dark:text-white">
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
                    src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                    alt="Avatar">
                <div class="ms-3">
                    <h3 class="text-sm text-gray-400 dark:text-white">{{ $post["user"]["username"] }}</h3>
                </div>
            </div>
        </div>

        {{-- <div class="flex justify-end"> --}}


            {{--
        </div> --}}

    </div>

</a>