<?php

include "connect.php"; 


if(isset($_POST['submit'])){
$man=$_POST['id'];
	


 $sqli = "SELECT * from admin where id='$id'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$id = $row["id"];   					
					  $j1 = $row['seat_1'];
					  $j2 = $row['seat_2'];
				   $j3= $row['seat_3'];
				   $j4= $row['seat_4'];
				   $j5= $row['seat_5'];
				   $j6= $row['seat_6'];
					 $j7=$row['seat_7'];
				   $j8=$row['seat_8'];
				   $j9=$row['seat_9'];
				   $j10=$row['seat_10'];
					  
				   
					  }

	
	$j1=$mi;
	$mi='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_1='$mi' WHERE id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	
	$j2=$mio;
	$mio='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_2='$mio' where  id='$j2'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$j3=$mio;
	$mio='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_3='$mio' where  id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$j4=$mio;
	$mio='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_4='$mio' where  id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$j5=$mio;
	$mio='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_5='$mio' where  id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$j6=$mio;
	$mio='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_6='$mio' where  id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$j7=$mio;
	$mio='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_7='$mio' where  id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$j8=$mio;
	$mio='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_8='$mio' where  id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	

	$j9=$mio;
	$mio='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_9='$mio' where  id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$j10=$mio;
	$mio='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat_10='$mio' where  id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 

	
}
		?>
