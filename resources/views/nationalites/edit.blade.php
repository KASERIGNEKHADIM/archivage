@extends('layouts.master')
@section('titre')
    {{$titre}}
@endsection
@section('contenue')
   <div class="row">
    <div class="col-md-6  shadow p-3 ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="post" action="{{ route('nationalites.update', ['id' => $nationalite->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nationalité : </label>
                <input value="{{$nationalite->nom}}" type="text" name="nationalite" class="form-control" id="nom"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
   </div>
@endsection

