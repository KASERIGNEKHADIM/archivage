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
    <li>Document :@foreach ($etudiant->documents  as $item)
        {{$item->nom}}

    @endforeach </li>
    <li>Fichier :@foreach ($etudiant->documents  as $item)
        {{$item->chemin  }}

    @endforeach </li>
    {{-- <li>Fichier : <a download="" href="{{ asset('storage/'.$documents->chemin) }}" class="btn btn-primary" >Telecharger</a></a> </li> --}}
    {{-- <li>Categorie : {{$documents->categorie->id}}  {{$documents->categorie->nom}} </li> --}}

</ul>
@endsection
