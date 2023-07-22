@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<form action="{{ url('niveaux') }}" method="post">
@csrf

<div class="col-md-6 mx-auto shadow p-4">
    <div class=" mb-3">
        <label for="" class="form-label">Nom :</label>
          <input type="text" class="form-control" name="libelle" id="libelle">
    </div>
    <div class=" mb-3">
        <label for="" class="form-label">Année scolaire :</label>
          <input type="text" class="form-control" name="annee_scolaire" id="annee_scolaire">
    </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</div>
  </form>
@endsection
