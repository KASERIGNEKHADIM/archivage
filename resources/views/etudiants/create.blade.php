@extends('layouts.master')
@section('titre')
    {{ $titre }}
@endsection
@section('contenue')
    <form action="{{ url('etudiants') }}" method="post">
        @csrf

        <div class="col-md-12 mx-auto shadow p-4">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Nom : </label>
                    <input type="text" class="form-control" name="nom" id="nom">
                </div>
                <div class="col">
                    <label for="" class="form-label">Prenom :</label>
                    <input type="text" class="form-control" name="prenom" id="prenom">
                </div>
                <div class="col">
                    <label for="" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="col">
                    <label for="" class="form-label">Telephone :</label>
                <input type="text" class="form-control" name="telephone" id="telephone">
                </div>
                <div class="col">
                   <label for="">Nationalité : </label> <br>
                   <select name="nationalite_id" id="nationalite_id">
                        @foreach ($nationalites as $n)
                        <option class="" value="{{ $n->id }}">{{ $n->nationalite }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="">Niveau d'étude :</label> <br>

                     <select name="niveau_id" id="niveau_id">
                        @foreach ($niveaux as $n)
                        <option class="" value="{{ $n->id }}">{{ $n->libelle }} </option>
                        @endforeach
                    </select>
                </div>
            </div> <br>
            <div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
@endsection
