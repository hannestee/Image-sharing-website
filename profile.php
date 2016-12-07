<!DOCTYPE html>
<html>
<?php
unset($_SESSION['viesti']);
include("iheader.php");
    
if($_SESSION['loggedIn'] == "yes")  {
    }else {
        redirect("index.php");
    }    
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
                        <a href="settings.php">Settings</a>
                        <a href="logout.php">Log out</a>
                    </div>
            </div>
            
            <div class="logo"><a href="frontpage.php" target="_self"><img src="graphics/logo.png" height="60em"></a></div>
            <a href="profile.php" target="_self"><img class="profiilikuva" src="graphics/profiilikuva.jpg"></a>
            
            <div class="user">
            <p class="loggedin">
            <?php
                if($_SESSION['loggedIn'] == "yes"){
                    echo ("Logged in: " . $_SESSION['username2']). " [" . $_SESSION['title'] ."]";
                } else {
                    echo ("Guest");
                }
            ?>
            </p>
            </div>
            
        </div>
        
        <div class="backgroundhidden"></div>
        <div class="profilebackground">
            <div class="profileinfo">
                <img class="profilepic" src="graphics/profiilikuva.jpg">
                
                <div class="infosisalto">
                    <p class="info">
                    <?php
                        function ageCalculator($dob){
                            if(!empty($dob)){
                                $birthdate = new DateTime($dob);
                                $today   = new DateTime('today');
                                $age = $birthdate->diff($today)->y;
                                return $age;
                            }else{
                                return 0;
                            }
                        }
                        $dob = $_SESSION['birthdate'];
        
                        if($_SESSION['loggedIn'] == "yes"){
                            echo nl2br ("Username: " . $_SESSION['username2'] ."\n"."\n");
                            echo nl2br ("Title: " . $_SESSION['title'] ."\n"."\n");
                            echo nl2br ("Country: " . $_SESSION['country']. "\n"."\n");
                            echo nl2br ("Age: " . ageCalculator($dob). "\n"."\n");  
                        } else {
                            echo ("Username: Guest");
                        }
                       ?> 
                    </p>
                </div>
                
                <div class="upload">
                    <form action="upload/up.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="fileToUpload" id="fileToUpload">
						<input type="text" name="imgName" id="imageName" placeholder="Image name" required>
                        <input type="submit" value="Upload image" name="submit">
                    </form>
                </div>
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

