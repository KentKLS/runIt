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
            <td><a href="{{url('/backoffice/product/' . $product->id . '/edit')}}"><button type="button" class="btn btn-warning">Modifier</button></a></td>
            <td><a href="{{url('/backoffice/product/' . $product->id . '/edit/delete')}}"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
