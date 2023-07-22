@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<ul>
    <li>Nom : {{$nationalite->nationalite}} </li>
</ul>
@endsection
