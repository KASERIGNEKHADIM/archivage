@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<ul>
    <li>Nom : {{$document->nom}} </li>
    <li>Fichier : <a download="" href="{{ asset('storage/'.$document->chemin) }}" class="btn btn-primary" >Telecharger</a></a>
     </li>
    <li>Categorie : {{$document->categorie->id}}  {{$document->categorie->nom}} </li>
    <li>Etudiant: {{$document->etudiant->id}}  {{$document->etudiant->nom}} {{$document->etudiant->prenom}} </li>
</ul>
@endsection

