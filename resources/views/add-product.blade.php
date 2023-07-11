@extends('templates.layout')
@section('content')
    <form action="{{url('addProduct')}}" method="post" class="container -sm">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Nom du produit">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Prix</label>
            <input type="number" class="form-control" id="formGroupExampleInput" name="price" placeholder="Prix">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Url image</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="imgURL" placeholder="Url image">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Phrase d'accroche</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="oneliner" placeholder="Phrase d'accroche">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Courte description produit</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="description" placeholder="Courte description produit">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Stock</label>
            <input type="number" class="form-control" id="formGroupExampleInput2" name="stock" placeholder="Stock">
        </div>
        <button type="button" class="btn btn-success">Ajouter</button>
    </form>
@endsection
