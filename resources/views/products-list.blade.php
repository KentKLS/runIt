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
                    <div class="p-3 text-[#D2F306]">Triée par</div>
                    <a href="/catalogue/name">
                    <button type="button"class="hover:bg-[#D2F306] font-bold hover:text-black text-[#D2F306]">
                        Nom
                    </button>
                </a>
                <a href="/catalogue/price">
                    <button type="button"class="hover:bg-[#D2F306] font-bold hover:text-black text-[#D2F306]">
                        Prix Croissant
                    </button>
                </a>
                    <a href="/catalogue/cat1">
                    <button type="button"class="hover:bg-[#D2F306] font-bold hover:text-black text-[#D2F306]">
                        Cat 1
                    </button>
                </a>
                    <a href="/catalogue/cat2">
                    <button type="button"class="hover:bg-[#D2F306] font-bold hover:text-black text-[#D2F306]">
                        Cat 2
                    </button>
                </a>
                    <a href="/catalogue/cat3">
                    <button type="button"class="hover:bg-[#D2F306] font-bold hover:text-black text-[#D2F306]">
                        Cat 3
                    </button>
                </a>
                </div>
            </div>
            <div class="wrapper">
                @foreach ($products as $product)
                    @if ($product->stock == 0)
                        <div class="cart opacity-70">
                            <img class="cart_img cart_position" src="{{ $product->imgURL }}" alt="image cart 1">
                            <h4 class="cart_position">{{ $product->name }}</h4>
                            <p class="cart_position">{{$product->oneliner}}</p>
                            <h3 class="cart_position">{{ $product->price }} </h3>
                            <p class="text-red-600 font-bold pb-2  brightness-150">Produit Indisponible</p>
                        </div>
                    @else
                        <a href="/product/{{$product->id}}">
                            <div class="cart  specialShadow">
                                <img class="cart_img cart_position" src="{{ $product->imgURL }}" alt="image cart 1">
                                <h4 class="cart_position">{{ $product->name }}</h4>
                                <p class="cart_position">{{$product->oneliner}}</p>
                                <h3 class="cart_position">{{ $product->price }} </h3>
                                <p class=" text-green-500 font-bold pb-2"> Produit en Stock</p>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
            <h3 class="pagination">1 2 3 ... 9</h3>
        </div>
    </main>
@endsection
