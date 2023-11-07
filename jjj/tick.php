	<?php
	include "connect.php";
	$sqli = "SELECT * from admin";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					  $id = $row["id"];   					
					  $j1 = $row['seat'];
	
				   
		echo"	   
	
	<tr>

<td align='center' >
<form method='post' action='tick.php'><input type='text' name='id' value=".$id." ><button type='submit' name=''><img src='images/edit.png'></button></form>
</td>


</tr>";
			   }
?>
		<!--<td>
	<form method='post' action='tic.php'><input type='text' name='id' value="<?php echo $id; ?>" hidden><input type='button' name='id' value="<?php echo $j2; ?>"></form>
		</td><td>
	<form method='post' action='tic.php'><input type='text' name='id' value=".$id." hidden><input type='button' name='' value="<?php echo $j3; ?>"></form>
		</td><td>
	<form method='post' action='tic.php'><input type='text' name='id' value=".$id." hidden><input type='button' name='' value="<?php echo $j4; ?>"></form>
		</td><td>
<form method='post' action='tic.php'><input type='text' name='id' value=".$id." hidden><input type='button' name='' value="<?php echo $j5; ?>"></form>
		</td><td>
	<form method='post' action='tic.php'><input type='text' name='id' value=".$id." hidden><input type='button' name='' value="<?php echo $j6; ?>"></form>
		</td><td>
<form method='post' action='tic.php'><input type='text' name='id' value=".$id." hidden><input type='button' name='' value="<?php echo $j7; ?>"></form>
		</td><td>
	<form method='post' action='tic.php'><input type='text' name='id' value=".$id." hidden><input type='button' name='' value="<?php echo $j8; ?>"></form>
		</td><td>
<form method='post' action='tic.php'><input type='text' name='id' value=".$id." hidden><input type='button' name='' value="<?php echo $j9; ?>"></form>
		</td><td>
	<form method='post' action='tic.php'><input type='text' name='id' value=".$id." hidden><input type='button' name='' value="<?php echo $j10; ?>"></form>
		
</td></tr>
	</table>-->
		
	<?php

include "connect.php"; 


if(isset($_POST['submit'])){
$man=$_POST['id'];
$man=$_POST['jo'];

 $sqli = "SELECT * from admin where id='$id'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$id = $row["id"];   					
					  $j1 = $row['seat'];
					  }

	
	$j1=$mi;
	$mi='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat='$mi' WHERE id=1") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	
	$j1=$mi;
	$mi='BOOKED';
	$insert = mysqli_query($connection,"UPDATE admin SET seat='$mi' WHERE id=2") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	
}
		?>


</body>
</html>
