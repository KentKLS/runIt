@extends('templates.layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('redirect.update.category',$categories->id)}}" method="post" class="container -sm">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom de la catégorie</label>
            <input type="text" class="form-control" id="formGroupExampleInput"  value="{{$categories->name}}" name="name" placeholder="Nom de la catéforie">
        </div>
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
@endsection
