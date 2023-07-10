<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in as Admin!") }}
                </div>
            </div>
        </div>
    </div>
    <div class=" max-w-6xl mx-auto gap-3  flex justify-center h-screen text-gray-100">
        <a href="{{route('addProduct')}}"> Aller a la page d'ajout Produit</a>
        <a href="{{route('showSeeData')}}">Aller a la page Visualisation Données</a>
        <a href="{{route('deleteProduct')}}">Aller a la page suppression produit</a>
        <a href="{{route('backofficeProducts')}}">Aller a la page modification</a>

    </div>
</x-app-layout>


