@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<ul>
    <li>Nom : {{$etudiant->nom}} </li>
    <li>Prenom : {{$etudiant->prenom}} </li>
    <li>Email : {{$etudiant->email}} </li>
    <li>Telephone : {{$etudiant->telephone}} </li>
    <li>document : {{$document->nom}} </li>

</ul>
@endsection
