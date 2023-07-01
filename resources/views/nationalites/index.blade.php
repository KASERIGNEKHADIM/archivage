@extends('modele')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nationalité</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($nationalites as $n)
        <tr>
            <th scope="row">{{$n->id}}</th>
            <td>{{$n->nom}}</td>

            <td>
                <a href="{{url('nationalites/' .$n->id)}}" class="btn btn-success">Consulter</a>
                <form action="{{url('nationalites/'.$n->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="Swal.fire({
                        title: 'Error!',
                        text: 'Do you want to continue',
                        icon: 'error',
                        confirmButtonText: 'Cool'
                      })" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
                <a href="{{ route('nationalites.edit', ['id'=>$n->id]) }}" class="btn btn-warning">Editer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
