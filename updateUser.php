 <?php 
include_once("iheader.php");
    if(isset($_GET["save"])){ 
        
    $datat['birthdate'] = $_GET['birthdate'];
    $datat['country'] = $_GET['country'];
    $datat['phonenumber'] = $_GET['phonenumber'];
    $datat['profilepicurl'] = $_GET['profilepicurl'];
    $datat['username'] = $_SESSION['username2'];
        
    try {
        $stm = $DBH->prepare("UPDATE ga_users SET birthdate=:birthdate, country=:country, phonenumber=:phonenumber, profilepicurl=:profilepicurl WHERE username =:username");
        if($stm->execute($datat)){
            $_SESSION['birthdate'] = $datat['birthdate'];
            $_SESSION['country'] = $datat['country']; 
            $_SESSION['phonenumber'] = $datat['phonenumber'];
            $_SESSION['profilepicurl'] = $datat['profilepicurl'];
            $_SESSION['username2'] = $datat['username'];
            redirect("settings.php");
            }
        else {
            $_SESSION['viesti'] = "en voi hyvin1";
            redirect("settings.php");
            echo("testi3");
            }
        }
        catch(PDOException $e){
            $_SESSION['viesti'] = "Tietokantaongelma"; //$e->getMessage()")
            redirect("settings.php");
        }          
    }
    else {
        $_SESSION['viesti'] = "en voi hyvin2";
        echo ("error");
        redirect("settings.php");
    }    
?>
