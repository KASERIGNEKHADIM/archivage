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
        <form method="post" action="{{ route('niveaux.update', $niveaux->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="libelle" class="form-label">Nom : </label>
                <input value="{{$niveau->libelle}}" type="text" name="libelle" class="form-control" id="libelle"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
   </div>
@endsection

