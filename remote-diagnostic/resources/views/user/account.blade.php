<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a0643bc99f.js" crossorigin="anonymous"></script>
</head>
<body>
    @csrf
    <header>
        <nav>
            <ul>
                <li><a href="index.php" title="Home Pagina"><i class="fa-solid fa-ship"></i></a></li>
                <li><a href="details.blade.php" title="Map"><i class="fa-regular fa-compass"></i></a></li>
                <li><a href="login.php" title="Account Pagina"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
            </label>
        </div>
    </header>
    <div class="container">
        <div class="accountWrap">
            <div id="accountIcon">
                <img src="img/VoorbeeldSchip.png" alt="icon of ship">
                <span id="account-arrow-left"><a href="#"><i class="fa-solid fa-arrow-left"></i></a></span>
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
                        <img src="img/VoorbeeldSchip.png" alt="icon of ship">
                        <span class="colleagues-names">Naam Schip</span>
                    </div>
                    <div class="colleagues">
                        <img src="img/Portrait voorbeeld.png" alt="icon of ship">
                        <span class="colleagues-names">Naam Schip</span>
                    </div>
                    <div class="colleagues">
                        <img src="img/VoorbeeldSchip.png" alt="icon of ship">
                        <span class="colleagues-names">Naam Schip</span>
                    </div>
                    <div class="colleagues">
                        <img src="img/Portrait voorbeeld.png" alt="icon of ship">
                        <span class="colleagues-names">Naam Schip</span>
                    </div>
                    <div class="colleagues">
                        <img src="img/VoorbeeldSchip.png" alt="icon of ship">
                        <span class="colleagues-names">Naam Schip</span>
                    </div>
                    <div class="colleagues">
                        <img src="img/Portrait voorbeeld.png" alt="icon of ship">
                        <span class="colleagues-names">Naam Schip</span>
                    </div>
                    <div class="colleagues">
                        <img src="img/VoorbeeldSchip.png" alt="icon of ship">
                        <span class="colleagues-names">Naam Schip</span>
                    </div>
                    <div class="colleagues">
                        <img src="img/Portrait voorbeeld.png" alt="icon of ship">
                        <span class="colleagues-names">Naam Schip</span>
                    </div>
                    <div class="colleagues">
                        <img src="img/VoorbeeldSchip.png" alt="icon of ship">
                        <span class="colleagues-names">Naam Schip</span>
                    </div>
                </div>
            </div>
            <div id="account-fotos">
                <img src="img/VoorbeeldSchip.png" alt="icon of ship">
                <img src="img/Portrait voorbeeld.png" alt="icon of ship">
                <img src="img/VoorbeeldSchip.png" alt="icon of ship">
            </div>
        </div>
    </div>
</body>
</html>
<script src="js/darkmode.js"></script>