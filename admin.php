<?php 
include "ad.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<title>Untitled Document</title>
</head>
<style type="text/css">
body{
background:#E3DDDD;
	color: black;
	
}
h1{
color:black;
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
	 .cont{
		background:#ffffff;
		 box-shadow: 1px gray;
		 background: #6998AB;
		 height: 300px;
		 padding-top: 50px;
	
	}
</style>
<body>
	<a href="info.php"><button type="button"><i class="fas fa-arrow-left"></i>&nbsp;CLIENT INFO</button></a><br><br>
<center>
<h1>INSERT AVALIABLE CARS</h1><br>
<div>
<?php echo $err5 ;?>
                <?php  echo $er;?>
				<?php  echo $accpt_err;?>
				<?php  echo $chk; ?>
         </div>
		 <form method="post" action="" enctype="multipart/form-data" />
	<div class="container cont">
		
		<div class="row">
		<div class="col">
			
			</div>
			<div class="col">
			<strong style="color: aliceblue;">Insert vehicles</strong>
			</div>
		
		</div>
		
		<div class="form-group">
		<div class="row">
			<div class="col"><input name="name" type="text"  placeholder="NAME OF THE CARS" class="form-control"/></div>
<div class="col">
<input name="image"  id="image" value="" type="file" class="form-control"/></div>
	</div>
</div>
		<br>
		
		
		<div class="form-group">
		<div class="row">
			<div class="col">
				<input name="adult" type="text" placeholder="TRANSPORT PRICE" class="form-control"/></div>
			<div class="col">
			<input name="jup" type="text" placeholder="TRIP FROM" class="form-control"/></div></div></div><br>
		
		
				<div class="form-group">
	<div class="row">
			<div class="col">
				<input name="top" type="text" placeholder="TRIP TOO" class="form-control"/></div>
		<div class="col">
		<input name="seat" type="number" placeholder="HOW MANY SEAT ARE YOU BOOKING" class="form-control"/></div></div>
		</div>
	
		
	</div><br>
<input name="status" type="hidden" placeholder="status" value="admin" readonly="admin"/>
 <input name="sub" value="INSERT" type="submit" style="color:#FFFFFF; background:#6998AB; border-radius:5px; height: 50px; width:150px; cursor: pointer;">
	
	
	
	
</form>

	</center>
</body>
</html>
<script>
$(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>



	<style>


		body{
background:#FFFFFFF;
	color: #000000;
	
}

		th{
		background:#6998AB;
			text-align: center;
			height: 70px;
			color: black;
	}
		td{
			color: black;
		}
		img{
			width: 150px;
			height: 150px;
		}
		h2{
			color:black;
		}
		a{
			color: black;
		}
	</style>
<body>
<br><br><br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th align="center"><strong>S.No</strong></th>
<th  align="center"><strong>Name</strong></th>
<th align="center"><strong>cars</strong></th>
	<th align="center"><strong>price</strong></th>
	<th align="center"><strong>FROM</strong></th>
	<th align="center"><strong>TO</strong></th>
	<th align="center"><strong>SEATS</strong></th>
<th colspan="2" data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
</tr>
</thead>
<tbody>
<?php
	
$x=1;


include "connect.php";

     $sqli = "SELECT * from cars";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
$id = $row["id"];   					
$name=$row['name'];
$kay='Uploads/'.$row['image'];
$adult=$row['adult'];
$jup=$row['jup'];
$top=$row['top'];
$seat=$row['seat'];
$status=$row['status'];

					 
				   echo"
<tr>
<td align='center'>".$x++."</td>
<td align='center' style='color:black;'><strong>".$name."</strong></td>
<td align='center'><img src=".$kay."></td>
<td align='center'><strong>".$adult."</strong></td>
<td align='center'><strong>".$jup."</strong></td>
<td align='center'><strong>".$top."</strong></td>
	<td align='center'><strong>".$seat."</strong></td>
	
	
<td align='center' >
<form method='post' action='edit.php'><input type='text' name='id' value=".$id." hidden><button type='submit' name='' style=' background: #6998AB; color: aliceblue; width: 100px; height: 50px;align-items: center;font-size: 15px; cursor: pointer;'>Update</button></form>
</td>
<td align='center'>
<form method='post' action='del.php'><input type='text' name='id' value=".$id." hidden><button type='submit' name='' style=' background: #1A374D; color:#ffffff; width: 100px; height: 50px;align-items: center;font-size: 15px;; cursor: pointer;'>Delect</button></form>
</td>
</tr>
	";
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
 <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>
