<?php
/* Log out process, unsets and destroys session variables */
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("location:index.php");

?>
