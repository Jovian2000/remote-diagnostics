@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('ship.store')}}">
    @csrf
    <label>Schip id:</label>
    <input name="shipId" type="text">
    
    <label>Schipnaam:</label>
    <input name="shipName" type="text">
    
    <label>Gebruikersnaam:</label>
    <input name="userName" type="text">

    <label>Emissie id:</label>
    <input name="emissionId" type="text">

    <input type="submit" value="Send me!">
</form>

@endsection