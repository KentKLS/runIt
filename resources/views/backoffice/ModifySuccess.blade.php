<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>

<div class="bg-slate-800 h-screen">
    <div class="container text-gray-100 flex justify-center ">
        Produit modifié avec succès
    </div>
    <div class="container text-gray-100 flex justify-center">
        <a href="{{ route('backofficeProducts') }}"> Retour A la liste Produits</a>
    </div>
</div>
