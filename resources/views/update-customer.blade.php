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
    <form action="{{route('redirect.update.customer',$customer->id)}}" method="post" class="container -sm">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="formGroupExampleInput"  value="{{$customer->first_name}}" name="first_name" placeholder="Prénom">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="formGroupExampleInput"  value="{{$customer->last_name}}" name="last_name" placeholder="Nom">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Prénom</label>
            <input type="password" class="form-control" id="formGroupExampleInput"  value="{{$customer->password}}" name="password" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
@endsection
