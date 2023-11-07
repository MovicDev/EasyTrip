<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		session_start();
	$num=$_SESSION['num'];
	$p6=$_SESSION['person'];
	$p7=$_SESSION['human'];
	
	include "connect.php";

	
	 $sqli = "SELECT * from info where num='$num'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
	 $id= $row['id'];
	 $code= $row['code'];
	$trip = $row['trip'];
	$trav = $row['trav'];
	$trato = $row['trato'];
	$joun = $row['joun'];
				   $time = $row['time'];
	 $back = $row['back'];
				   $arrive = $row['arrive'];
				   
	$p6 = $row['person'];
	$p7 = $row['human'];
    $p11 = $row['adult'];
	 $p12 = $row['child'];
	$p13 = $row['total'];
	$p14 = $row['adult_1'];
	$p15 = $row['child_1'];
	$p16 = $row['total_1'];
				   
			   }

	

	?>
	<h3>Departure Trip</h3>
	vechicle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Toyota Hiace  |  Ac bus | Video<br><br>
	passenger   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <?php   echo $p6;   ?>Adult(s) | <?php  echo $p7; ?>child(ren)<br><br>
	seat 
	<hr>
	<?php   echo $trav;   ?><br><br>#<?php   echo $p11;   ?><br>Adult(s)<br> Fees<br><br> 
	
<?php   echo $time;   ?><br><br>  <?php   echo $trato;   ?> <br>#<?php   echo $p12;   ?><br>child(ren)<br>Fees
	<br><br>
	
	TOTAL<br>
	#<?php   echo $p13;   ?>
	
	
	<h3>Return Trip</h3>
	vechicle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Toyota Hiace  |  Ac bus | Video<br><br>
	passenger   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <?php   echo $p6;   ?><br>Adult(s) | <?php  echo $p7; ?>child(ren)<br><br>
	seat 
	<hr>
	<?php   echo $trav;   ?><br><br>#<?php   echo $p14;   ?><br>Adult(s)<br> Fees<br><br> 
	
<?php   echo $arrive;   ?><br><br>  <?php   echo $trato;   ?> <br>#<?php   echo $p15;   ?><br>child(ren)<br>Fees
	<br><br>
	
	TOTAL<br>
	#<?php   echo $p16;   ?>
	
	
<form>
	<a href="ger3.php">	proceed</a>
	</form>
	
	
</body>
</html>