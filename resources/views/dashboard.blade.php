<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="container-navbar">
        <nav class="btn-group-vertical">
            <button routerLink="product/home" routerLinkActive="is-active" class="btn btn-outline-dark">Home</button>
        </nav>
        <nav class="btn-group-vertical">
            <button routerLink="admin/gallery" routerLinkActive="is-active" class="btn btn-outline-dark">Gallery</button>
        </nav>
        <a href="{{ url('admin/gallery-admin')}}">Gallery</a>
    </div>
</x-app-layout>
