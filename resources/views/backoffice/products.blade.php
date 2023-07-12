@extends('layouts.backofficelayout')

@section('content')

<div class="bg-slate-800 ">
    <div class="container mx-auto flex justify-center flex-wrap">
        <a href="{{route('product.create')}}">
        <div class="text-gray-100 mt-10 p-7 rounded outline outline-1">
            Ajouté nouveau produit
        </div>
    </a>
        @foreach ($products as $product)
            <table class="bg-slate-900 w-full text-gray-100 m-10">
                <thead>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Categorie</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"> {{$product->id}} </td>
                        <td class="text-center"> {{$product->name}} </td>
                        <td class="text-center"> {{$product->price}} </td>
                        <td class="text-center"> {{$product->stock}} </td>
                        <td class="text-center"> {{$product->category_id}} </td>
                        <td class="text-center">
                            <form action="{{route('product.destroy',['product'=>$product])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <input type="hidden" value="{{$product->id}}">
                                <button href="" class="bg-red-600 rounded py-1 px-3">Delete</button>
                            </form>

                            <a href="{{route('product.edit',['product'=>$product])}}" class="bg-green-700 rounded py-1 px-3">Modify</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>
</div>

@endsection
