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
        <form method="post" action="{{ route('documents.update', $document->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom : </label>
                <input value="{{$document->nom}}" type="text" name="nom" class="form-control" id="nom"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="chemin" class="form-label">Fichier : </label>
                <input value="{{$document->chemin}}" type="fyle" name="chemin" class="form-control" id="chemin"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Categorie : </label>
                <input value="{{$document->categorie->id}}  {{$document->categorie->nom}}" type="text" name="categorie_id" class="form-control" id="categorie_id"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Etudiant : </label>
                <input value="{{$document->etudiant->id}}  {{$document->etudiant->nom}} {{$document->etudiant->prenom}}" type="text" name="categorie_id" class="form-control" id="categorie_id"
                    aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
   </div>
@endsection
