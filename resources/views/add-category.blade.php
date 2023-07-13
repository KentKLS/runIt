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
    <form action="{{route('redirect.create.category')}}" method="post" class="container">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom de la categorie</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Nom de la catégorie">
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection
