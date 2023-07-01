@extends('modele')

@section('titre')
{{$titre}}
@endsection
@section('contenue')
<form action="{{ url('etudiants') }}" method="post">
@csrf

<div class="col-md-6 mx-auto shadow p-4">
    <div class=" mb-3">
        <label for="" class="form-label">Nom :  </label>
          <input type="text" class="form-control" name="nom" id="nom">
    </div>
    <div class=" mb-3">
        <label for="" class="form-label">Prenom :</label>
          <input type="text" class="form-control" name="prenom" id="prenom">
    </div>
    <div class=" mb-3">
        <label for="" class="form-label">Email :</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    </div>
    <div class=" mb-3">
        <label for="" class="form-label">Telephone :</label>
          <input type="text" class="form-control" name="telephone" id="telephone">
    </div>
    <div class=" mb-3">
        <label for="" class="form-label">Nationalité :</label>
          <input type="text" class="form-control" name="nationalite" id="nationalite">
    </div>
    <div class="mb-3">
        Niveau d'étude : <select name="niveau_id" id="niveau_id">
            @foreach ($niveaux as $n)
            <option class="" value="{{$n->id}}">{{$n->libelle}} </option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</div>
  </form>
@endsection
