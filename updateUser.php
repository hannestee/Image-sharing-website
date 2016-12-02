 <?php 
include_once("iheader.php");
//if($_SESSION['loggedIn'] == ""){
    if(isset($_POST["save"])){
    echo("testi2");    
    $datat['birthdate'] = $_POST['birthdate'];
    //$datat['phonenumber'] = $_POST['phonenumber'];
    $datat['username'] = $_GET['username'];
    try {
        //$stm = $DBH->prepare("INSERT INTO ga_users (birthdate) VALUES (:birthdate)");
        $stm = $DBH->prepare("INSERT INTO ga_users SET birthdate= :birthdate WHERE username = :username");
        //$stm = $DBH->prepare("UPDATE ga_users SET phonenumber= :phonenumber WHERE username = :username");
        echo("testi1");
        if($stm->execute($datat)){
                echo ("aa");
                $_SESSION['username'] = $datat['username'];
                $_SESSION['birthdate'] = $datat['birthdate'];
                $_SESSION['country'] = $datat['country'];
                $_SESSION['phonenumber'] = $datat['phonenumber'];
                $_SESSION['title'] = $datat['title'];
                redirect("settings.php");
            } else {
                $_SESSION['viesti'] = "en voi hyvin";
                echo ("eee");
                redirect("settings.php");
            }
        }
        catch(PDOException $e){
            $_SESSION['viesti'] = "Tietokantaongelma"; //$e.getMessage()")
            redirect("settings.php");
            echo ("sss");
        }
    }
        
            else {
                $_SESSION['viesti'] = "en voi hyvin";
                echo ("error");
                redirect("settings.php");
            }    
?>
