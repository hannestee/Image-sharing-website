<?php
include("iheader.php");

if ($_SESSION['loggedIn'] == "yes"){
	
	//$comment = $_GET['del'];

	$datat = array('deletecomment' => $_GET['del']);  
	$datat2 = array('picID' =>	$_GET['image']);
                    
	
	try {
	$query1 = "DELETE FROM ga_comments WHERE ga_comments.commentID=:deletecomment";
	$query2 = "UPDATE ga_imgdata SET commentcount= commentcount-1 WHERE ga_imgdata.id =:picID";
	$STH = $DBH->prepare($query1);
	$STH2 = $DBH->prepare($query2);
	$STH->execute($datat);	     
	$STH2->execute($datat2);	   	
    }catch(PDOException $e) {
    echo "DB error.";
    file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", 				FILE_APPEND);
   	}
	redirect("info.php?image=".$_SESSION["imageid"]);
	
	}else {
        echo '<script type="text/javascript">'; 
		echo 'alert("You aren\'t logged in");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
}

?> 
	
	
	                