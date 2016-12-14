<!DOCTYPE html>
<html>
<?php
include("iheader.php");
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Home - Imagnary</title>
    <link rel="stylesheet" type="text/css" href="styles/tyylit.css">
    <link rel="stylesheet" type="text/css" href="styles/dropdown.css">
    <link rel="stylesheet" type="text/css" href="styles/searchbar.css">
</head>

<body>
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
		
        <div class="tausta1">
            <div class="searchbar">
                <form>
                    <input type="text" name="search" placeholder="Search...">
                </form>
            </div>
            <?php
            if (isset($_GET['search'])){
            
            	if($_GET['search']){
            	$searchimg = $_GET['search'];
            	
            	$_SESSION['searchimg'] = $searchimg;
            	//print_r($searchimg);
            	$kysely2 = $DBH->prepare("SELECT * FROM ga_imgdata WHERE ga_imgdata.name LIKE '%$searchimg%'");
    			$kysely2->execute();
    			$searchresult = $kysely2->fetch(); 
    			//print_r($searchresult);
    			//print_r($searchresult[2]);
            	}
            
            ?>
            
            
            <?php
            
                if($mediat = getSearchResult($DBH)){
                    foreach($mediat as $media){
                    print_r($media->name);
                         
                    $datat = array('uploadaaja' => $media->id);                 
                    try {
                    
					$query1 = "SELECT ga_users.username FROM ga_users, ga_img, ga_imgdata WHERE ga_img.imgID=:uploadaaja AND ga_users.id = ga_img.uploaderID LIMIT 1";
		            $STH = $DBH->prepare($query1);
		            $STH->execute($datat);
		          	$uploader = $STH->fetch();         	
                    }catch(PDOException $e) {
        			echo "Login DB error.";
        			file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", 				FILE_APPEND);
   					}
   				
   				
   				//print_r($media->name);
   					
   					for ($x = 0; $x <= 10; $x++) {
   						if ($media->name == $searchresult[2]){
           			 ?>
            
            			<div class="content">
                		<div class="imagename"><?php echo($media->name); ?></div>
                		<div class="date"><?php echo($media->uploadtime); ?></div>
                
               			<div class="fimageframe">
                   		<a href= "info.php?image=<?php echo($media->id);?>">
                    	<img class="fimage" src="<?php 				echo("upload/uploads/$media->url");?>"></a>
                		</div>
                
                		<div class="username"><?php echo($uploader[0]);?></div>
                		<div class="comments">Comments: <?php 		echo($media->commentcount);?></div>
                		<div class="ratings">Rating: <?php echo($media->likes);?></div>
				
                	<?php
                	}
                }
                }
                 }else{
                       echo("No pictures found");
                 }
                ?>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
</body>
</html>