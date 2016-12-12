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
					<!--<button type="button" onClick="localStorage.id=<?php echo(5);?>">Click</button>
					<button onclick="alert(sessionStorage.getItem('id'))">Check Session Value</button> -->
					<script>
					//var myPicture = sessionStorage.getItem('id'); 
					
									
					</script>
					<?php
					//print_r($picture1);
					//$picture2 = intval($picture1);
					//print_r($picture2);
					
					
					$datat['picture'] = $_GET['image'];
					//print_r($datat);
					try {
					$query1 = "SELECT ga_imgdata.url FROM ga_imgdata WHERE ga_imgdata.id = :picture";
					//print_r($query2);
		            $STH = $DBH->prepare($query1);
		            // print_r($STH);
		            $STH->execute($datat);
		          	$pictureurl = $STH->fetch();
		          	//print_r($pictureurl[0]);
					// print_r("asd");
                    }catch(PDOException $e) {
        			echo "Login DB error.";
        			file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", 				FILE_APPEND);
   					}
					
           			?>
			
					
                    <img class="infoimage" src="<?php echo("upload/uploads/$pictureurl[0]");?>">
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <!-- <script src="js/main.js"></script> -->
</body>
<script type="text/javascript">
//window.location.href.includes('?image=')
</script>
</html>



























