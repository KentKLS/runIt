@extends('templates.template')
@section('title')
    Cart
@endsection
@section('content')


    @if (session('error'))
        <div class="container flex justify-center text-8xl text-red-600 ">{{ session('error') }} </div>
    @endif
    @if (empty($cartItems))
        <div class="container text-5xl font-bold text-center p-60">
            Le panier est vide
        </div>
    @else
        <div class="container grid grid-cols-6  gap-8 pt-24 pb-8 montserrat ">
            <div class=" bg-[#D2F306] font-bold row-span-1 col-span-4 pl-12 p-2">
                Panier
            </div>
            <div class="bg-[#D2F306] font-bold col-span-2 row-span-1 pl-12 p-2 ">
                Récapitulatif
            </div>
        </div>
        <div class="container grid grid-cols-6 gap-8 pb-36 ">
            <div class="col-span-4 flex flex-wrap">
                <div class="w-2/6 text-center py-3">Nom</div>
                <div class="w-1/6 text-center py-3">Prix Unitaire</div>
                <div class="w-1/6 text-center py-3">Quantité</div>
                <div class="w-1/6 text-center py-3">Total par Produit</div>
                <div class="w-1/6 text-center py-3"></div>


                @foreach ($cartItems as $cartItem)
                    <?php $stock = $cartItem->product->stock;
                    $id = $cartItem->id;
                    $totalPerProduct[] = $cartItem->product->price;
                    ?>
                    <hr class=" bg-black w-[90%] m-auto my-3 ">
                    <div class="w-2/6 flex flex-col items-center">{{ $cartItem->product->name }}
                        <img class="w-3/4" src="{{ $cartItem->product->imgURL }}" alt="">
                    </div>
                    <div class="w-1/6 text-center py-3">{{ $cartItem->product->price }}</div>
                    <div class="w-1/6 text-center py-3">
                        <form id="quantityForm" action="">
                            <input type="button" onclick="decrementValue(<?php echo $id; ?>)"
                                class="px-1  cursor-pointer font-extrabold text-xl text-[#FF7A00]"value="-" />
                            <input id="{{ $id }}" name="quantity" class="w-1/5 text center border-none p-1" type="text"
                                disabled min="1" max="{{ $cartItem->product->stock }}"
                                value="{{ $cartItem->quantity }}">
                            <input type="button" onclick="incrementValue(<?php echo $stock; ?>,<?php echo $id; ?>)"
                                class="px-1  cursor-pointer font-extrabold text-xl text-[#FF7A00]"value="+" />
                        </form>
                    </div>
                    <div class="w-1/6 text-center py-3">{{ $cartItem->product->price * $cartItem->quantity }} </div>

                    <div class="w-1/6 py-3 flex justify-center ">
                        <form action="{{ route('cart.destroy', ['item' => $cartItem]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $cartItem->id }}">
                            <button onclick="return confirm('Attention ! Pas de retour en arrière possible!')"
                                class=""><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                    <path fill="#FF7A00"
                                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                </svg></button>
                        </form>
                    </div>
                @endforeach


            </div>
            <div
                class='col-span-2 flex justify-evenly flex-col items-center outline outline-neutral-400 h-[510px] sticky top-44'>
                <div class="flex justify-between w-full px-8">
                    <p> Sous-total</p>

                    <p>{{ array_sum($totalPerProduct) }}</p>
                </div>
                <hr class=" bg-black w-4/5 ">
                <div class="flex justify-between w-full px-8">
                    <p>Livraison</p>
                    <p>500</p>
                </div>
                <hr class=" bg-black w-4/5 ">

                <div class="flex font-extrabold justify-between w-full px-8">
                    <p>total TTC</p>
                    <p>{{ (array_sum($totalPerProduct))+500 }}</p>
                </div>
                <hr class=" bg-black w-4/5 ">

                <button onclick="submitForm('quantityForm')"
                    class="rounded font-bold w-3/4 flex items-center justify-center  p-2 bg-[#D2F306]"> Poursuivre la
                    commande</button>
            </div>
        </div>
    @endif
@endsection
