@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')

      <li class=" btn btn-black "><a href="{{ url('etudiants/create') }}">Nouveau</a></li>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NOM</th>
        <th scope="col">PRENOM</th>
        <th scope="col">EMAIL</th>
        <th scope="col">TELEPHONE</th>
        <th scope="col">NATIONALITE</th>
        <th scope="col">DOCUMENTS</th>
        <th scope="col">STATUS</th>
        <th scope="col">NIVEAU D'ETUDE</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($etudiants as $e)
        <tr>
            <th scope="row">{{$e->id}}</th>
            <td>{{$e->nom}}</td>
            <td>{{$e->prenom}}</td>
            <td>{{$e->email}}</td>
            <td>{{$e->telephone}}</td>
            <td>{{$e->nationalite->nationalite}}</td>
            <td> @foreach ($e->documents as $d)<li>{{$d->nom}}</li>@endforeach</td>
            <td>

            @if ($e->documents->count()==7)
             <span class="btn btn-success  text-sm rounded">document complet</span>

            @elseif ($r=7-$e->documents->count())
                <span class="btn btn-danger  text-sm rounded">il vous manque {{$r}}</span>
            @else
            <span class="btn btn-danger  text-sm rounded">pas de document </span>
            @endif
             </td>
            <td> {{$e->niveau->libelle}}</td>
            <td>
                <a href="{{url('etudiants/' .$e->id)}}" class="btn btn-primary"><i class="fa-regular fa-eye" ></i></a>
                <a action="{{url('etudiants/'.$e->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                <a href="{{ route('etudiants.edit',$e->id) }}" class="btn btn-warning"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
