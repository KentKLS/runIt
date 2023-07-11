@extends('templates.layout')
@section('content')
    <table class="table container -sm">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nom du produit</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>
                <a href="{{route('show.update' , ["product"=> $product] )}}" type="button" class="btn btn-warning">
                     Modifier
                </a>
            </td>
            <td>
                <form action="{{route('product.destroy', ["product"=> $product]) }}" method="post" onclick="return confirm('Etes vous sur de vouloir supprimer ce produit')">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Supprimer">
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
