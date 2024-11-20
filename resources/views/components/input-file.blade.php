<div class="">
    <label for="{{ $id }}" class="block text-sm font-medium mb-2 dark:text-white">{{ $label }}</label>
    @isset($value)
        <img class="min-w-56 w-56 h-auto rounded-xl object-cover mb-2" src="{{ asset('images/posts/' . $value) }}"
            alt="Foto Barang Hilang">
    @endisset
    <span class="sr-only">Pilih File</span>
    <input {{ $attributes->except('value') }}
        class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm
  focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
  dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
  file:bg-gray-50 file:border-0
  file:me-4
  file:py-3 file:px-4
  dark:file:bg-neutral-700 dark:file:text-neutral-400 @error($name) border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
    @error($name)
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{ $message }}</p>
    @enderror
</div>
