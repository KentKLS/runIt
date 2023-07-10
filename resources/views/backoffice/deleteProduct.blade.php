<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>

<div class="container mx-auto flex justify-center">
    <div class="flex flex-col">
        <p>Ci dessous rentré le nom du produit a supprimer</p>
        <form action="{{route('productDeleted')}}" method="POST">
            @csrf
            <input id="name" name="name" type="text">
        </form>
    </div>
</div>
