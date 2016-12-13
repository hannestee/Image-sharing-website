<!DOCTYPE html>
<html class="no-js" lang="">
<?php
unset($_SESSION['viesti']);
include("iheader.php");
    
if($_SESSION['loggedIn'] == "yes")  {
    }else {
echo '<script type="text/javascript">'; 
echo 'alert("You aren\'t logged in");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
    }    
?>
    
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->

    <title>Profile - Imagnary</title>
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
            
            <a href="profile.php" target="_self" class="profiilikuva">
                <?php
                    if(empty($_SESSION['profilepicurl'])){
                        echo '<img src="graphics/profiilikuva.jpg" width="104px" height="104px">';
                    } else {
                        echo '<img src='.$_SESSION['profilepicurl'].' width="104px" height="104px">';
                    }
                    ?>
            </a>
            
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
                <div class="profilepic">
                    <?php
                    if(empty($_SESSION['profilepicurl'])){
                            echo '<img src="graphics/profiilikuva.jpg" width="320px" height="320px">';
                        } else {
                            echo '<img src='.$_SESSION['profilepicurl'].' width="320px" height="320px">';
                            }
                    ?>
                </div>
                
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
                                return "-";
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
						<input type="text" name="imgName" id="imageName" placeholder="Insert image name" required>
                        <input type="submit" value="Upload image" name="submit">
                    </form>
                </div>
                

            
            </div>
                    <?php
                	if($mediat = getNewestMedia($DBH,5)){
                    foreach($mediat as $media){
                    
                    $datat = array('uploadaaja' => $media->id);                 
                    
                    try {
					$query1 = "SELECT ga_users.username FROM ga_users, ga_img, ga_imgdata WHERE ga_img.imgID=:uploadaaja AND ga_users.id = ga_img.uploaderID LIMIT 1";
					//print_r($query2);
		            $STH = $DBH->prepare($query1);
		            //print_r($STH2);
		            $STH->execute($datat);
					
		          	$uploader = $STH->fetch();   
		          	//print_r($uploader);      	
                    //HUOM -> notaatio, koska $media on OLIO sisältäen kuvan tiedot!!
                    //mediat on puolestaan taulukko näistä olioista
                    }catch(PDOException $e) {
        			echo "Login DB error.";
        			file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", 				FILE_APPEND);
   					}
           			?>    
<?php
                	if ($uploader[0] == $_SESSION['username2']){ ?>
            <div class="responsive">
            
                <div class="imageframe">
                	<a class="imagelink" href= "info.php?image=<?php echo($media->id);?>">
                    <img class="image" src="<?php echo("upload/uploads/$media->url");?>">
                    </a>
                </div>	
                <div class="imagedesc"><?php echo($media->name); ?></div>
            </div>
            		<?php
            		} 
            		?>
            <?php
                }
                 }else{
                       echo("No pictures found");
                } 
            ?>
        </div>
    
    </div>
    <!-- <script src="main.js"></script> -->
</body>
</html>    

