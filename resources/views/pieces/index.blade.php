@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Libelle</th>
        <th scope="col">description</th>
        <th scope="col">Nationalite</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pieces as $p)
        <tr>
            <th scope="row">{{$p->id}}</th>
            <td>{{$p->libelle}}</td>
            <td>{{$p->description}}</td>
            <td> {{$p->nationalite->nationalite}}</td>
            <td>
                <a href="{{url('pieces/' .$p->id)}}" class="btn btn-success">Consulter</a>
                <form action="{{url('pieces/'.$p->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="Swal.fire({
                        title: 'Error!',
                        text: 'Do you want to continue',
                        icon: 'error',
                        confirmButtonText: 'Cool'
                      })" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
                <a href="{{ route('pieces.edit', $p->id) }}" class="btn btn-warning">Editer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection

