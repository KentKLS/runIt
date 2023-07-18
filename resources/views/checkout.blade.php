@extends('templates.template')
@section('title')
    Run It - checkout
@endsection
@section('content')
    <div class="container ">
        @if (session('success'))
            <div class="flex justify-center items-center">
                <div class="pt-32">Votre commande a bien été enregistré</div>
                <div class="pb-32">Merci pour votre visite de Run it !</div>
            </div>
        @else
            <div class="flex flex-col justify-center items-center">
                <div class="font-bold text-2xl text-center mx-4 px-4 py-10">
                    Hello thanks for visiting our shop, sadly the checkout is not available yet, but we can save your order
                    for
                    you
                    if you wish
                </div>
                <div>Détails de la commande</div>
                <div class=" mx-auto py-10  ">
                    <div class="col-span-4 flex flex-wrap">
                        <div class="w-1/4 text-center py-3">Nom</div>
                        <div class="w-1/4 text-center py-3">Prix Unitaire</div>
                        <div class="w-1/4 text-center py-3">Quantité</div>
                        <div class="w-1/4 text-center py-3">Prix Total (including VAT and shipping)</div>
                        @foreach ($cartItems as $cartItem)
                            <?php $stock = $cartItem->product->stock;
                            $id = $cartItem->id;
                            $totalPerProduct[] = $cartItem->product->price * $cartItem->quantity;
                            ?>
                            <hr class=" bg-black w-[90%] m-auto my-3 ">
                            <div class="w-1/4 text-center py-3">{{ $cartItem->product->name }}
                            </div>
                            <div class="w-1/4 text-center py-3">{{ $cartItem->product->price }}</div>
                            <div class="w-1/4 text-center py-3 flex justify-center">
                                {{ $cartItem->quantity }}
                            </div>
                        @endforeach
                        <div class="w-1/4 text-center py-3">
                            {{ array_sum($totalPerProduct) + 500 }}
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <form class="py-10" action="{{ route('order.convert') }}" method="POST">
                            @csrf
                            <button class="rounded font-bold w-3/4 flex items-center justify-center  p-2 bg-[#D2F306]">Click
                                here to
                                save your order</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
