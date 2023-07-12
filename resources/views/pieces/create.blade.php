@extends('modele')

@section('titre')
{{$titre}}
@endsection
@section('contenue')
<form action="{{ url('pieces') }}" method="post">
@csrf

<div class="col-md-6 mx-auto shadow p-4">
    <div class=" mb-3">
        <label for="" class="form-label">Libelle :</label>
          <input type="text" class="form-control" name="libelle" id="libelle">
    </div>
    <div class=" mb-3">
        <label for="" class="form-label">Description :</label>
          <input type="text" class="form-control" name="description" id="description">
    </div>
    <div class="mb-3">
        Nationalité : <select name="nationalite_id" id="nationalite_id">
            @foreach ($nationalites as $n)
            <option class="" value="{{$n->id}}">{{$n->nationalite}} </option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</div>
  </form>
@endsection
