@extends('layouts.master')

@section('content')

<div class="dashboardContainer">
    <div class="dashboardInterface">
        <div class="dashboardText">
            <h1>Dashboard</h1>
            <p id="currentDate"></p>
            <script>
                const currentDate = new Date();
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                document.getElementById("currentDate").innerHTML = currentDate.toLocaleDateString('nl-NL', options);
            </script>
        </div>

        <div class="dashboardItems">
            <div id="dashboardItem1" class="dashboardItem">
                <i class="fa-solid fa-circle-info"></i>
                <a>Informatie</a>
            </div>
            <div id="dashboardItem2" class="dashboardItem">
                <i class="fa-solid fa-list"></i>
                <a>List</a>
            </div>
            <div id="dashboardItem2" class="dashboardItem">
                <i class="fa-solid fa-calendar-days"></i>
                <a>Geschiedenis</a>
            </div>
            <div id="dashboardItem2" class="dashboardItem">
                <i class="fa-regular fa-compass"></i>
                <a>Navigatie</a>
            </div>
        </div>
    </div>

    <div class="importantItems">
        <div class="importantStatsItem">
            <h1 class="liveUitstoot">Live CO₂ uitstoot</h1>
            <a class="updateStatus">Laatst geupdate: 5 seconde geleden</a>
            <h2 class="liveStatus">50</h2>
            <a class="PerKilo">CO₂ uitstoot per ton kilometer</a>
        </div>
        <div class="importantStatsItem">
            <h1 class="liveUitstoot">Live NOₓ uitstoot</h1>
            <a class="updateStatus">Laatst geupdate: 5 seconde geleden</a>
            <h2 class="liveStatus">100</h2>
            <a class="PerKilo">NOₓ uitstoot per ton kilometer</a>
        </div>
        <div class="importantStatsItem">
            <h1 class="liveUitstoot">Koppel</h1>
            <a class="updateStatus">Laatst geupdate: 5 seconde geleden</a>
            <h2 class="liveStatus">12.000</h2>
            <a class="PerKilo">Nm</a>
        </div>
        <div class="importantStatsItem">
            <h1 class="liveUitstoot">Brandstofverbruik per uur</h1>
            <a class="updateStatus">Laatst geupdate: 5 seconde geleden</a>
            <h2 class="liveStatus">200</h2>
            <a class="PerKilo">liter/uur</a>
        </div>
    </div>

    <div class="analytics">
        <h1 class="detailsText">Afgelopen 7 routes</h1>
        <div class="analyticsGraph">
            <canvas id="floatingBarChart"></canvas>
        </div>
    </div>

    <div class="errorMessages">
        <h1 class="detailsText">Fout Meldingen</h1>
        <div class="errorResponse">
            <div class="detailsResponse">
                <h2>Motorstoring:</h2>
                <a>Geen</a>
            </div>
            <div class="detailsResponse">
                <h2>Brandstofniveau:</h2>
                <a>Laag</a>
            </div>
            <div class="detailsResponse">
                <h2>Oliedruk:</h2>
                <a>Laag</a>
            </div>
        </div>
    </div>

    <div class="extraInfo">
        <h1 class="detailsText">Extra Gegevens</h1>
        <div class="detailsResponse">
            <h2>Motortoerental:</h2>
            <a>1.200 RPM</a>
        </div>
        <div class="detailsResponse">
            <h2>Vermogen in kilowatt:</h2>
            <a>5.000 kW</a>
        </div>
        <div class="detailsResponse">
            <h2>Oliepijl:</h2>
            <a>50%</a>
        </div>
        <div class="detailsResponse">
            <h2>Oliedruk:</h2>
            <a>4 bar</a>
        </div>
        <div class="detailsResponse">
            <h2>Luchtdruk inlaatsysteem:</h2>
            <a>1,2 bar</a>
        </div>
        <div class="detailsResponse">
            <h2>Koelwatertemperatuur:</h2>
            <a>80°C</a>
        </div>
        <div class="detailsResponse">
            <h2>Olietemperatuur:</h2>
            <a>90°C</a>
        </div>
        <div class="detailsResponse">
            <h2>Uitlaatgastemperatuur:</h2>
            <a>450°C</a>
        </div>
        
        <div class="detailsResponse">
            <h2>Brandstofefficiëntie:</h2>
            <a>0,04 liter/kWh</a>
        </div>
    </div>
    <div class="detailsProfile">
    
    </div>
        
    </div>
</div>

@endsection