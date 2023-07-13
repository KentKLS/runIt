@extends('layouts.backofficelayout')

@section('content')
    <div class="bg-slate-800 h-screen">
        <div class="container mx-auto flex justify-center flex-wrap">
            <div class="text-gray-100 mt-10 p-7 rounded outline outline-1">

                <a href="{{ route('address.create') }}">Ajouté une nouvelle addresse
                </a>
            </div>

            @foreach ($addresses as $address)
                <table class="bg-slate-900 w-full text-gray-100 m-10">
                    <thead>
                        <th>ID</th>
                        <th>User ID associé</th>
                        <th>Adresse de livraison</th>
                        <th>Adresse de facturation</th>
                        <th>Numéro de téléphone</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> {{ $address->id }} </td>
                            <td class="text-center"> {{ $address->user_id }} </td>
                            <td class="text-center"> {{ $address->addresse_livraison }} </td>
                            <td class="text-center"> {{ $address->addresse_facturation }} </td>
                            <td class="text-center"> {{ $address->phone_number }} </td>

                            <td class="text-center">
                                <form action="{{ route('address.destroy', ['address' => $address]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" value="{{ $address->id }}">
                                    <button onclick="return confirm('Attention ! Pas de retour en arrière possible!')" class="bg-red-600 rounded py-1 px-3">Delete</button>
                                </form>
                                <a href="{{ route('address.edit', ['address' => $address]) }}"
                                    class="bg-green-700 rounded py-1 px-3">Modify</a>


                            </td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
@endsection
