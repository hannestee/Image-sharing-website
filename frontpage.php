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

    <title>Imagnary</title>
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
                        <a href="logout.php"><?php
                            if($_SESSION['loggedIn'] == "yes"){
                                echo ("Log out");
                    		} else {
                        		echo ("Register");
                            }
                        ?></a>
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
		
        <div class="tausta1">
            
            <?php
                if($mediat = getNewestMedia($DBH,5)){
                    foreach($mediat as $media){
                    
                    $datat = array('uploadaaja' => $media->id);                 
                    
                    try {
					$query1 = "SELECT ga_users.username FROM ga_users, ga_img, ga_imgdata WHERE ga_img.imgID=:uploadaaja AND ga_users.id = ga_img.uploaderID LIMIT 1";
					print_r($query2);
		            $STH = $DBH->prepare($query1);
		            print_r($STH2);
		            $STH->execute($datat);
					
		          	$uploader = $STH->fetch();         	
                    //HUOM -> notaatio, koska $media on OLIO sisältäen kuvan tiedot!!
                    //mediat on puolestaan taulukko näistä olioista
                    }catch(PDOException $e) {
        			echo "Login DB error.";
        			file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", 				FILE_APPEND);
   					}
            ?>
            
            <div class="content">
                <div class="imagename"><?php echo($media->name); ?></div>
                <div class="date"><?php echo($media->uploadtime); ?></div>
                
                <div class="fimageframe">
                   <a href="<?php echo("upload/uploads/$media->url");?>">
                    <img class="fimage" src="<?php echo("upload/uploads/$media->url");?>"></a>
                </div>
                
                <div class="username"><?php echo($uploader[0]);?></div>
                <div class="comments">Comments: <?php echo($media->commentcount);?></div>
                <div class="ratings">Rating: <?php echo($media->likes);?></div>
				<?php
                    }
                 }else{
                       echo("Haku meni plörinäks");
                 }

               ?>
            </div>
        </div>
    </div>
</body>
</html>





