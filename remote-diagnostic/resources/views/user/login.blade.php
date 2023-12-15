<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>VinkDiesel login</title>
</head>
<body>

    <div id="LoginBox"> 
        <form action="login.php">
            <div class="imgwrap">
                <img src="img/Vink_Diesel.png" alt="">
            </div>
            <label for="name"><b> Gebruikernaam:</b></label>
            <input type="text" class="InputBars" placeholder="Naam" required>
            
            <label for=""><b>Wachtwoord</b></label>
            <input type="password" class="InputBars" placeholder="Wachtwoord" required>
            
            <label for="">Blijf aangemeld</label>
            <input type="checkbox">
            <br>
            
            <button  class= "button" type="submit">Login</button>

        </form>
    </div>
    
</body>
</html>