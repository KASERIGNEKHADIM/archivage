@extends('modele')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<ul>
    <li>Nom : {{$niveau->libelle}} </li>
</ul>
@endsection
