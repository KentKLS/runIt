@extends('layouts.backofficelayout')

@section('content')
    <div class="bg-slate-800 ">
        <div class="container mx-auto flex justify-center flex-wrap">
            <a href="{{ route('user.create') }}">Ajouté un nouvel Utilisateur
            </a>
            @foreach ($users as $user)
                <table class="bg-slate-900 w-full text-gray-100 m-10">
                    <thead>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Hashed Password</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> {{ $user->id }} </td>
                            <td class="text-center"> {{ $user->name }} </td>
                            <td class="text-center"> {{ $user->email }} </td>
                            <td class="text-center"> {{ $user->password }} </td>

                            <td class="text-center">
                                <form action="{{ route('user.destroy', ['user' => $user]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" value="{{ $user->id }}">
                                    <button href="" class="bg-red-600 rounded py-1 px-3">Delete</button>
                                </form>


                            </td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
@endsection
