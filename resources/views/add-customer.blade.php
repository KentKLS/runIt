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
    <form action="{{route('redirect.create.customer')}}" method="post" class="container">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="first_name" placeholder="Prénom">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="last_name" placeholder="Nom">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="formGroupExampleInput" name="password" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection
