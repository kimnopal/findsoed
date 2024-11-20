<div class="">
    <label for="{{ $id }}" class="block text-sm font-medium mb-2 dark:text-white">{{ $label }}</label>
    <input {{ $attributes }}
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 @error($name) border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
    @error($name)
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{ $message }}</p>
    @enderror
</div>
