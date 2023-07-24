@extends('layouts.master')
@section('titre')
{{$titre}}
@endsection
@section('contenue')
<ul>
    <li>Nom : {{$nationalites->nationalite}} </li>
</ul>
@endsection
