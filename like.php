<?php
include("iheader.php");

if ($_SESSION['loggedIn'] == "yes"){
	$imageid = $_GET['like'];
	$datat = array('like' => $imageid);
	
	try {
	$query1 = "UPDATE ga_imgdata SET likes= likes+1 WHERE ga_imgdata.id =:like";
	$STH = $DBH->prepare($query1);
	$STH->execute($datat);
    }catch(PDOException $e) {
    echo '<script type="text/javascript">';
	echo 'alert("Database error");';
	echo 'window.location.href = "frontpage.php";';
	echo '</script>';
   	}
	//redirect("info.php");
	$ratedimage = unserialize($_SESSION['ratedimage']);
	$ratedimage[] = $imageid;
	$_SESSION['ratedimage'] = serialize($ratedimage);
	}	
	else {
    echo '<script type="text/javascript">';
	echo 'alert("You aren\'t logged in");';
	echo 'window.location.href = "index.php";';
	echo '</script>';
}


