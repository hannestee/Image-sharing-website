<!DOCTYPE html>
<html>
<?php
include("iheader.php");
    
if($_SESSION['loggedIn'] == "yes"){
    redirect("settings.php");
    }  
?>    
       
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->

    <title>Nettisivu</title>
    <link rel="stylesheet" type="text/css" href="styles/tyylit.css">
    <link rel="stylesheet" type="text/css" href="styles/settingstyylit.css">
    <link rel="stylesheet" type="text/css" href="styles/dropdown.css">
</head>

    
<body>
<!--    <div class="otsikkowide"></div>-->
    <div class="settingstausta">
        
        <div class="settingsotsikko">
            <div class="dropdown">
                <span><img class="dropdownpic" src="graphics/menu2.png"></span>
                     <div class="dropdown-content">
                        <a href="frontpage.php">Home</a>
                        <a href="profile.php">Profile</a>
                        <a href="settings.php">Settings</a>
                        <a href="logout.php">Log out</a>
                    </div>
            </div>
            
            <div class="logo">
                <a href="frontpage.php" target="_self">
                <img src="graphics/logo.png" height="60em">
                </a>
            </div>
                <img class="profiilikuva" src="graphics/profiilikuva.jpg">
            
            <div class="user">
                <p class="loggedin">
                <?php
                if($_SESSION['loggedIn'] == "yes"){
                    echo ("Logged in: " . $_SESSION['username2']). "  [" . $_SESSION['title']. "]" ;
                } else {
                    echo ("Guest");
                }
            ?>
            </p>
            </div>  
        </div>

        <div class="settingstausta1">
            
            <img class="settingsimage" src="graphics/settings2.jpg">   
            <div class="settingssisalto">
                <p class="settingsheader">SETTINGS</p>
            
                <a href="index.php" style="text-decoration: none">    
                <input class="login" style="width: 13em; height: 87px; padding 2em" name="login" value="Login" type="submit"></a>
                
                <a href="index.php" style="text-decoration: none">    
                <input class="login" style="width: 13em; height: 87px" name="login" value="Register" type="submit"></a>
                
                <div class="infosisalto">
                    <p class="settingsheader" style="margin-top: 27.6em">USER INFO</p>
                    <p class="info">Username: Guest</p>
                    
                </div>    
                
            </div> 
        </div>
    </div>
</body>  
</html>
