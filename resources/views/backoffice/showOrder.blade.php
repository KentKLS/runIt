@extends('layouts.backofficelayout')

@section('content')
    <div class="bg-slate-800 h-[780px] ">
        <div class="container mx-auto flex flex-col justify-center flex-wrap">
            <div class="">
                <a href="{{ route('order.product.create',['order' => $order]) }}">
                    <div class="text-gray-100 mt-10 p-7 rounded outline outline-1 text-center">
                        Ajouté un produit a cet commande
                    </div>
                </a>

                <div class="text-center py-3 text-gray-100 font-bold">Détails de la commande</div>
            </div>
            @if (empty($orderProducts->first()->pivot->order_id))
                <div class="flex justify-center py-8 text-2xl font-bold text-gray-100">
                    Pas de Produit dans cet Commande, pensé a la supprimé !
                </div>
            @else
                <div>
                    <p class="text-gray-100 px-8">Order ID : {{ $orderProducts->first()->pivot->order_id }} </p>
                    <table class="bg-slate-900 w-full text-gray-100 mx-10">
                        <thead>
                            <th>Nom du produit</th>
                            <th>Quantité</th>
                            <th>Prix par produit</th>
                            <th></th>

                        </thead>
                        @foreach ($orderProducts as $orderProduct)
                            <tbody>
                                <tr>
                                    <td class="text-center"> {{ $orderProduct->name }}
                                    </td>
                                    <td class="text-center"> {{ $orderProduct->pivot->quantity }}
                                    </td>
                                    <td class="text-center"> {{ $orderProduct->price }}
                                    </td>
                                    <td>
                                        <form
                                            action="{{ route('order.product.destroy', ['order' => $orderProduct->order]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="product_id" value="{{ $orderProduct->id }}">
                                            <input type="hidden" name="order_id"
                                                value="{{ $orderProduct->pivot->order_id }}">
                                            <button
                                                onclick="return confirm('Attention ! Pas de retour en arrière possible!')"
                                                class="bg-red-600 rounded py-1 px-3">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
            @endforeach
        </div>
        @endif
    </div>
    </div>
@endsection
