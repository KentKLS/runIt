@extends('templates.template')
@section('content')
    <main>
        <div class="container">
            <p class="path">/Home/Catalogue/Trail</p>
            <div class="columns position_catalogue">
                <div class="columns__column_1">
                    <h2>Trail</h2>
                </div>
                <div class="columns__column position_button">
                    <button type="button">
                        <p class="main">Chaussures</p>
                    </button>
                    <button type="button">
                        <p class="main">Vêtements</p>
                    </button>
                    <button type="button">
                        <p class="main">Electro</p>
                    </button>
                    <button type="button">
                        <p class="main">Accessoires</p>
                    </button>
                </div>
            </div>
            <div class="wrapper">
                @foreach ($products as $product)
                    {{-- @dd($product) --}}

                    <a href="/product-detail">
                        <div class="cart">
                            <img class="cart_img cart_position" src="{{ $product->imgURL }}" alt="image cart 1">
                            <h4 class="cart_position">{{ $product->name }}</h4>
                            <p class="cart_position">Sa force, sa légèreté</p>
                            <h3 class="cart_position">{{ $product->price }} </h3>

                            @if ($product->stock > 0)
                                <p class=" text-green-500 font-bold pb-2"> Produit en Stock</p>
                            @else
                                <p class="text-red-600 font-bold pb-2">Produit Indisponible</p>
                            @endif
                            <p></p>
                        </div>
                    </a>
                @endforeach
            </div>
            <h3 class="pagination">1 2 3 ... 9</h3>
        </div>
    </main>
@endsection
