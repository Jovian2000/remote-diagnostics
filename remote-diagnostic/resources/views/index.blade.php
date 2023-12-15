@extends('layouts.master')

@section('content')

@csrf

<div class="searchwrap">
    <div class="wrap">
        <div class="search">
        <input type="text" class="searchTerm" placeholder="Naar welke schip bent u op zoek?">
        <button type="submit" class="searchButton">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        </div>
        <div class="createShip">
            <a href="{{route('ship.create')}}" title="Schip toevoegen">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="ships">
        <div id="ship1" class="ship">
            <img src="img/VoorbeeldSchip.png" alt="icon of ship">
            <h2>Albatros</h2>
            <div class="shipCircle">
                <div id="co2"><a>CO₂</a>
                <h3>26</h3></div>
                <div class="slash"><a>⟋</a></div>
                <div id="nox"><a>NOₓ</a>
                <h3>54</h3></div>
            </div>
            <a href="{{route('ship.index')}}" class="shipButton">Meer informatie</a>
        </div>
        <div id="ship2" class="ship">
            <img src="img/boat_icon.png" alt="icon of ship">
            <h2>Sunny</h2>
            <div class="shipCircle">
                <div id="co2"><a>CO₂</a>
                <h3>76</h3></div>
                <div class="slash"><a>⟋</a></div>
                <div id="nox"><a>NOₓ</a>
                <h3>56</h3></div>
            </div>
            <a href="{{route('ship.index')}}" class="shipButton">Meer informatie</a>
        </div>
        <div id="ship3" class="ship">
            <img src="img/oil_boat_icon.png" alt="icon of ship">
            <h2>Genji</h2>
            <div class="shipCircle">
                <div id="co2"><a>CO₂</a>
                <h3>35</h3></div>
                <div class="slash"><a>⟋</a></div>
                <div id="nox"><a>NOₓ</a>
                <h3>26</h3></div>
            </div>
            <a href="{{route('ship.index')}}" class="shipButton">Meer informatie</a>
        </div>
        <div id="ship4" class="ship">
            <img src="img/boat_icon.png" alt="icon of ship">
            <h2>Shark</h2>
            <div class="shipCircle">
                <div id="co2"><a>CO₂</a>
                <h3>74</h3></div>
                <div class="slash"><a>⟋</a></div>
                <div id="nox"><a>NOₓ</a>
                <h3>47</h3></div>
            </div>
            <a href="{{route('ship.index')}}" class="shipButton">Meer informatie</a>
        </div>
        <div id="ship5" class="ship-off">
            <img src="img/Empty_boat_icon.png" alt="icon of ship">
            <h2>Hanzo</h2>
            <div class="shipCircle">
                <div id="co2"><a>CO₂</a>
                <h3>-</h3></div>
                <div class="slash"><a>⟋</a></div>
                <div id="nox"><a>NOₓ</a>
                <h3>-</h3></div>
            </div>
            <a href="{{route('ship.index')}}" class="shipButton">Meer informatie</a>
        </div>
        <div id="ship6" class="ship">
            <img src="img/coal_boat_icon.png" alt="icon of ship">
            <h2>Osiris</h2>
            <div class="shipCircle">
                <div id="co2"><a>CO₂</a>
                <h3>23</h3></div>
                <div class="slash"><a>⟋</a></div>
                <div id="nox"><a>NOₓ</a>
                <h3>12</h3></div>
            </div>
            <a href="{{route('ship.index')}}" class="shipButton">Meer informatie</a>
        </div>
        <div id="ship7" class="ship">
            <img src="img/Empty_boat_icon.png" alt="icon of ship">
            <h2>Junker</h2>
            <div class="shipCircle">
                <div id="co2"><a>CO₂</a>
                <h3>27</h3></div>
                <div class="slash"><a>⟋</a></div>
                <div id="nox"><a>NOₓ</a>
                <h3>73</h3></div>
            </div>
            <a href="{{route('ship.index')}}" class="shipButton">Meer informatie</a>
        </div>
    </div>
</div>

@endsection