
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>

	</style>
<body><center>
	<form action="index.php" method="post">
	<h1>STAFF LOGIN</h1>
	<input type="text" name="num" placeholder="telephone"><br><br>
	<input type="submit" value="submit" name="submit">
		<br><br>
		if dont have an account with us <a href="reg.php">register</a>
		</form></center>
</body>
</html>
<?php
include "connect.php";

if (isset( $_POST['submit'])){
$num = $_POST['num'];

}

$id="";
if ( $num == "")
{

}

else 
{
$sqli = "SELECT * from info where num = '".$num."'";
$sqli2 = mysqli_query($connection,$sqli);

if (mysqli_affected_rows($connection) == 0)
{


echo "<br><br>"; 
echo "<center><font color='red'>please you are not a valid user</font></center>";
echo "<center> Please contact our administrator</center>";
echo "<center><a href = 'index.php' class='black' style='text-decoration:none'>Try Again</a></center>";

} 
else 
{
while($row = mysqli_fetch_array($sqli2))

{
$id = $row["id"];   					
					  $name=$row['name'];
$password=$row['password'];
$num=$row['num'];
$nation=$row['nation'];
$gender=$row['gender'];
$year=$row['year'];
$month=$row['month'];
$day=$row['day'];	
	



}

header("location:me.php");
}

	session_start();
	$_SESSION['num']=$num;
	$_SESSION['name']=$name;

}



?>


