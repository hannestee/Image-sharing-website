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
                echo ("aa");
                $_SESSION['username'] = $datat['username'];
                $_SESSION['email'] = $datat['email'];
                $_SESSION['country'] = $datat['country'];
                $_SESSION['viesti'] = "Voit kirjautua" . $_SESSION['email'];
                redirect("index.php");
            } else {
                $_SESSION['viesti'] = "en voi hyvin";
                echo ("eee");
                redirect("index.php");
            }
        }
        catch(PDOException $e){
            $_SESSION['viesti'] = "Tietokantaongelma"; //$e.getMessage()")
            redirect("index.php");
            echo ("sss");
        }
        } else {
            echo("Huono sähköposti");
            $_SESSION['viesti'] = "Väärä email";
            redirect("index.php");
    }
}

?>
