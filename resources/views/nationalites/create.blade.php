@extends('modele')

@section('titre')
{{$titre}}
@endsection
@section('contenue')
<form action="{{ url('nationalites') }}" method="post">
@csrf

<div class="col-md-6 mx-auto shadow p-4">
    <div class=" mb-3">
        <label for="" class="form-label">Nationalité :</label>
          <input type="text" class="form-control" name="nationalite" id="nationalite">
    </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</div>
  </form>
@endsection
