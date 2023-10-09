<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" title="Home Pagina"><i data-feather="anchor"></i></a></li>
                <li><a href="#map" title="Map"><i data-feather="compass"></i></a></li>
                <li><a href="account.php" title="Account Pagina"><i data-feather="user"></i></a></li>
            </ul>
        </nav>
    </header>
    <div class="searchwrap">
        <div class="wrap">
            <div class="search">
            <input type="text" class="searchTerm" placeholder="Naar welke boot zoekt u?">
            <button type="submit" class="searchButton">
                <i data-feather="search"></i>
            </button>
            </div>
            <div class="createShip">
                <a href="createShip.php" title="Schip toevoegen">
                    <i data-feather="plus-circle"></i>
                </a>
            </div>
        </div>
    </div>
    <div id="container">
        <div class="ships">
            <div id="ship1" class="ship">
                <img src="img/coal_boat_icon.png" alt="icon of ship">
                <h2>Albatros</h2>
                <div class="shipCircle">
                    <div id="co2"><a>CO₂</a>
                    <h3>26</h3></div>
                    <div class="slash"><a>⟋</a></div>
                    <div id="nox"><a>NOₓ</a>
                    <h3>54</h3></div>
                </div>
                <button class="shipButton">Meer informatie</button>
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
                <button class="shipButton">Meer informatie</button>
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
                <button class="shipButton">Meer informatie</button>
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
                <button class="shipButton">Meer informatie</button>
            </div>
            <div id="ship5" class="ship">
                <img src="img/Empty_boat_icon.png" alt="icon of ship">
                <h2>Hanzo</h2>
                <div class="shipCircle">
                    <div id="co2"><a>CO₂</a>
                    <h3>0</h3></div>
                    <div class="slash"><a>⟋</a></div>
                    <div id="nox"><a>NOₓ</a>
                    <h3>0</h3></div>
                </div>
                <button class="shipButton">Meer informatie</button>
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
                <button class="shipButton">Meer informatie</button>
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
                <button class="shipButton">Meer informatie</button>
            </div>
        </div>
    </div>
    <script>
        feather.replace();
      </script>
</body>
</html>