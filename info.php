<!DOCTYPE html>
<html>
<?php
unset($_SESSION['viesti']);
include("iheader.php");
?>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->

    <title>Image - Imagnary</title>
    <link rel="stylesheet" type="text/css" href="styles/tyylit.css">
    <link rel="stylesheet" type="text/css" href="styles/dropdown.css">
    <link rel="stylesheet" type="text/css" href="styles/info.css">
</head>


<body>
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
            
            <div class="logo">
                <a href="frontpage.php" target="_self"><img src="graphics/logo.png" height="60em"></a>
            </div>
            
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
				<?php
                $mediat = getNewestMedia($DBH,5);
				?>
                
					<?php
					//print_r($picture1);
					//$picture2 = intval($picture1);
					//print_r($picture2);
					
					$pictureid = $_GET['image'];
					$datat['picture'] = $pictureid;
					//print_r($datat);
					try {
					$query1 = "SELECT url, name, uploadtime, likes, ga_users.username FROM ga_users, ga_imgdata, ga_img WHERE ga_imgdata.id = :picture AND ga_img.imgID = ga_imgdata.id AND uploaderID = ga_users.id";
					//print_r($query2);
		            $STH = $DBH->prepare($query1);
		            // print_r($STH);
		            $STH->execute($datat);
		          	$picturedata = $STH->fetch();
		          	//print_r($pictureurl[0]);
					// print_r("asd");
                    }catch(PDOException $e) {
        			echo "Login DB error.";
        			file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", 				FILE_APPEND);
   					}
					
           			?>
				<?php
				if ($picturedata[4] == $_SESSION['username2']){
					?>
					<a href= "delete.php?del=<?php echo("upload/uploads/$picturedata[0]");?>&image=<?php echo $_GET['image'];?>"
					onclick="if (!confirm('Are you sure?')) return false;">
					<img class="deleteicon" src="graphics/delete.png"></a>
					<?php
				}
				?>
				
                <div class="infoimagename"><?php echo("$picturedata[1]");?></div>
                <div class="infodate"><?php echo("$picturedata[2]");?></div>
                
                <div class="infoimageframe">
                    <img class="infoimage" src="<?php echo("upload/uploads/$picturedata[0]");?>">
                </div>
                
                <div class="infousername"><?php echo("$picturedata[4]");?></div>
				<?php
				//if ($_SESSION['ratedimage'] == $_GET['image']){
				?>
                <div class="inforatings">
                    <div class="ratingsline">
						<?php
						if ($_SESSION['ratedimage'] != $_GET['image']){
						?>
						<a href="#" id="dislike" class="dislike" onclick="this.style.display = 'none'">
                        <img class="ratingsminus" src="graphics/minus.png"></a>
						<?php
						}
						?>
						
                        <div class="ratingsnumber">Rating: <?php echo("$picturedata[3]");?></div>
						
						<?php
						if ($_SESSION['ratedimage'] != $_GET['image']){
						?>
						<a href="#" id="like" class="like">
						<img class="ratingsplus" src="graphics/plus.png"></a>
						<?php
						}
						?>
						
					<script>
					$(function(){
					$("a.dislike").click(function()
					{
					$.get("dislike.php?dislike=<?php echo $_GET['image'];?>");
					$("#dislike").css("visibility", "hidden");
					$("#like").css("visibility", "hidden");
					alert("Downvoted");
					return false; // prevent default browser refresh on "#" link
					});
					});
					$(function(){
					$("a.like").click(function()
					{
					$.get("like.php?like=<?php echo $_GET['image'];?>");
					$("#dislike").css("visibility", "hidden");
					$("#like").css("visibility", "hidden");
					alert("Upvoted");
					return false; // prevent default browser refresh on "#" link
					});
					});
					</script>
                    </div>
                </div>
				<?php
				//}
				?>
				
                <div class="infocomments">
                    <div class="commentsheader">COMMENTS</div>
                    
                    <form method="post">
                        <input type="text" name="comment" id="cmnt" placeholder="Write a comment" required>
                        <input type="submit" value="Post" name="submit">
                    </form>
                    
                    <div class="commentscontainer">
                        <div class="comment">asdasddass</div>
                        <div class="commentposter">asddas</div>
                        <img class="deletecomment" src="graphics/deletecomment.png">
                        <div class="commentdate">sadasd</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/main.js"></script> -->
</body>
<script type="text/javascript">
//window.location.href.includes('?image=')
</script>
</html>



























