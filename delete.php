<?php
include("iheader.php");

if ($_SESSION['loggedIn'] == "yes"){
	}else {
        echo '<script type="text/javascript">'; 
		echo 'alert("You aren\'t logged in");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
}


$file = $_GET['del'];
if (!unlink($file))
  {
	redirect("profile.php");
  }
else
  {
	$datat = array('deleteimg' => $_GET['image']);             
                    
    try {
	$query1 = "DELETE FROM ga_imgdata WHERE ga_imgdata.id=:deleteimg";
	$query2 = "DELETE FROM ga_img WHERE ga_img.imgID=:deleteimg";
	$query3 = "DELETE FROM ga_comments WHERE ga_comments.imgID=:deleteimg";
	$STH = $DBH->prepare($query1);
	$STH2 = $DBH->prepare($query2);
	$STH3 = $DBH->prepare($query3);
	$STH->execute($datat);
	$STH2->execute($datat);	  
	$STH3->execute($datat);	 	
    }catch(PDOException $e) {
    echo "DB error.";
    file_put_contents('log/DBErrors.txt', 'Del image: '.$e->getMessage()."\n", FILE_APPEND);
   	}

  	redirect("profile.php");
}
?> 
	
	
	                
