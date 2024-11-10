<x-app-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <div class="grid grid-cols-12 mb-5">
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
    </div>

    <div class="grid grid-cols-12 gap-3 auto-rows-fr">
        @foreach ($posts as $post)
            <div class="lg:col-span-6 col-span-12">
                <x-card :post="$post" />
            </div>
        @endforeach

        {{-- <div class="lg:col-span-6 col-span-12">
            <x-card></x-card>
        </div>

        <div class="lg:col-span-6 col-span-12">
            <x-card></x-card>
        </div> --}}
    </div>
</x-app-layout>
