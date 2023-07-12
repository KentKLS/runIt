@extends('layouts.backofficelayout')

@section('content')
<div class="bg-slate-800">
    <div class="container mx-auto flex items-center flex-col gap-3 py-20 h-screen text-gray-100">


        <div class=" max-w-6xl mx-auto py-8">
            <div class="flex justify-center py-5">Produit modifié : {{ $address->name }}</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('address.update', ['address'=> $address])}}">
                @csrf
                @method("PUT")
                <div class="mb-6">
                    <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                        Produit</label>
                    <input type="text" id="id" name="id" value="{{ $address->id }}" disabled
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id de l'utilisateur associé</label>
                    <input type="text" id="user_id" name="user_id" value="{{ $address->user_id }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="addresse_livraison" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse de livraison</label>
                    <input type="text" step="0.01" id="addresse_livraison" name="addresse_livraison" value="{{ $address->addresse_livraison }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="addresse_facturation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse de facturation</label>
                    <input type="text" id="addresse_facturation" name="addresse_facturation" value="{{ $address->addresse_facturation }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numéro de téléphone</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ $address->phone_number }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="flex justify-center">
                    <button class="  bg-blue-700  rounded py-1 px-3 font-bold ">Validé</button>
                </div>
            </form>
        </div>


    </div>
</div>
@endsection
