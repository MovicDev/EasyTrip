<?php
include "connect.php";
$id=$_REQUEST['id'];
$query = "DELETE FROM cars WHERE id='$id'"; 
$result = mysqli_query($connection,$query) or die ( mysqli_error());
header("Location: admin.php"); 
?>
