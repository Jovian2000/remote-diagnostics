@extends('layouts.master')

@section('content')

<div class="container">
    <div class="accountWrap">
        <div id="accountIcon">
            <img src="{{asset('img/VoorbeeldSchip.png')}}" alt="icon of ship">
            <span id="account-arrow-left"><a href="/"><i class="fa-solid fa-arrow-left"></i></a></span>
            <span id="account-pen-editor"><a href="#"><i class="fa-solid fa-pen"></i></a></span>
        </div>
        <div id="accountInfo">
            <div id="ship-info">
                <h2 id="ship-name">Naam Schip</h2>
                <a href id="owner-name">Naam Eigenaar</a><br>
                <a href="#" id="company-name">Naam Bedrijf</a>
            </div>
        </div>
        <div id="account-bedrijven">
            <h2>Collega's:</h2>
            <div id="account-colleagues">
                <div class="colleagues">
                    <img src="{{asset('img/VoorbeeldSchip.png')}}" alt="icon of ship">
                    <span class="colleagues-names">Naam Schip</span>
                </div>
                <div class="colleagues">
                    <img src="{{asset('img/VoorbeeldSchip.png')}}" alt="icon of ship">
                    <span class="colleagues-names">Naam Schip</span>
                </div>
                <div class="colleagues">
                    <img src="{{asset('img/VoorbeeldSchip.png')}}" alt="icon of ship">
                    <span class="colleagues-names">Naam Schip</span>
                </div>
                <div class="colleagues">
                    <img src="{{asset('img/Portrait voorbeeld.png')}}" alt="icon of ship">
                    <span class="colleagues-names">Naam Schip</span>
                </div>
                <div class="colleagues">
                    <img src="{{asset('img/VoorbeeldSchip.png')}}" alt="icon of ship">
                    <span class="colleagues-names">Naam Schip</span>
                </div>
                <div class="colleagues">
                    <img src="{{asset('img/Portrait voorbeeld.png')}}" alt="icon of ship">
                    <span class="colleagues-names">Naam Schip</span>
                </div>
                <div class="colleagues">
                    <img src="{{asset('img/VoorbeeldSchip.png')}}" alt="icon of ship">
                    <span class="colleagues-names">Naam Schip</span>
                </div>
                <div class="colleagues">
                    <img src="{{asset('img/Portrait voorbeeld.png')}}" alt="icon of ship">
                    <span class="colleagues-names">Naam Schip</span>
                </div>
                <div class="colleagues">
                    <img src="{{asset('img/VoorbeeldSchip.png')}}" alt="icon of ship">
                    <span class="colleagues-names">Naam Schip</span>
                </div>
            </div>
        </div>
        <div id="account-fotos">
            <img src="{{asset('img/VoorbeeldSchip.png')}}" alt="icon of ship">
            <img src="{{asset('img/Portrait voorbeeld.png')}}" alt="icon of ship">
            <img src="{{asset('img/VoorbeeldSchip.png')}}" alt="icon of ship">
        </div>
    </div>
</div>

@endsection