
<?php
	session_start();
	$num=$_SESSION['num'];
	$p6=$_SESSION['person'];
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
    $p11 = $row['adult'];
	 $p12 = $row['child'];
	$p13 = $row['total'];
	$p14 = $row['adult_1'];
	$p15 = $row['child_1'];
	$p16 = $row['total_1'];
	$name_1 = $row['name_1'];
	$name_2 = $row['name_2'];
	$name_3 = $row['name_3'];
	$car = $row['car'];
	$seat = $row['seat'];
				   $city = $row['city'];
				   $city2 = $row['city2'];
				   $status = $row['status'];
				   
				   
				   
			   }

	

	?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Trip</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'><link rel="stylesheet" href="ticket/dist/style.css">

</head>
	<style>
	@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap");
body,
p,
h1 {
  margin: 0;
  padding: 0;
  font-family: "Open Sans", sans-serif;
}

.container {
  background: #e0e2e8;
  position: relative;
  width: 100%;
  height: 100vh;
}
.container .ticket {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container .basic {
  display: none;
}

.airline {
  display: block;
  height: 575px;
  width: 270px;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.3);
  border-radius: 25px;
  z-index: 3;
}
.airline .top {
  height: 220px;
  background: #6998AB;
  border-top-right-radius: 25px;
  border-top-left-radius: 25px;
}
.airline .top h1 {
  text-transform: uppercase;
  font-size: 18px;
  letter-spacing: 2;
  text-align: center;
  position: absolute;
  top: 30px;
  left: 50%;
  transform: translateX(-50%);
}
.airline .bottom {
  height: 355px;
  background: #fff;
  border-bottom-right-radius: 25px;
  border-bottom-left-radius: 25px;
}

.top .big {
  position: absolute;
  top: 100px;
  font-size: 65px;
  font-weight: 700;
  line-height: 0.8;
}
.top .big .from {
  color: #6998AB;
  text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
}
.top .big .to {
  position: absolute;
  left: 32px;
  font-size: 35px;
  display: flex;
  flex-direction: row;
  align-items: center;
}
.top .big .to i {
  margin-top: 5px;
  margin-right: 10px;
  font-size: 15px;
}
.top--side {
  position: absolute;
  right: 35px;
  top: 110px;
  text-align: right;
}
.top--side i {
  font-size: 25px;
  margin-bottom: 18px;
}
.top--side p {
  font-size: 10px;
  font-weight: 700;
}
.top--side p + p {
  margin-bottom: 8px;
}

.bottom p {
  display: flex;
  flex-direction: column;
  font-size: 13px;
  font-weight: 700;
}
.bottom p span {
  font-weight: 400;
  font-size: 11px;
  color: #6c6c6c;
}
.bottom .column {
  margin: 0 auto;
  width: 80%;
  padding: 2rem 0;
}
.bottom .row {
  display: flex;
  justify-content: space-between;
}
.bottom .row--right {
  text-align: right;
}
.bottom .row--center {
  text-align: center;
}
.bottom .row-2 {
  margin: 30px 0 60px 0;
  position: relative;
}
.bottom .row-2::after {
  content: "";
  position: absolute;
  width: 100%;
  bottom: -30px;
  left: 0;
  background: #000;
  height: 1px;
}

.bottom .bar--code {
  height: 50px;
  width: 80%;
  margin: 0 auto;
  position: relative;
	bottom: 10px;
}
.bottom .bar--code::after {
  content: "";
  position: absolute;
  width: 6px;
  height: 100%;
  background: #000;
  top: 0;
  left: 0;
  box-shadow: 10px 0 #000, 30px 0 #000, 40px 0 #000, 67px 0 #000, 90px 0 #000, 100px 0 #000, 180px 0 #000, 165px 0 #000, 200px 0 #000, 210px 0 #000, 135px 0 #000, 120px 0 #000;
}
.bottom .bar--code::before {
  content: "";
  position: absolute;
  width: 3px;
  height: 100%;
  background: #000;
  top: 0;
  left: 11px;
  box-shadow: 12px 0 #000, -4px 0 #000, 45px 0 #000, 65px 0 #000, 72px 0 #000, 78px 0 #000, 97px 0 #000, 150px 0 #000, 165px 0 #000, 180px 0 #000, 135px 0 #000, 120px 0 #000;
}

.info {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  bottom: 10px;
  font-size: 14px;
  text-align: center;
  z-index: 1;
}
.info a {
  text-decoration: none;
  color: #000;
  background: #ffcc05;
}
		button{
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

<!-- partial:index.partial.html -->
<div class="container">
	<?php 
	if($status=='Not Approve'){
		echo'<font style="position:relative; top:250px;">';
		echo'<h1>';
	echo'<center>';
		echo 'Opoos Error 404';
		echo'<br>';
		echo 'You have not send Your Payment Prove';
		echo'</center>';
		echo'</h1>';
		echo'</font>';
} else{
	?>
					
	<div class="ticket basic">
		<p>Admit One</p>
	</div>

	<div class="ticket airline">
		<div class="top">
			<h1><?php echo $car; ?></h1>
			<div class="big">
				<p class="from">EASY</p>
				<p class="to">TRIP.</p>
			</div>
			<div class="top--side">
				<i class="fas fa-bus"></i>
				
			</div>
		</div>
		<div class="bottom">
			<div class="column">
				
				<div class="row row-2">
					<p><span>Boards</span><?php echo $time; ?></p>
					<p class="row--center"><span>Departs</span><?php echo $trav; ?></p>
					<p class="row--right"><span>Arrives</span><?php echo $trato; ?></p>
				</div>
				<div class="row row-3">
					<p><span>Passenger</span><?php echo $name; ?><br><?php echo $name_1 ?><br><?php echo $name_2; ?><br><?php echo $name_3; ?></p>
					
					<p class="row--right"><span>Group Seat</span><?php echo $seat; ?></p>
				</div>
				<center>PRICE:<strong>$<?php echo $p13; ?></strong><br>
					
	
					
					  
					
		
					
			</div>
				
				<?php
	
	}
 ?>			<div class="bar--code"></div>
		</div>
	</div>

	

</div>
<!-- partial -->
  <script  src="ticket/dist/script.js"></script>

</body>
</html>
