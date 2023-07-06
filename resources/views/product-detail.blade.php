@extends('templates.template')
@section('content')
<main class="product_detail">
    <div class="container">
        <div class="title_product">
            <h3 class="color_title">Hoka One One Torrent 2 M</h3>
        </div>
        <div class="columns border">
            <div class="columns__column product_position">
                <img class="cart_img " src="{{URL::asset('img/img_cart_1.jpg')}}" alt="image détail produit">
            </div>
            <div class="columns__column column">
                <p class="description_product">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquam ultrices sagittis orci a scelerisque purus semper. Integer enim neque volutpat ac tincidunt vitae semper quis. Purus sit amet luctus venenatis lectus magna.</p>
                <div class="columns__column row add_cart">
                    <h3>Prix:120,00€</h3>
                    <button class="button_change_page" type="submit">Ajouter au panier</button>
                </div>
            </div>
        </div>
        <div class="features">
            <h3 class="color_title">Caractéristique produit</h3>
        </div>
        <div class="features">
            <h4 class="feature">
                <p>LOREM IPSUM dolor sit amet, consectetur adipiscing elit</p>
            </h4>
            <h4 class="feature">
                <p>LOREM IPSUM dolor sit amet, consectetur adipiscing elit</p>
            </h4>
            <h4 class="feature">
                <p>LOREM IPSUM dolor sit amet, consectetur adipiscing elit</p>
            </h4>
            <h4 class="feature">
                <p>LOREM IPSUM dolor sit amet, consectetur adipiscing elit</p>
            </h4>
            <h4 class="feature">
                <p>LOREM IPSUM dolor sit amet, consectetur adipiscing elit</p>
            </h4>
        </div>
    </div>
</main>

@endsection
