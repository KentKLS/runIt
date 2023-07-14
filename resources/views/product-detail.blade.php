@extends('templates.template')

@section('content')
    <main class="product_detail">
        <div class="container">
            @if (session('success'))
                <div class="flex justify-center">
                    <div id="success" class="w-1/3 text-center text-gray-100 font-bold rounded bg-green-700 p-3 m-10">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="title_product">
                <h3 class="color_title"> {{ $product->name }} </h3>
            </div>
            <div class="columns border">
                <div class="columns__column product_position">
                    <img class="cart_img " src="{{ $product->imgURL }}" alt="image détail produit">
                </div>
                <div class="columns__column column">
                    <p class="description_product"> {{ $product->description }} </p>
                    <div class="columns__column row add_cart">
                        <h3> Prix: {{ $product->price }} </h3>
                        @if (Auth::id() === null)
                        <div class="tooltip">                            
                            <button class="  button_change_page" type="submit" >Ajouter au panier</button>                               
                                <span class="tooltiptext"> Il faut etre connecté pour pouvoir ajouté cet article a votre
                                    panier </span>                            
                        </div>
                        @else
                        <form action="{{ route('cart.store', ['id' => $product]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
                            <input type="hidden" name="quantity" id="quantity" value="1">                          
                            <button class="  button_change_page" type="submit" >Ajouter au panier</button>                               

                        </form>
                        @endif
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
