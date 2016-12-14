<?php

include_once("iheader.php");
if(isset($_POST["submit"])){
	
    try {
	$query1 = "INSERT INTO ga_comments (commentor, commenttext, imgID, commentdate) VALUES (:commentor, :comment, :imgID, NOW())";
	$STH = $DBH->prepare($query1);
	$STH->execute(array(
		"commentor" => $_SESSION['username2'],
		"comment" => $_POST['comment'],
		"imgID" => $_SESSION["imageid"]
	));
    }catch(PDOException $e) {
        echo "Login DB error.";
        file_put_contents('log/DBErrors.txt', 'Login: '.$e->getMessage()."\n", 									FILE_APPEND);
	}
	echo '<script type="text/javascript">'; 
	echo 'alert("Thank you for your comment");'; 
	echo 'window.location.href = "frontpage.php";';
	echo '</script>';
}