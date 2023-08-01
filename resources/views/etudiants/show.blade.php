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
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">DOCUMENTS</th>
              <th scope="col">FICHIER</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($etudiant->documents  as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nom}}</td>
                <td><a download="" href="{{ asset('storage/'.$item->chemin) }}" class="btn btn-primary" >Telecharger</a></td>
                @endforeach
                </tbody>
                </table>
            </ul>

@endsection
