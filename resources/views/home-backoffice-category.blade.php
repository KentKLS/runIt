@extends('templates.layout')
@section('content')
    <table class="table container -sm">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nom de la catégorie</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{route('show.update.category' , ["category"=> $category] )}}" type="button" class="btn btn-warning">
                        Modifier
                    </a>
                </td>
                <td>
                    <form action="{{route('product.destroy.category', ["category"=> $category]) }}" method="post" onclick="return confirm('Etes vous sur de vouloir supprimer ce produit')">
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
