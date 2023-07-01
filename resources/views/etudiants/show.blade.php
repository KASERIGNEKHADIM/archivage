@extends('modele')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<ul>
    <li>Nom : {{$etudiant->nom}} </li>
    <li>Prenom : {{$etudiant->prenom}} </li>
    <li>Email : {{$etudiant->email}} </li>
    <li>Telephone : {{$etudiant->telephone}} </li>
    <li>Niveau : {{$etudiant->niveau_etude}} </li>
</ul>
@endsection
