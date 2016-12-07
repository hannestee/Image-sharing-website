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
		
		<?php
            if($mediat = getNewestMedia($DBH,5)){
            foreach($mediat as $media){
			//HUOM -> notaatio, koska $media on OLIO sisältäen kuvan tiedot!!
			//mediat on puolestaan taulukko näistä olioista
        ?>
		
        <div class="tausta1">
            
            <div class="content">
                <div class="imagename"><?php echo($media->name); ?></div>
                <div class="date"><?php echo($media->uploadtime); ?></div>
                
                <div class="fimageframe">
                   <a href="<?php echo("upload/uploads/$media->url");?>">
                    <img class="fimage" src="<?php echo("upload/uploads/$media->url");?>"></a>
                </div>
                
                <div class="username">afregs</div>
                <div class="comments">arfera</div>
                <div class="ratings">gvgt</div>
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





