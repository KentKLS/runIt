@extends('templates.layout')
@section('content')
    <table class="table container -sm">
        <thead>
        <tr>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Mot de passe</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <th scope="row">{{$customer->first_name}}</th>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->password}}</td>
                <td>
                    <a href="{{route('show.update.customer' , ["customer"=> $customer] )}}" type="button" class="btn btn-warning">
                        Modifier
                    </a>
                </td>
                <td>
                    <form action="{{route('product.destroy.customer', ["customer"=> $customer]) }}" method="post" onclick="return confirm('Etes vous sur de vouloir supprimer ce client')">
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
