<?php

include "connect.php"; 


if(isset($_POST['id'])){
$man=$_POST['id'];	


 $sqli = "SELECT * from info where name='$name'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					 $id = $row["id"];   					
					  $name = $row['name'];
					 $status=$row['status'];
					  
				   
					  }
	
	$status=$mio;
	$mio='Approved';
	$insert = mysqli_query($connection,"UPDATE info SET status='$mio' where  id='$man'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	header("location:info.php");
	
	
	
}
		?>