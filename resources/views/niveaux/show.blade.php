@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<ul>
    <li>Nom : {{$niveaux->libelle}} </li>
    <li>Année scolaire : {{$niveaux->annee_scolaire}} </li>
</ul>
@endsection
