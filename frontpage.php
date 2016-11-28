<!DOCTYPE html>
<html>
<?php
include("iheader.php");

?>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->

    <title>Nettisivu</title>
    <link rel="stylesheet" type="text/css" href="styles/tyylit.css">
    <link rel="stylesheet" type="text/css" href="styles/dropdown.css">
</head>

    
<body>
    <div class="otsikkowide"></div>
    <div class="tausta">
        
        <div class="otsikko">
            <div class="dropdown">
                <span><img class="dropdownpic" src="graphics/menu2.png"></span>
              ,       <div class="dropdown-content">
                        <a href="frontpage.php">Home</a>
                        <a href="https://users.metropolia.fi/%7Ealeksr/nettisivu/asd">Profile</a>
                        <a href="https://users.metropolia.fi/%7Ealeksr/nettisivu/asd">Settings</a>
                        <a href="logout.php">Log out</a>
                    </div>
            </div>
            
            <div class="logo"><a href="frontpage.php" target="_self"><img src="graphics/logo.png" height="60em"></a></div>
            <img class="profiilikuva" src="graphics/profiilikuva.jpg">
            
            <div class="user">
             <?php
                if($_SESSION['loggedIn'] == "yes"){
                echo ("Logged in: " . $_SESSION['username2']). " " . $_SESSION['title'];
                } else {
                echo ("Vieras");
                }
                ?>
            </div>
            
        </div>

        <div class="tausta1">
            
            <div class="kuvannimi"><p class="normal">Kuvan nimi</p></div> 
            <div class="latausaika"><p class="normal">Latausaika</p></div> 
            <img class="clear kuva" src="kuvat/kuva.jpg">
            
            <div class="clear kayttajatunnus"><p class="normal">Käyttäjätunnus</p></div>
            <div class="kommentit"><p class="normal">Kommenttien lkm</p></div>
            <div class="arvostelu"><p class="normal">Arvostelut</p></div>
            
            <div class="hr"><hr></div>
            
            <div class="kuvannimi"><p class="normal">Kuvan nimi</p></div> 
            <div class="latausaika"><p class="normal">Latausaika</p></div> 
            
            <img class="kuva" src="kuvat/kuva2.jpg">
            
            <div class="kayttajatunnus"><p class="normal">Käyttäjätunnus</p></div>
            <div class="kommentit"><p class="normal">Kommenttien lkm</p></div>
            <div class="arvostelu"><p class="normal">Arvostelut</p></div>
            
            <div class="hr"><hr></div>
            
        </div>



    </div>

</body>
</html>