@extends('layouts.backofficelayout')

@section('content')
    <div class="bg-slate-800 ">
        <div class="container mx-auto flex justify-center flex-wrap">
            <a href="{{ route('order.create') }}">
                <div class="text-gray-100 mt-10 p-7 rounded outline outline-1">
                    Ajouté une nouvel commande
                </div>
            </a>
            @foreach ($orders as $order)
            {{-- @if (!empty($order)) --}}


                    <table class="bg-slate-900 w-full text-gray-100 m-10">
                        <thead>
                            <th>Id</th>
                            <th>User ID</th>
                            <th>Status</th>
                            <th>Nombre de Produits dans la commande</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"> {{ $order->id }} </td>
                                <td class="text-center"> {{ $order->user_id }} </td>
                                <td class="text-center"> {{ $order->status }} </td>
                                <td class="text-center">{{$order->products()->count()}}</td>
                                <td class="text-center">
                                    <a href="{{ route('order.show', ['order' => $order]) }}"
                                        class="bg-slate-500 rounded py-1 px-3">Détails</a>
                                        <form action="{{ route('order.destroy', ['order' => $order]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="{{ $order->id }}">
                                            <button onclick="return confirm('Attention ! Pas de retour en arrière possible!')" class="bg-red-600 rounded py-1 px-3">Delete</button>
                                        </form>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                {{-- @endif --}}
            @endforeach
        </div>
    </div>
@endsection
