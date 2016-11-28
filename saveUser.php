<?php
include_once("includes/iheader.php");
if(isset($_POST["save"])) {
    $datat['username'] = $_POST['username'];
    $datat['email'] = $_POST['email'];
    $datat['country'] = $_POST['country'];
    $datat['password'] = hash('sha256', $_POST['password']. "abc");
    
    if(filter_var($_datat['email'], FILTER_VALIDATE_EMAIL)) {
        try {
            $stm = $DBH->prepare("INSERT INTO ga_Kayttajatiedot (Kayttajanimi, Salasana, Sposti, Maa) VALUES (:username, :password, :email, :country)");
            if($stm->execute($datat)){
                $_SESSION['name'] = $datat['name'];
                $_SESSION['email'] = $datat['email'];
                $_SESSION['country'] = $datat['country'];
                $_SESSION['viesti'] = "OK - nyt voit kirjautua " . $_SESSION['email'];
                redirect("index.php");
            } else {
                $_SESSION['viesti'] = "Rekisteröityminen ei onnistu";
                redirect("index.php");
            }
        } catch(PDOException $e){
            $_SESSION['viesti'] = "Tietokantaongelma";
            redirect("index.php");
        }
    } else {
        $_SESSION['virhe'] = "Väärä email";
        redirect("index.php");
    }
}
?>