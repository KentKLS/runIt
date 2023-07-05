@extends('templates.template')
@section('title')
    Cart
@endsection
@section('content')
    <div class="container grid grid-cols-6 grid-rows-6 gap-8 pt-36 pb-10  ">
        <div class=" bg-[#D2F306] font-bold row-span-1 col-span-4 pl-12 p-2">
            Panier
        </div>
        <div class="bg-[#D2F306] font-bold col-span-2 row-span-1 pl-12 p-2 ">
            Récapitulatif
        </div>

        <div class='row-span-4 grid grid-cols-5 col-span-4 outline outline-neutral-400'>
            <div class="col-span-2 flex flex-col">
                <p>Produit</p>
                <img src="" alt="">
            </div>
            <div class="col-span-1 flex flex-col">
                <p>Prix unitaire</p>
                <p>118€</p>
            </div>
            <div class="col-span-1 flex flex-col">
                <p>Quantité</p>
                <form action=""><input type="number"> <input></form>

            </div>
            <div class="col-span-1 flex flex-col">
                <p>Prix total</p>
                <p>118€</p>
            </div>

        </div>
        <div class='row-span-4 col-span-2  outline outline-neutral-400'>

        </div>



    </div>
@endsection
