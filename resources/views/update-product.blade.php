@extends('templates.layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('redirect.update',$products->id)}}" method="post" class="container -sm">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" id="formGroupExampleInput"  value="{{$products->name}}" name="name" placeholder="Nom du produit">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Prix</label>
            <input type="number" class="form-control" id="formGroupExampleInput" value="{{$products->price}}" name="price" placeholder="Prix">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Url image</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" value="{{$products->imgURL}}" name="imgURL" placeholder="Url image">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Phrase d'accroche</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="oneliner" value="{{$products->oneliner}}" placeholder="Phrase d'accroche">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Courte description produit</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="description" value="{{$products->description}}" placeholder="Courte description produit">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Stock</label>
            <input type="number" class="form-control" id="formGroupExampleInput2" name="stock" value="{{$products->stock}}" placeholder="Stock">
        </div>
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
@endsection
