<?php
require_once("config/config.php");
include("iheader.php");


if ($_SESSION['loggedIn'] = "yes"){
    $_SESSION['loggedIn'] = "no";
    session_destroy();
    redirect("index.php");
}
?>

