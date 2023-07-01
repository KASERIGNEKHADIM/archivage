@extends('modele')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NOM</th>
        <th scope="col">PRENOM</th>
        <th scope="col">EMAIL</th>
        <th scope="col">TELEPHONE</th>
        <th scope="col">NATIONALITE</th>
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
            <td>{{$e->niveau_etude}}</td>
            <td> {{$e->niveau->libelle}}</td>
            <td>
                <a href="{{url('etudiants/' .$e->id)}}" class="btn btn-success">Consulter</a>
                <form action="{{url('etudiants/'.$e->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="Swal.fire({
                        title: 'Error!',
                        text: 'Do you want to continue',
                        icon: 'error',
                        confirmButtonText: 'Cool'
                      })" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
                <a href="{{ route('etudiants.edit', ['id'=>$e->id]) }}" class="btn btn-warning">Editer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
