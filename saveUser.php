<?php

include_once("iheader.php");
if(isset($_POST["submit"])){
    $datat['username'] = $_POST['username'];
    $datat['email'] = $_POST['email'];    
    $datat['country'] = $_POST['country'];
    $datat['password'] = hash('sha256', $_POST['password']."ayy");
    if(filter_var($datat['email'], FILTER_VALIDATE_EMAIL)) { 
    try {
        $stm = $DBH->prepare("INSERT INTO ga_users (username, password, email, country, title) VALUES (:username, :password, :email, :country, 'Newbie')");
        if($stm->execute($datat)){
                $_SESSION['username'] = $datat['username'];
                $_SESSION['email'] = $datat['email'];
                $_SESSION['country'] = $datat['country'];
				$_SESSION['title'] = 'Newbie';
                $_SESSION['viesti'] = "Welcome, " . $_SESSION['username'] . ". You can log in now";
                redirect("index.php");
            } else {
                $_SESSION['viesti'] = "en voi hyvin";
                redirect("index.php");
            }
        }
        catch(PDOException $e){
            $_SESSION['viesti'] = "DB error"; //$e.getMessage()")
            redirect("index.php");
        }
        } else {
            echo("Bad email");
            $_SESSION['viesti'] = "Wrong email";
            redirect("index.php");
    }
}

?>
