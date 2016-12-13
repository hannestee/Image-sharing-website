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
	echo '<script type="text/javascript">'; 
	echo 'alert("Failed to delete the image");'; 
	echo 'window.location.href = "profile.php";';
	echo '</script>';
  }
else
  {
	$datat = array('deleteimg' => $_GET['image']);             
                    
    try {
	$query1 = "DELETE FROM ga_imgdata WHERE ga_imgdata.id=:deleteimg";
	$STH = $DBH->prepare($query1);
	$STH->execute($datat);	       	
    }catch(PDOException $e) {
    echo "Login DB error.";
    file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", 				FILE_APPEND);
   	}
	
	
	
	
  	echo '<script type="text/javascript">'; 
	echo 'alert("Image has been deleted");'; 
	echo 'window.location.href = "profile.php";';
	echo '</script>';
}
?> 
	
	
	                
