<?php
include "connect.php";
$id=$_REQUEST['id'];
$query = "SELECT * from cars where id='".$id."'"; 
$result = mysqli_query($connection, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="admin.php">Dashboard</a> 
<h1>Update Record</h1>
<?php

$status = "";
if(isset($_POST['submit']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
	$adult =$_REQUEST['adult'];
	$seat =$_REQUEST['seat'];
$update="update cars set  adult='".$adult."',seat='".$seat."' where id='".$id."'";
mysqli_query($connection,$update) or die(mysqli_error($connection));
$status = "Record Updated Successfully. </br></br>
<a href='admin.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
	
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
	<strong<p><input type="text" name="adult" placeholder="Update price" 
required value="<?php echo $row['adult'];?>" /></p></strong>
	<strong<p><input type="text" name="seat" placeholder="Update seat" 
required value="<?php echo $row['seat'];?>" /></p></strong>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
