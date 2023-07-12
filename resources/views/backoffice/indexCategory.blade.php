@extends('layouts.backofficelayout')
@section('content')
<div class="bg-slate-800 ">
    <div class="container mx-auto flex justify-center flex-wrap">
        <a href="{{route('category.create')}}">
        <div class="text-gray-100 mt-10 p-7 rounded outline outline-1">
            Ajouté une nouvel catégorie
        </div>
    </a>
        @foreach ($categories as $category)
            <table class="bg-slate-900 w-full text-gray-100 m-10">
                <thead>
                    <th>Id</th>
                    <th>Nom</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"> {{$category->id}} </td>
                        <td class="text-center"> {{$category->name}} </td>
                        <td class="text-center"> {{$category->price}} </td>
                        <td class="text-center"> {{$category->stock}} </td>
                        <td class="text-center"> {{$category->category_id}} </td>
                        <td class="text-center">
                            <form action="{{route('category.destroy',['category'=>$category])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <input type="hidden" value="{{$category->id}}">
                                <button href="" class="bg-red-600 rounded py-1 px-3">Delete</button>
                            </form>

                            <a href="{{route('category.edit',['category'=>$category])}}" class="bg-green-700 rounded py-1 px-3">Modify</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>
</div>


@endsection
