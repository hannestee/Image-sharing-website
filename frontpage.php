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
<!--    <div class="otsikkowide"></div>-->
    <div class="tausta">
        
        <div class="otsikko">
            <div class="dropdown">
                <span><img class="dropdownpic" src="graphics/menu2.png"></span>
                     <div class="dropdown-content">
                        <a href="frontpage.php">Home</a>
                        <a href="profile.php">Profile</a>
                        <a href="settings.php">Settings</a>
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
            
            <div class="content">
                <div class="imagename">asdsad</div>
                <div class="date">asdasasdfsdgdgdffr</div>
                
                <div class="fimageframe">
                    <img class="fimage" src="kuvat/kuva2.jpg">
                </div>
                
                <div class="username">afregs</div>
                <div class="comments">arfera</div>
                <div class="ratings">gvgt</div>
            </div>
            
            <div class="content">
                <div class="imagename">asdsad</div>
                <div class="date">asdasasdfsdgdgdffr</div>
                
                <div class="fimageframe">
                    <img class="fimage" src="kuvat/kuva4.jpg">
                </div>
                
                <div class="username">afregs</div>
                <div class="comments">arfera</div>
                <div class="ratings">gvgt</div>
            </div>
            
            <div class="content">
                <div class="imagename">asdsad</div>
                <div class="date">asdasasdfsdgdgdffr</div>
                
                <div class="fimageframe">
                    <img class="fimage" src="kuvat/kuva5.jpg">
                </div>
                
                <div class="username">afregs</div>
                <div class="comments">arfera</div>
                <div class="ratings">gvgt</div>
            </div>
            
        </div>
    </div>
</body>
</html>





















