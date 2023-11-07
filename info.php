<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
body{
background:#E3DDDD;
	color: black;
	
}
h1{
color:black;
}
	th{
		background: #6998AB;
			text-align: center;
			height: 70px;
			color: black;
	}
		td{
			color: black;
		}
	a button{
			height: 50px;
			background:#6998AB;
			color: #ffffff;
			position: relative;
			top: 20px;
			left: 20px;
			cursor: pointer;
		}
	</style>
<body>
	<a href="admin.php"><button type="button"><i class="fas fa-arrow-left"></i>&nbsp;BACK</button></a>
<br><br><br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th align="center"><strong>S.No</strong></th>
<th  align="center"><strong>NAME</strong></th>
<th align="center"><strong>NAME_1</strong></th>
	<th align="center"><strong>NAME_2</strong></th>
	<th align="center"><strong>NAME_3</strong></th>
	<th align="center"><strong>FROM</strong></th>
	<th align="center"><strong>TO</strong></th>
	<th align="center"><strong>DATE</strong></th>
	<th align="center"><strong>TIME</strong></th>
	<th align="center"><strong>SEATS</strong></th>
	<th align="center"><strong>PRICE</strong></th>
<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
	<th align="center"><strong>PAYMENT PROVF</strong></th>
</tr>
</thead>
<tbody>
<?php
	
$x=1;


include "connect.php";

     $sqli = "SELECT * from info";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
$num=$row['num'];
				   $name=$row['name'];
				  $code=$row['code'];
				   $id=$row['id'];
	$name_1 = $row['name_1'];  					
	$name_2= $row['name_2'];
	$name_3 = $row['name_3'];
	$trav= $row['trav'];  
   $trato = $row["trato"];   					
	$time= $row['time'];
	$seat = $row['seat'];
	$total = $row['total'];
	$status = $row['status'];
				   $joun = $row['joun'];

                              
					 
				   echo"
<tr>
<td align='center'>".$x++."</td>
<td align='center' style='color:black;'><strong>".$name."</strong></td>
<td align='center'><strong>$name_1</strong></td>
<td align='center'><strong>".$name_2."</strong></td>
<td align='center'><strong>".$name_3."</strong></td>
<td align='center'><strong>".$trav."</strong></td>
<td align='center'><strong>".$trato."</strong></td>
<td align='center'><strong>".$joun."</strong></td>
<td align='center'><strong>".$time."</strong></td>
<td align='center'><strong>".$seat."</strong></td>
<td align='center'><strong>".$total."</strong></td>
<td align='center' >
<form method='post' action='ki.php'><input type='hidden' name='id' value=".$id." ><button type='submit' name='' style=' background: #6998AB; color: aliceblue; width: 100px; height: 50px;align-items: center;font-size: 15px; cursor: pointer;'>".$status."</button></form>
</td>

	";
				   
echo '<td align="center"><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"  class="img-thumbnail"</td></tr>';
				   	session_start();
				    $_SESSION['name']=$name;
	}
	

	
					  
					   
	
	
	?>
	

	
</tbody>
</table>
</div>
		</div></div></div>
	</div>
		</div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>

	<script src="js/typed.js"></script>
</body>
</html>