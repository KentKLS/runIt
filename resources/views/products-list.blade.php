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
                <button type="button"><p class="main">Chaussures</p></button>
                <button type="button"><p class="main">Vêtements</p></button>
                <button type="button"><p class="main">Electro</p></button>
                <button type="button"><p class="main">Accessoires</p></button>
            </div>
        </div>
        <div class="wrapper">
            <div class="cart">
                <img class="cart_img cart_position" src="{{URL::asset('img/img_cart_1.jpg')}}" alt="image cart 1">
                <h4 class="cart_position">Hoka One One Torrent 2 M</h4>
                <p class="cart_position">Sa force, sa légèreté</p>
                <h3 class="cart_position">120€</h3>
            </div>
            <div class="cart">
                <img class="cart_img cart_position" src="{{URL::asset('img/img_cart_1.jpg')}}" alt="image cart 1">
                <h4 class="cart_position">Hoka One One Torrent 2 M</h4>
                <p class="cart_position">Sa force, sa légèreté</p>
                <h3 class="cart_position">120€</h3>
            </div>
            <div class="cart">
                <img class="cart_img cart_position" src="{{URL::asset('img/img_cart_1.jpg')}}" alt="image cart 1">
                <h4 class="cart_position">Hoka One One Torrent 2 M</h4>
                <p class="cart_position">Sa force, sa légèreté</p>
                <h3 class="cart_position">120€</h3>
            </div>
            <div class="cart">
                <img class="cart_img cart_position" src="{{URL::asset('img/img_cart_1.jpg')}}" alt="image cart 1">
                <h4 class="cart_position">Hoka One One Torrent 2 M</h4>
                <p class="cart_position">Sa force, sa légèreté</p>
                <h3 class="cart_position">120€</h3>
            </div>
        </div>
        <h3 class="pagination">1 2 3 ... 9</h3>
    </div>
</main>


@endsection
