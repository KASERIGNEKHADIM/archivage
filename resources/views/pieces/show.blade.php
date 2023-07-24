@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<ul>
    <li>libelle : {{$pieces->libelle}} </li>
    <li>description : {{$pieces->description}} </li>
    <li>Nationalite : {{$pieces->nationalite->nationalite}} </li>

</ul>
@endsection
