@extends('layouts.master')

@section('content')

<div class="container">
    <div class="accCreateWrap">
        <div id="creationCheck">
            <h1>Wachtwoord beveiliging:</h1>
            <div class="passwordCheck">
                <i class="fa-solid fa-circle-xmark" style="color: red"></i>
                <h2>Wachtwoord heeft kleine letter(s).</h2>
            </div>
            <div class="passwordCheck">
                <i class="fa-solid fa-circle-check" style="color: green"></i>
                <h2>Wachtwoord heeft hoofdletter(s).</h2>
            </div>
            <div class="passwordCheck">
                <i class="fa-solid fa-circle-check" style="color: green"></i>
                <h2>Wachtwoord heeft een speciaal teken.</h2>
            </div>
            <div class="passwordCheck">
                <i class="fa-solid fa-circle-xmark" style="color: red"></i>
                <h2>Wachtwoord heeft een nummer.</h2>
            </div>
            <div class="passwordCheck">
                <i class="fa-solid fa-circle-check" style="color: green"></i>
                <h2>Wachtwoord heeft minstens 12 tekens.</h2>
            </div>
        </div>
        <div id="createAccountWrap">
            <div id="inputTextWrap">
            <h1>Maak een account aan</h1>
            <form method="POST" action="{{route('user.store')}}">
                @csrf
                <div class="inputWrap">
                    <label for="firstName">Voornaam</label>
                    <input type="text" name="firstName" id="firstName" placeholder="Voornaam" required>
                </div>
                <div class="inputWrap">
                    <label for="lastName">Achternaam</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Achternaam" required>
                </div>
                <div class="inputWrap">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
                    <i class="fa-solid fa-dice" onclick="generatePassword()"></i>
                    <button id="show-password-btn" type="button">Show Password</button>
                </div>
                <div class="inputWrap">
                    <label for="passwordCheck">Wachtwoord herhalen</label>
                    <input type="password" name="passwordCheck" id="passwordCheck" placeholder="Wachtwoord herhalen" required>
                </div>
                <div class="buttonWrap">
                    <input type="submit" value="Maak account aan" name="submit">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/RandomPasswordGenerator.js')}}"></script>
<script src="{{asset('js/ShowPassword.js')}}"></script>

@endsection