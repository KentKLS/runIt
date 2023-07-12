@extends('layouts.backofficelayout')

@section('content')

<div class="bg-slate-800 h-screen">
    <div class="container text-gray-100 flex justify-center ">
        Produit modifié avec succès
    </div>
    <div class="container text-gray-100 flex justify-center">
        <a href="{{ route('product.index') }}"> Retour A la liste Produits</a>
    </div>
</div>

@endsection
