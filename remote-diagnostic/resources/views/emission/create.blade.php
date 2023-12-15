@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('emission.store')}}">
    @csrf
    <label>Emissie id:</label>
    <input name="emissionId" type="text">
    
    <label>NOx uitstoot:</label>
    <input name="noxEmission" type="text">
    
    <label>CO2 uitstoot:</label>
    <input name="co2Emission" type="text">
    
    <label>Schip id:</label>
    <input name="shipId" type="text">
    
    <input type="submit" value="Send me!">
</form>

@endsection