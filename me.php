<?php 
ini_set('display_errors','0');
?>

<!doctype html>
<?php  include "connect.php"; ?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<style>
		.kol{
			background: #1A374D;
			color:#FFFFFF;
			margin-top: 10px;
			width: 500px;
			
		}
		.non{
			position: relative;
	color:#1A374D;
			border: 2px solid #1A374D;
			margin-top: 10px;
			
		
		}
		.form{
			align-items: center;
		}
	</style>
</body>
</html>
<?php
						
						include "connect.php";
				
	  session_start();

						
	$name=$_SESSION['name'];
	$code=$_SESSION['code'];
    $seat=$_SESSION['seat'];
	$jup=$_SESSION['jup'];
	$top=$_SESSION['top'];
	

	$id=$_REQUEST['id'];
	$sqli = "SELECT * from cars where id='".$id."'"; 
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
					{
				    
	               $id=$row['id']; 
				   $name=$row['name']; 
				   $image=$row['image']; 
				   $adult=$row['adult']; 
				   $jup=$row['jup']; 
				   $top=$row['top']; 
				   $about=$row['about']; 
				   $seat=$row['seat'];
				   $status=$row['status']; 
				   $code=$row['code']; 
			   }
?>
<?php
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
	$kok = $row['total'];


			   }
			   

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/daterangepicker.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Tour</title>
</head>

<body>


  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="site-navigation">
		  <a href="index.html" class="logo m-0"><i><b> Hello <?php echo $name;?> &nbsp;!</b></i> <span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
          <li><a href="index.php">Home</a></li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>


  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0"><i>Easy<sub>Trip</sub></i></h1>
            <p class="text-white"> </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form action="me.php" method="post">
	  <input type="hidden" value="<?php  echo $num;  ?>" name="num">
  <div class="container">
          <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
            <form class="contact-form bg-white">
              <div class="row">
				<div class="col"> <h3><center><label class="text-black" for="lname">Which Ticket Are You Applying FOR?</label></center> </h3>
				  </div></div>

			
				<div class="row">
				    <div class="col  kol"><input type="radio" name="trip" style="width: 30px; height: 20px;" value="One way Ticket" required><font size="+3"><b>One way Ticket</b> </font>
					
			
					<div class="row">
							<div class="col">
					<div class="form-group">
						<label class="text-white" for="lname">Travelling From?</label><br>
	<select name="trav" class="form-control" required>
<option><?php echo $jup;  ?></option></select>
						</div>
						</div>
                           <div class="col">
						<div class="form-group">
						<label class="text-white" for="lname">Travelling To?</label><br>
						<select name="trato" class="form-control" required>
<option><?php echo $top;  ?></option>
</select>
						</div>
						</div>
					</div>
					
												
					<div class="row">
						<div class="col">
					<div class="form-group">
						<label class="text-white" for="lname">journey Date?</label><br>
						<input type="date" name="joun" class="form-control" required>
						</div>
						</div>
						
							<div class="col">
						<div class="form-group">
						<label class="text-white" for="lname">Time To Go?</label><br>
						<select name="time" class="form-control" required>
							<option selected>Open this select menu</option>
	<option>9:00am</option>
	<option>12:00pm</option>
	<option>3:00pm</option>
	<option>6:00pm</option>
		<option>9:00pm</option>
</select>
						</div>
						</div>
					</div>

						<?php
						
						include "connect.php";
				
	  session_start();

						
	$name=$_SESSION['name'];
	$code=$_SESSION['code'];
    $seat=$_SESSION['seat'];
							$_SESSION['jup']=$jup;
	$_SESSION['top']=$top;
	

	$id=$_REQUEST['id'];
	$sqli = "SELECT * from cars where id='".$id."'"; 
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
					{
				    
	               $id=$row['id']; 
				   $name=$row['name']; 
				   $image=$row['image']; 
				   $adult=$row['adult']; 
				   $jup=$row['jup']; 
				   $top=$row['top']; 
				   $about=$row['about']; 
				   $seat=$row['seat'];
				   $status=$row['status']; 
				   $code=$row['code']; 
			
				 
				   echo "
						<div class='row'>
								<div class='col'>
					<div class='form-group'>
						<label class='text-white' for='lname'>
	Adults Passenger?</label><br>
						<input name='person' type='number' placeholder='How many seat are you booking?' max=".$row['seat']."  class='form-control' required>
<input type='hidden' name='seat' value=".$row['seat'].">
						</div>
						</div>
						
								
					</div>";
			   
			  }
						
?>
						
						<div class="row">
						 <div class="col-12">
   <center><button class="btn btn-light" type="submit" name="mit" style="margin-bottom: 20px;">Submit form</button></center> 
  </div>
						</div>	
					</div>
					
                                
					  </div>
				
				
				
				</div>
	  </div>
          </div>
  
	</form>

  <div class="site-footer">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">About Tour</h3>
							
						</div>
						<div class="widget">
							<ul class="list-unstyled social">
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-linkedin"></span></a></li>
								<li><a href="#"><span class="icon-dribbble"></span></a></li>
								<li><a href="#"><span class="icon-pinterest"></span></a></li>
								<li><a href="#"><span class="icon-apple"></span></a></li>
								<li><a href="#"><span class="icon-google"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2 pl-lg-5">
						<div class="widget">
							<h3 class="heading">Pages</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="widget">
							<h3 class="heading">Resources</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Contact</h3>
							<ul class="list-unstyled quick-info links">
								<li class="email"><a href="#">ibrahimkolawole564@gmail.com</a></li>
								<li class="phone"><a href="#">+234 9016504151</a></li>
								<li class="address"><a href="#">Ajia Road 7, House 3, Adegbayi Ibadan.</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="inner dark">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 mb-3 mb-md-0 mx-auto">
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed by IbrahimKolawole.
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
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
  
  <script src="js/custom.js"></script>

</body>

</html>
	<?php
if(isset($_POST['mit'])){

$p1=$_POST['trip'];
$p2=$_POST['trav'];
$p3=$_POST['trato'];
$p4=$_POST['joun'];
$p41=$_POST['time'];
$p6=$_POST['person'];
	
	$jol=1;
	$kol=2;
	$so=3;
	$to=4;
	if($p6==1){
	$sqli = "SELECT * from cars where seat='$seat'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					  $id = $row["id"];   					
					  $first = $row['seat'];
					  $code = $row['code'];
					  }
			$pay=$first-$p6;
	
			  
					 
		$kool=$p6*$kok;
	$mood=$kool;
		

			   
		$insert = mysqli_query($connection,"UPDATE cars SET seat='$pay' where  id='$id'") or die ('Could not connect: ' .mysqli_error($connection)); 
						     	
	
		$insert = mysqli_query($connection,"UPDATE info SET trip='$p1' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trav='$p2' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trato='$p3' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET joun='$p4' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET time='$p41' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET seat='$p6' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));  
	
$insert = mysqli_query($connection,"UPDATE info SET total='$mood' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	  
	echo "<script>window.location.assign('ger1.php')</script>";
  
	 session_start();
					  $_SESSION['id']=$_POST['id'];
	                  $_POST['nan']= $_SESSION['nan'];
				$_POST['price']=$_SESSION['price'];	   
					   
}
	else if($p6==2){
	$sqli = "SELECT * from cars where seat='$seat'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					  $id = $row["id"];   					
					  $first = $row['seat'];
					  $code = $row['code'];
					  }
			$pay=$first-$p6;
	
			  
					 
		$kool=$p6*$kok;
	$mood=$kool;
		

			   
		$insert = mysqli_query($connection,"UPDATE cars SET seat='$pay' where  id='$id'") or die ('Could not connect: ' .mysqli_error($connection)); 
						     	
	
		$insert = mysqli_query($connection,"UPDATE info SET trip='$p1' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trav='$p2' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trato='$p3' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET joun='$p4' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET time='$p41' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET seat='$p6' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));  
	
$insert = mysqli_query($connection,"UPDATE info SET total='$mood' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	  
	echo "<script>window.location.assign('ger2.php')</script>";
  
	 session_start();
					  $_SESSION['id']=$_POST['id'];
	                  $_POST['nan']= $_SESSION['nan'];
				$_POST['price']=$_SESSION['price'];	   
					   
}else if($p6==3){
	$sqli = "SELECT * from cars where seat='$seat'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					  $id = $row["id"];   					
					  $first = $row['seat'];
					  $code = $row['code'];
					  }
			$pay=$first-$p6;
	
			  
					 
		$kool=$p6*$kok;
	$mood=$kool;
		

			   
		$insert = mysqli_query($connection,"UPDATE cars SET seat='$pay' where  id='$id'") or die ('Could not connect: ' .mysqli_error($connection)); 
						     	
	
		$insert = mysqli_query($connection,"UPDATE info SET trip='$p1' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trav='$p2' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trato='$p3' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET joun='$p4' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET time='$p41' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET seat='$p6' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));  
	
$insert = mysqli_query($connection,"UPDATE info SET total='$mood' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	  
	echo "<script>window.location.assign('ger3.php')</script>";
  
	 session_start();
					  $_SESSION['id']=$_POST['id'];
	                  $_POST['nan']= $_SESSION['nan'];
				$_POST['price']=$_SESSION['price'];	   
					   
}else if($p6==4){
	$sqli = "SELECT * from cars where seat='$seat'";
			
		   $sqli2 = mysqli_query($connection,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					  $id = $row["id"];   					
					  $first = $row['seat'];
					  $code = $row['code'];
					  }
			$pay=$first-$p6;
	
			  
					 
		$kool=$p6*$kok;
	$mood=$kool;
		

			   
		$insert = mysqli_query($connection,"UPDATE cars SET seat='$pay' where  id='$id'") or die ('Could not connect: ' .mysqli_error($connection)); 
						     	
	
		$insert = mysqli_query($connection,"UPDATE info SET trip='$p1' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trav='$p2' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trato='$p3' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET joun='$p4' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET time='$p41' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET seat='$p6' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));  
	
$insert = mysqli_query($connection,"UPDATE info SET total='$mood' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	  
	echo "<script>window.location.assign('ger4.php')</script>";
  
	 session_start();
					  $_SESSION['id']=$_POST['id'];
	                  $_POST['nan']= $_SESSION['nan'];
				$_POST['price']=$_SESSION['price'];	   
					   
}
}
?>
<?php
include "connect.php"; 
if(isset($_POST['submit'])){	
$price=$_POST['price'];


 
			
			
	/*$insert = mysqli_query($connection,"UPDATE info SET car='$nan' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); */
	
	$insert = mysqli_query($connection,"UPDATE info SET total='$price' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
			
					  {
					echo header("location:me.php");
				
				   	
					  }
	   session_start();
	$_SESSION['seat']=$seat; 
	$_SESSION['image']=$image;
}
					  
					  ?>
	