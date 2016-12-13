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
                echo '<script type="text/javascript">'; 
				echo 'alert("Welcome. You can log in now");'; 
				echo 'window.location.href = "index.php";';
				echo '</script>';
            } else {
                	echo '<script type="text/javascript">'; 
					echo 'alert("Something went wrong");'; 
					echo 'window.location.href = "index.php";';
					echo '</script>';
            }
        }
        catch(PDOException $e){
            	echo '<script type="text/javascript">'; 
				echo 'alert("Database error");'; 
				echo 'window.location.href = "index.php";';
				echo '</script>';
        }
        } else {
		echo '<script type="text/javascript">'; 
		echo 'alert("Bad email");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
	}
}

?>
