@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<li class=" btn btn-black "><a href="{{ url('categories/create') }}">Nouveau</a></li>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NOM</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $c)
        <tr>
            <th scope="row">{{$c->id}}</th>
            <td>{{$c->nom}}</td>
            <td>
                <a href="{{url('categories/' .$c->id)}}" class="btn btn-success">Consulter</a>
                <form action="{{url('categories/'.$c->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="Swal.fire({
                        title: 'Error!',
                        text: 'Do you want to continue',
                        icon: 'error',
                        confirmButtonText: 'Cool'
                      })" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
                <a href="{{ route('categories.edit',$c->id) }}" class="btn btn-warning">Editer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
