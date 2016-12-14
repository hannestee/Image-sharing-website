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
	redirect("info.php?image=".$imageid);
   	}
	//redirect("info.php");
	$ratedimage = unserialize($_SESSION['ratedimage']);
	$ratedimage[] = $imageid;
	$_SESSION['ratedimage'] = serialize($ratedimage);
	
	redirect("info.php?image=".$imageid);
	
	}	
	else {
	redirect("info.php?image=".$imageid);
}


