<?php
session_start();
require_once("config/config.php");


echo $_SESSION['viesti'];

if($_SESSION['loggedIn'] == "yes"){
    echo ("Logged in: " . $_SESSION['username2']). " " . $_SESSION['email'];
    ?>
    <a href = "logout.php">Logout</a>
    <?php
} else {
?>    
<a href= "index.php">Register or log in</a>
<?php
}
include ("kayttajamaara.php");
?>