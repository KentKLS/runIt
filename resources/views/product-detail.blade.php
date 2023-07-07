@extends('templates.template')
@section('content')
<main class="product_detail">
    <div class="container">
        <div class="title_product">
            <h3 class="color_title"> {{$product->name}} </h3>
        </div>
        <div class="columns border">
            <div class="columns__column product_position">
                <img class="cart_img " src="{{$product->imgURL}}" alt="image détail produit">
            </div>
            <div class="columns__column column">
                <p class="description_product"> {{$product->description}} </p>
                <div class="columns__column row add_cart">
                    <h3> Prix: {{$product->price}} </h3>
                    <button class="button_change_page" type="submit">Ajouter au panier</button>
                </div>
            </div>
        </div>
        <div class="features">
            <h3 class="color_title">Caractéristique produit</h3>
        </div>
        <div class="features">

        </div>
    </div>
</main>

@endsection
