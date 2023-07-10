<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
<div class="container mx-auto flex justify-center gap-3">
    <form action="{{ route('getData') }}" method="POST">
        @csrf
        <input name="tableName" id="tableName" type="hidden" value="products">
        <button>Affiche les données de la table produits</button>
    </form>
    <form action="{{ route('getData') }}" method="POST">
        @csrf
        <input name="tableName" id="tableName" type="hidden" value="users">
        <button>Affiche les données de la table users</button>
    </form>
</div>
@isset($data)

@foreach ( $data as $detail )

@dump($detail)

@endforeach

@endif

</div>
