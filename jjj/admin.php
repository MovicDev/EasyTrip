
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<style>
	</style>
<body>
	<?php
	session_start();
	$num=$_SESSION['num'];
	$name=$_SESSION['name'];
$code=$_SESSION['code'];

	 include "connect.php";
	$sqli = "SELECT * from info";
			
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
				   	$p11 = $row['adult'];
				   $p12 = $row['child'];
	$p13 = $row['total'];
	$p14 = $row['adult_1'];
	 $p15 = $row['child_1'];
	$p16 = $row['total_1'];

				   
			   }
			   

?>
	

<?php 
if(isset($_POST['mit'])){
$p11=$_POST['adult'];
$p12=$_POST['child'];
$p14=$_POST['adult_1'];
$p15=$_POST['child_1'];
$p13=$_POST['total'];
$p16=$_POST['total_1'];
//$u_agree=$_POST['u_agree'];
 
$insert = mysqli_query($connection,"UPDATE info SET adult='$p11' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 

$insert = mysqli_query($connection,"UPDATE info SET child='$p12' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 




echo "<script>alert('succefully');window.location.assign('next.php')</script>";
}

		  ?>
	</body>
	</html?
		 