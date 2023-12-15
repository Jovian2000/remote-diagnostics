@extends('layouts.master')

@section('content')

@csrf

@foreach($emissions as $emission)
    <li>
        {{$emission->nox_emission}}
        {{$emission->co2_emission}}
    </li>
@endforeach

@endsection