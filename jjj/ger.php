<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
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
 $name = $row['name'];
	$password = $row['password'];
    $num = $row["num"];   					
	$nation= $row['nation'];
	$gender = $row['gender'];
	$year= $row['year'];  
   $month = $row["month"];   					
	$day= $row['day'];
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
<body>
	<h3>Passanger1</h3>
<input type="text" name="name" value="<?php  echo $name; ?>" placeholder="full name"><br><br>
	  <input type="text" name="num" value="<?php  echo $num; ?>"><br><br>
	 Nationality
<select name="nation" value=""><option><?php  echo $nation; ?></option>
	<option>B</option>
	<option>C</option>
	<option>D</option>
	<option>E</option></select><br><br>
Gender
	 <select name="gender"><option><?php  echo $gender; ?></option>
	<option>Female</option></select><br><br>
	 
	DOB
	<select name="year"><option><?php  echo $year; ?></option>
	<option>2020</option></select>
	 <select name="month"><option><?php  echo $month; ?></option>
	<option>F</option></select>
	 <select name="day"><option><?php  echo $day; ?></option>
	<option>2</option></select><br><br>

	 <h3>Passanger2</h3>
 <form method="post" action="">
<input type="text" name="name_1"  placeholder="full name"><br><br>
	 Nationality
<select name="nation_1" ><option>A</option>
	<option>B</option>
	<option>C</option>
	<option>D</option>
	<option>E</option></select><br><br>
Gender
	 <select name="gender_1"><option>Male</option>
	<option>Female</option></select><br><br>
	 
	DOB
	<select name="year_1"><option>2002</option>
	<option>2020</option></select>
	 <select name="month_1"><option>h</option>
	<option>F</option></select>
	 <select name="day_1"><option>9</option>
	<option>2</option></select><br><br>
	 
	 <input type="submit" name="login" value="Proceed">
	 </from>
	<?php
	
	if(isset($_POST['login'])){

$d1=$_POST['name_1'];
$d2=$_POST['nation_1'];
$d3=$_POST['gender_1'];
$d4=$_POST['year_1'];
$d5=$_POST['month_1'];
$d6=$_POST['day_1'];


	
$insert = mysqli_query($connection,"UPDATE info SET name_1='$d1' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET nation_1='$d2' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET gender_1='$d3' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
				
		$insert = mysqli_query($connection,"UPDATE info SET year_1='$d4' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET month_1='$d5' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET day_1='$d6' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		echo "<script>alert('succefully');window.location.assign('tick.php')</script>";
	}
	?>
</body>
</html>