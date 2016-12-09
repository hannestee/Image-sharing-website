 <?php 
include_once("iheader.php");
    if(isset($_GET["save"])){  
    $datat['birthdate'] = $_GET['birthdate'];
    $datat['country'] = $_GET['country'];
    $datat['phonenumber'] = $_GET['phonenumber'];
    $datat['username'] = $_SESSION['username2'];
    try {
        
        $stm = $DBH->prepare("UPDATE ga_users SET birthdate=:birthdate, country=:country, phonenumber=:phonenumber WHERE username =:username");
        if($stm->execute($datat)){
                //if(isset($_GET["country"])){  
                $_SESSION['birthdate'] = $datat['birthdate'];
                //}
                //if(isset($_GET["country"])){  
                $_SESSION['country'] = $datat['country']; 
                //}
                //if(isset($_GET["phonenumber"])){ 
                $_SESSION['phonenumber'] = $datat['phonenumber'];
                //}
            redirect("settings.php");
            }
        else {
                $_SESSION['viesti'] = "en voi hyvin1";
                //redirect("settings.php");
            echo("testi3");
            }
    }
        catch(PDOException $e){
            $_SESSION['viesti'] = "Tietokantaongelma"; //$e->getMessage()")
            //redirect("settings.php");
            print_r($e);
        }          
    }
            else {
                $_SESSION['viesti'] = "en voi hyvin2";
                echo ("error");
                //redirect("settings.php");
            }    
?>

