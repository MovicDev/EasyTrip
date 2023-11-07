 

<?php
include "connect.php";

if (isset( $_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
}

$id="";
if ($username != "$username" || $password != "$password")
{
echo "<br><br>";
echo "<center><font color='red'>please enter your Registration Number or password</font></center>";
echo "<h3 align='center'><a href='for.php'>Continue</a></h3>";
}

else 
{
$sqli = "SELECT * from adminlogin where username = '".$username."' && password = '".$password."'";
$sqli2 = mysqli_query($connection,$sqli);

if (mysqli_affected_rows($connection)== 0)
{
	 
echo "<script>('please you are not a valid user')</script>";

} 
else 
{
while($row = mysqli_fetch_array($sqli2))

{
$id = $row["s"]; 
$username=$row['username'];
$password=$row['password'];



}




header("location:admin.php");
}


}






?>
<a href="index.php"><input name="submit" value="Back" type="submit" style=" background: #8dbd56; color: aliceblue; width: 100px; height: 40px;align-items: center;font-size: 15px;; cursor: pointer;"></a>
<center>
<div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-sm-6">
	
          <form action="adminlog.php" method="post">
          <div class="form-group">
			  
          <h2><b>ADMIN LOGIN</b></h2><br>
            <label>Admin Username:</label><br>
            <input type="text" name="username"  placeholder="Enter Your email"  class="form-control" style="border-radius:10px 0px 10px 0px;" required/><br><br>

            <label>Password:</label><br>
			  
            <input type="password" name="password" placeholder="Enter Your password"  class="form-control " style="border-radius:10px 0px 10px 0px;" required/><br><br>

              <input name="submit" value="submit" type="submit" style=" background: #664a3f; color: aliceblue; width: 100px; height: 50px;align-items: center;font-size: 15px;; cursor: pointer;">
</div>
		</center>	  <style>

body{
background:#A09B9B;
	color: black;
	
}
		input{
			width: 350px;
			height: 50px;
			background: #FFFFFF ;
			
			border-radius: 10px;
		}
		
</style>
			  
		
