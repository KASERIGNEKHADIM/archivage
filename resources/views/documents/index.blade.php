@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<li class=" btn btn-black "><a href="{{ url('documents/create') }}">Nouveau</a></li>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ETUDIANTS</th>
        <th scope="col">DOCUMENTS</th>
        <th scope="col">FICHIERS</th>
        <th scope="col">Categorie</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($documents as $d)
        <tr>
            <th scope="row">{{$d->id}}</th>
            <td> {{$d->etudiant->nom}} {{$d->etudiant->prenom}}</td>
            <td>{{$d->nom}}</td>
            <td><a download="" href="{{ asset('storage/'.$d->chemin) }}" class="btn btn-primary" >Telecharger</a></td>
            <td> {{$d->categorie->nom}}</td>
            <td>
                <a href="{{url('documents/' .$d->id)}}" class="btn btn-success">Consulter</a>
                <form action="{{url('documents/'.$d->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="Swal.fire({
                        title: 'Error!',
                        text: 'Do you want to continue',
                        icon: 'error',
                        confirmButtonText: 'Cool'
                      })" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
                <a href="{{ route('documents.edit', $d->id) }}" class="btn btn-warning">Editer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection

