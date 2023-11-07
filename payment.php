<!doctype html>


<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<style type="text/css">
@media screen and (mix-width:600px){
			
			.mobile-break{
				
				display:none;
			}
		}
		
		
	
  
	*{margin 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	body{
		min-height: 100vh;
		background:#FFFFFF;
		
	}
	.container{
		position: relative;
	width: 100%;
	height: 100vh;
	
	
	}
	.bubbles{
		position: relative;
		display: flex;
	}
	.bubbles span{
		position: relative;
		width: 30px;
		height: 30px;
		background: #00F3FF;
		margin: 0px 4px;
		border-radius: 50%;
		box-shadow: 0px 0px 0px 10px #00F3FF44,
		0px 0px 50px #00F3FF,
		0px  0px 100px #00F3FF;
		animation: animate 15s linear infinite;
		animation-duration: calc(125s / var(--i));
	}
	.bubbles span:nth-child(even)
	{
	background:#D8181C;
		box-shadow: 0px 0px 0px 10px #D8181C44,
			0px 0px 50px #D8181C,
		0px  0px 100px #D8181C;
	}
	@keyframes animate
	{
		 0%
	
	{
		transform: translateY(100vh) scale(0);
	}
	

		 100%
	{
		transform: translateY(-10vh) scale(1);
	}
		
		}
.con{
 margin:50px;
 padding:4em 2em 4em 2em;
 border-radius:20px;
}
form-cotrol{border-radius:10px !important;
}
	input{
		width: 50px;
		height: 50px;
	}

.btn{ background:#E35B00;
      color:#FFFFFF;
    border-radius:20px;
	margin-left:70px;
}
h3{color:#664a3f;
}
.right{background: #6998AB;
      padding:9em 2em 9em 2em;	 
	  border-radius:20px; 
	  margin-left:-50px;
	position: relative;
		left: 25px;
}
.gn{color:#664a3f;
  font-family:"Times New Roman", Times Srif;
  height:360px;
  
}
	button{
		background: transparent; 
		color:white; 
		width: 150px; 
		height: 50px; 
		border-radius: 10px; 
		border:2px solid white;
		z-index:-1;
		transition:0.5s;
		
	}
	button input{
		position: relative;
		top: 10px;
		width: 92px;
		cursor: pointer;
	}
button:hover {
	background:#1A374D;
	color: white;
	
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
	
	.fs{
		float: right;
		position: relative;
		right: 70px;
	}
	.fd{
		float: left;
	}
		</style>
<body>
<body onload="foLow()">

<?php 
include "connect.php";

session_start();
 $id=$_SESSION['id']; 
 $name=$_SESSION['name'];
  $code=$row['code'];
include "connect.php";

			
			 $sqli = "SELECT * from info where id = '$id' ";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
				     $id=$row['id'];
			$name=$row['name'];
				  $code=$row['code'];
	$name_1 = $row['name_1'];  					
	$name_2= $row['name_2'];
	$name_3 = $row['name_3'];
	$trav= $row['trav'];  
   $trato = $row["trato"];   					
	$time= $row['time'];
	$car = $row['car'];
	$seat = $row['seat'];
	$total = $row['total'];
	$status = $row['status'];
				   $joun = $row['joun'];
					   }
					 
						 
					  
					   
					   ?>
	
			   <div class="container">
		
		
		
				 
				 <div class="fd">  <a href="tick.php"><button type="button"><i class="fas fa-arrow-left"></i>&nbsp;Ticket</button></a></div>
   <div class="fs"><a href="logout.php"><button type="button"><i class="fas fa-arrow-left"></i>&nbsp;LOGOUT</button></a></div>
	
				  <center><font style="position: relative; top: 100px; color:#000000; font-size: 20px;"> <strong><?php  echo $name;  ?>&nbsp;<br>Payment</strong></font></center>
<div class="row con">

<div class="col">
<div class="right">
		
<div class="gn">
	
<input type="radio" name="gender" onClick="payLow()" value="Wallet phrase" style="color:#664a3f;" ><b style="position: relative; bottom: 20px; left: 20px; color: aliceblue; font-size:30px;">paystack</b><br />
<input type='radio' name="gender" onClick="loPond()" value="Wallet keystone" style="color:#664a3f;"><b style="position: relative; bottom: 20px; left: 20px;  color: aliceblue; font-size:30px;">Bank transfer</b><br />
<div id="low"><br /> </font><br/><font style=" color:#FFFFFF"><b>Account Name:Rasaq ibrahim kolawole<br/>Account Number: 2144467381<br /> Bank Name: United Bank Of Africa (U.B.A)</b></font><br><font style=" color:#FFFFFF"><font style="color:red; font-size: 20px"><strong>NOTE:
	</font></font><br /><font color="#FFFFFF"><h6>Upon payment been paid, submit your details and proof of your payment and wait while your payment is being confirm...</strong><br /><center><form method='post' action='pay.php'><input type='hidden' name='id' value="<?php echo $id; ?>"><button type="submit" name="" >Submit prof</button></form></center></h5></font></div>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
	<center><div id="sho"><form><button type="submit" name="">Continue</button></div></center>

</div>
</div>
</div>

<script>
function foLow(){
document.getElementById('sho').style.display="none";
document.getElementById('low').style.display="none"




}

</script>
<script>
function payLow(){
document.getElementById('sho').style.display="block";
document.getElementById('low').style.display="none"


}

</script>
<script>
function loPond(){
document.getElementById('sho').style.display="none";
document.getElementById('low').style.display="block"
}


</script>
	<script src="js/bootstrap.js.map"></script>
	<script src="js/jquery-3.5.1.min.map"></script>
</body>
</html>