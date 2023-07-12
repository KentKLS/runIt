@extends('layouts.backofficelayout')
@section('content')
<div class="bg-slate-800">
    <div class="container mx-auto flex items-center flex-col gap-3 py-20 h-screen text-gray-100">


        <div class=" max-w-6xl mx-auto py-8">
            <div class="flex justify-center py-5">Produit modifié : {{ $category->name }}</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('category.update', ['category' => $category]) }}">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de la catégorie</label>
                    <input type="text" id="name" name="name"
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
