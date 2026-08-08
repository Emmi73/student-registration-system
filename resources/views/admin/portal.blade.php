<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Portal') }}
        </h2>
    </x-slot>

     <nav class="general-nav">
        <a class="btn" href="route::post()">Students</a>
     </nav>
</x-app-layout>