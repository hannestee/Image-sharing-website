<?php

include_once("iheader.php");
if(isset($_POST["submit"]) && $_SESSION['loggedIn'] == "yes"){
	
    try {
	$query1 = "INSERT INTO ga_comments (commentor, commenttext, imgID, commentdate) VALUES (:commentor, :comment, :imgID, NOW())";
	$query2 = "UPDATE ga_imgdata SET commentcount= commentcount+1 WHERE ga_imgdata.id =:imgID";
	$STH = $DBH->prepare($query1);
	$STH2 = $DBH->prepare($query2);
	$STH->execute(array(
		"commentor" => $_SESSION['username2'],
		"comment" => $_POST['comment'],
		"imgID" => $_SESSION["imageid"]
	));
	$STH2->execute(array(
		"imgID" => $_SESSION["imageid"]
	));
    }catch(PDOException $e) {
        echo "Login DB error.";
        file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", 									FILE_APPEND);
	}
	redirect("info.php?image=".$_SESSION["imageid"]);
	
}	else {
	echo '<script type="text/javascript">';
	echo 'alert("You aren\'t logged in");';
	echo 'window.location.href = "index.php";';
	echo '</script>';
}