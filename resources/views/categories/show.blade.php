@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')<ul>
    <li>Nom : {{$categorie->nom}} </li>
</ul>
@endsection
