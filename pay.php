<?php
include "connect.php";
$id=$_REQUEST['id'];
$sqli = "SELECT * from  info where id='$id' ";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
			$name=$row['name'];
				  $code=$row['code'];
				   $id=$row['id'];
	$name_1 = $row['name_1'];  					
	$name_2= $row['name_2'];
	$name_3 = $row['name_3'];
	$trav= $row['trav'];  
   $trato = $row["trato"];   					
	$time= $row['time'];
	$car = $row['car'];
	$seat = $row['seat'];
	$total = $row['total'];
	$status = $row['status'];
				   $joun = $row['joun'];
					   }
					 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title</title>
<link rel="stylesheet" href="css/style.css" />
</head>
	<style>
		form{
			background: #BFBABA;
			width: 400px;
			height: 300px;
			border-radius: 10px;
		
			
		}
	
	
	
	</style>
<body>
<?php

if(isset($_POST['submit']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
	$image =$_REQUEST['image'];
$update="update info set  image='".$image."' where id='$id' ";
mysqli_query($connection,$update) or die(mysqli_error($connection));

echo "<script>alert('prof Sent');window.location.assign('payment.php')</script>";
}else {
?>
<div>
	<div class="jop">
		<center>
			<p style="color: red; position: relative; top: 40px;"><strong>click on choose file</strong></p>
		<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $id;?>" />
	<strong<p><input type="file" name="image" placeholder="Update price" 
required value="" style="position: relative; top: 50px; background: transparent; border: 1px solid #6998AB;"/></p></strong>

<p><input name="submit" type="submit" value="Send" style="width: 100px; height: 50px; background: #6998AB; position: relative; top: 100px; cursor: pointer; color: white;" /></p>
</form>
	</center>
<?php } ?>
</div>
	</div>

</div>
</body>
</html>
