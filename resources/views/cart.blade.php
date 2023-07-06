@extends('templates.template')
@section('title')
    Cart
@endsection
@section('content')
    <div class="container grid grid-cols-6 grid-rows-6 gap-8 py-36  montserrat ">
        <div class=" bg-[#D2F306] font-bold row-span-1 col-span-4 pl-12 p-2">
            Panier
        </div>
        <div class="bg-[#D2F306] font-bold col-span-2 row-span-1 pl-12 p-2 ">
            Récapitulatif
        </div>

        <div class='row-span-4 grid grid-cols-5 grid-rows-4 col-span-4 outline outline-neutral-400 '>

            <div class="col-span-2 row-span-1 flex items-center justify-center ">
                <p>Produit</p>
            </div>


            <div class="col-span-1 flex items-center justify-center">
                <p>Prix unitaire</p>

            </div>
            <div class="col-span-1  flex items-center justify-center ">
                <p>Quantité</p>



            </div>
            <div class="col-span-1 flex items-center justify-center">
                <p>Prix total</p>

            </div>
            <div class="col-span-2 row-span-3 flex flex-col items-center justify-center">
                <div class="font-bold">Nom du Produit</div>
                <img src="{{ URL::asset('Image/crosscall-x-chest-electronique-269219-1-f.jpg') }}" alt="" class=" w-3/4 ">
            </div>
            <div class="col-span-1 row-span-1 flex items-center justify-center">
                <p class=" flex items-center justify-center ">118€</p>
            </div>
            <div class="col-span-1 row-span-1 flex items-center justify-center">
                <form action="" >
                    <input type="button" onclick="decrementValue()" class="px-1 font-extrabold text-xl text-[#FF7A00]"value="-" />
                    <input type="text" id="number" value="1" class=" w-8 text-center" disabled="disabled">
                    <input type="button" onclick="incrementValue()" class="px-1 font-extrabold text-xl text-[#FF7A00]"value="+" />

                </form>
            </div>
            <div class="col-span-1 row-span-1 flex items-center justify-center">
                <p>118€</p>
            </div>
        </div>
        <div class='row-span-4 col-span-2 flex justify-evenly flex-col items-center outline outline-neutral-400'>
            <div class="flex justify-between w-full px-8">
                <p> Sous-total</p>

                <p>118€</p>
            </div>
            <hr class=" bg-black w-4/5 ">
            <div class="flex justify-between w-full px-8">
                <p>Livraison</p>
                <p>5€</p>
            </div>
            <hr class=" bg-black w-4/5 ">

            <div class="flex font-extrabold justify-between w-full px-8">
                <p>total TTC</p>
                <p>128€</p>
            </div>
            <hr class=" bg-black w-4/5 ">

            <button class="rounded font-bold w-3/4  p-2 bg-[#D2F306]"> Poursuivre la commande</button>
        </div>
    </div>
@endsection
