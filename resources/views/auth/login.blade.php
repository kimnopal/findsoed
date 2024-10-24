@extends('auth.index')
@section('title', 'Login Page')

@section('form')
<form action="{{ route('auth.doLogin') }}" method="POST">
    @csrf

    <h3 class="text-xl font-bold text-gray-800 dark:text-white">
        Login
    </h3>
    <div class="mt-2 text-gray-500 dark:text-neutral-400">
        <div class="w-full space-y-3">
            <x-input type="email" name="email" placeholder="Enter email" autocomplete="on">
                <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </x-input>

            <x-input type="password" name="password" placeholder="Enter password">
                <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z">
                    </path>
                    <circle cx="16.5" cy="7.5" r=".5"></circle>
                </svg>
            </x-input>
        </div>
    </div>
    <div class="mt-3 flex gap-3 justify-between">
        <a href="/register" class="text-sm text-gray-500 underline">Create account</a>
        <button type="submit"
            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Login
        </button>
    </div>
</form>
@endsection