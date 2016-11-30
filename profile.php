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
    <link rel="stylesheet" type="text/css" href="styles/profile.css">
</head>

    
<body>
    <div class="otsikkowide"></div>
    <div class="tausta">
        
        <div class="otsikko">
            <div class="dropdown">
                <span><img class="dropdownpic" src="graphics/menu2.png"></span>
                     <div class="dropdown-content">
                        <a href="frontpage.php">Home</a>
                        <a href="profile.php">Profile</a>
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
                echo ("Guest");
                }
                ?>
            </div>
            
        </div>
        
        <div class="backgroundhidden"></div>
        <div class="profilebackground">
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">asfsdfsd</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva2.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva4.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva5.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">asfsdfsd</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva2.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva4.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva5.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">asfsdfsd</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva2.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva4.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva5.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">asfsdfsd</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva2.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva4.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva5.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
            
            <div class="responsive">
                <div class="imageframe">
                    <img class="image" src="kuvat/kuva3.jpg">
                </div>
                <div class="imagedesc">strghsrtg</div>
            </div>
        </div>
    
    </div>
    
</body>
</html>    






















