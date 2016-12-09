<!DOCTYPE html>
<html>
<?php
unset($_SESSION['viesti']);
include("iheader.php");
?>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->

    <title>Nettisivu</title>
    <link rel="stylesheet" type="text/css" href="styles/tyylit.css">
    <link rel="stylesheet" type="text/css" href="styles/dropdown.css">
    <link rel="stylesheet" type="text/css" href="styles/info.css">
</head>


<body>
<!--    <div class="otsikkowide"></div>-->
    <div class="infobackground">
        
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
		
        <div class="infobackground1">
            
            <div class="infocontent">
                
                <img class="deleteicon" src="graphics/delete.png">
                <div class="infoimagename">Image name</div>
                <div class="infodate">Date</div>
                
                <div class="infoimageframe">
                    <img class="infoimage" src=kuvat/kuva3.jpg>
                </div>
                
                <div class="infousername">Username</div>
                <div class="inforatings">
                    <div class="ratingsline">
                        <img class="ratingsminus" src="graphics/minus.png">
                        <div class="ratingsnumber">Rating: </div>
                        <img class="ratingsplus" src="graphics/plus.png">
                    </div>
                </div>
				
                <div class="infocomments">
                    <div class="commentsheader">COMMENTS</div>
                    
                    <form method="post">
                        <input type="text" name="comment" id="cmnt" placeholder="Write a comment" required>
                        <input type="submit" value="Post" name="submit">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>



























