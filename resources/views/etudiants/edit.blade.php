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
        <form method="post" action="{{ route('etudiants.update',$etudiant->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom : </label>
                <input value="{{$etudiant->nom}}" type="text" name="nom" class="form-control" id="nom"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom : </label>
                <input value="{{$etudiant->prenom}}" type="text" name="prenom" class="form-control" id="prenom"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email : </label>
                <input value="{{$etudiant->email}}" type="text" name="email" class="form-control" id="email"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone : </label>
                <input value="{{$etudiant->telephone}}" type="text" name="telephone" class="form-control" id="telephone"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="niveau_etude" class="form-label">Niveau : </label>
                <input value="{{$etudiant->niveau_etude}}" type="text" name="niveau_etude" class="form-control" id="niveau_etude"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
   </div>
@endsection
