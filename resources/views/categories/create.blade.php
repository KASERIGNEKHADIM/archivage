@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<form action="{{ url('categories') }}" method="post">
@csrf

<div class="col-md-6 mx-auto shadow p-4">
    <div class=" mb-3">
        <label for="" class="form-label">Nom Categorie :</label>
          <input type="text" class="form-control" name="nom" id="nom">
    </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</div>
  </form>
@endsection
