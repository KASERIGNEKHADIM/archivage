@extends('modele')

@section('titre')
{{$titre}}
@endsection
@section('contenue')
    <div class="col-md-6 mx-auto shadow p-3 ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ url('documents') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="titre" class="form-label">Nom : </label>
                <input value="{{ old('titre') }}" type="text" name="nom"
                    class="form-control  @error('titre')
            is-invalid   @enderror" id="titre"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="chemin" class="form-label">Fichier : </label>
                <input value="{{ old('chemin') }}" type="file" name="chemin"
                    class="form-control  @error('chemin')
        is-invalid   @enderror" id="chemin"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            Categorie : <select name="categorie_id" id="categorie_id">
                @foreach ($categories as $c)
                <option value="{{$c->id}}">{{$c->nom}}</option>
                @endforeach
            </select>
            </div>
            <div class="mb-3">
                Etudiant : <select name="etudiant_id" id="etudiant_id">
                    @foreach ($etudiants as $e)
                    <option class="" value="{{$e->id}}">{{$e->nom}} {{$e->prenom}}</option>
                    @endforeach
                </select>
                </div>
            <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>
@endsection
