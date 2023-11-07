<style>
	
a button{
			height: 50px;
			background:#6998AB;
			color: #ffffff;
			position: relative;
			top: 20px;
			left: 20px;
			cursor: pointer;
		}
	button{
			height: 50px;
			background:#6998AB;
			color: #ffffff;
			position: relative;
			bottom: 50px;
			left: 200px;
		width: 100px;
			cursor: pointer;
		border-radius: 10px;
		}
	</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<a href="logout.php"><button type="button"><i class="fas fa-arrow-left"></i>&nbsp;LOGOUT</button></a><br><br>
	              <center><strong>NOTE:</strong><br>
					  <font color="red"><strong>SELECT YOUR VEHICLE OF YOUR CHIOCE</strong></font></center>
<?php
	include "connect.php";
	
	session_start();
	$num=$_SESSION['num'];
	$name=$_SESSION['name'];
$code=$_SESSION['code'];
$p6=$_SESSION['person'];
	$p14=$_SESSION['adult_1'];
	$p15=$_SESSION['child_1'];

	
	$sqli = "SELECT * from info where num='$num'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
					{
				    $num=$row['num'];
				   $name=$row['name'];
				  $code=$row['code'];
				   $id=$row['id'];
	$password = $row['password'];  					
	$nation= $row['nation'];
	$gender = $row['gender'];
	$year= $row['year'];  
   $month = $row["month"];   					
	$day= $row['day'];
	$p1 = $row['trip'];
	$p2 = $row['trav'];
	$p3 = $row['trato'];
	$p4 = $row['joun'];
	 $p5 = $row['back'];
	$p6 = $row['person'];
	$p7 = $row['human'];
				   $p11=$row['adult'];
	$p12=$row['child'];
	$p14=$row['adult_1'];
	$p15=$row['child_1'];

			   }
		

?>
                                    
<div class="bod">
<?php
session_start();
$cod=$_SESSION['ider'];
	
	$_SESSION['num']=$num;
	$_SESSION['name']=$name;
$_SESSION['code']=$code;
$_SESSION['car']=$nan;
$_SESSION['total']=$price;
	$_SESSION['seat']=$seat;
	$_SESSION['jup']=$jup;
	$_SESSION['top']=$top;
	$_SESSION['code']=$code;
include "connect.php";
	 $sqli = "SELECT * from cars";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					
					  $id = $row["id"];   					
$name=$row['name'];
$adult=$row['adult'];
$jup=$row['jup'];
$top=$row['top'];
$about=$row['about'];
$seat=$row['seat'];
$status=$row['status'];
 $wee='Uploads/'.$row['image'];
					 
	
				   echo"
				 <div class='joy'>
				   <form method='post' action='me.php' enctype='multipart/form-data'>
		
<center><i><b> ".$name."</b></i><center>
<img src=".'Uploads/'.$row['image']."><br>
<div class='be'><strong>$jup &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;   $top</strong></div>
 <input type='hidden' name='seat' value='$seat'>
<h3>One Trip</h3>
 <strong>Price:$".$adult."</strong>
 <input type='text' name='id' value=".$id." hidden><button type='submit' name='submit' style='cursor: pointer;'>BOOK</button></form>
  <input type='hidden' name='price' value='$adult'><br><br>

<input type='hidden' name='code' value='$code'>


 
</form>
	</div>
		";
				   	  
				 
	}
			
			
	
	?>



</div>

</form>
	  <style>
		  body{
			background:#FFFFFF;
			  color: black;
		  }
		  i{
			  font-size: 40px;
			  
		  }
		  img{
			  
			  width: 345px;
			  height: 200px;
			   
			  
			  
		  }
		  
		  .user{
			 color: red;
		  }
		  	.bod{
		display: flex;
		justify-content: center;
		flex-wrap: wrap;
		min-height: 100px;
				color:black;
			
	
				
	}
		  .be{
			  background: #000000;
			  opacity: 0.6;
			  width: 345px;
			  height: 40px;
			  color: aliceblue;
			  position: relative;
			  bottom: 40px;
			 font-size: 22px;
			
		  }
		  fieldset{
			  position: relative;
			  bottom: 40px;
			
			
		  }
	  button{
			
			  cursor: pointer;
		  }
		
		  form{
		width: 150px;
		height: 150px;
		padding: 15px;
		
			
	}
		  
		  .user{
			  color:red;
		  }
		  .joy{
			  width: 380px;
			  height: 350px;
			  background:#D7D1D1;
			  margin-top: 30px;
			  margin-left: 30px;
			  border-radius: 10px;
		  }
</style>


</body>
</html>
<?php
	include "connect.php";
	
	session_start();
	$num=$_SESSION['num'];
	$name=$_SESSION['name'];
$code=$_SESSION['code'];
$nan=$_SESSION['car'];
$price=$_SESSION['total'];
	
	$sqli = "SELECT * from info where num='$num'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
					{
				    $num=$row['num'];
				   $name=$row['name'];
				  $code=$row['code'];
				   $id=$row['id'];
	$password = $row['password'];  					
	$nation= $row['nation'];
	$gender = $row['gender'];
	$year= $row['year'];  
   $month = $row["month"];   					
	$day= $row['day'];
	$p1 = $row['trip'];
	$p2 = $row['trav'];
	$p3 = $row['trato'];
	$p4 = $row['joun'];
	 $p5 = $row['back'];
	$p6 = $row['person'];
	$p7 = $row['human'];
    $p11=$row['adult'];
	$p12=$row['child'];
	$p14=$row['adult_1'];
	$p15=$row['child_1'];

				
			   }
			   

?>


	  