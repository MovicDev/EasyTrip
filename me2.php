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
	session_start();
	$num=$_SESSION['num'];
	$name=$_SESSION['name'];
$code=$_SESSION['code'];
$p6=$_SESSION['person'];
	$p7=$_SESSION['human'];
$p11=$_SESSION['adult'];
	$p12=$_SESSION['child'];
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
	$p7 = $row['human'];
				   $p11=$row['adult'];
	$p12=$row['child'];
	$p14=$row['adult_1'];
	$p15=$row['child_1'];

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
            <h1 class="mb-0"><i>TRIP</i></h1>
            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form action="me2.php" method="post">
	  <input type="hidden" value="<?php  echo $num;  ?>" name="num">
  <div class="container">
          <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
            <form class="contact-form bg-white">
              <div class="row">
				<div class="col-12"> <h3><center><label class="text-black" for="lname">You Applying FOR Round Trip?</label></center> </h3>
				  </div></div>

			
				<div class="row">				
				<div class="col non"><input type="radio" name="trip" value="Round Trip Ticket" style="width: 30px; height: 20px;" value="One way Ticket"  required> <font size="+3"><b>Round Trip Ticket</b></font>
					
				
					<div class="row">
				<div class="col">
					<div class="form-group">
						<label class="text-black" for="lname"><strong>Travelling From?</strong></label><br>
						<select name="trav" class="form-control" required>
							<option selected>Open this select menu</option>
	<option>LAGOS-jibowu</option>
	<option>LAGOS-ikotun</option>
	<option>OSUN-oshogbo</option>
	<option>OYO-Ejibgo</option>
							<option>OYO-ibadan</option>
							</select>
						</div>
						</div>
												<div class="col">
						<div class="form-group">
						<label class="text-black" for="lname"><strong>Travelling To?</strong></label><br>
						<select name="trato" class="form-control" required>
							<option selected>Open this select menu</option>
							<option>LAGOS-jibowu</option>
	<option>LAGOS-ikotun</option>
	<option>OSUN-oshogbo</option>
	<option>OYO-Ejibgo</option>
							<option>OYO-ibadan</option></select>
						</div>
						</div>
					</div>
						
					<div class="row">
					<div class="col">
					<div class="form-group">
						<label class="text-black" for="lname"><strong>journey Date?</strong></label><br>
						<input type="date" name="joun" class="form-control" required>
						</div>
						</div>
						
												<div class="col">
						<div class="form-group">
						<label class="text-black" for="lname"><strong>Time To Go?</strong></label><br>
						<select name="time" class="form-control" required>
							<option selected>Open this select menu</option>
							
	<option value="9:00am">9:00am</option>
	<option>12:00pm</option>
	<option value="3:00pm">3:00pm</option>
	<option>6:00pm</option>
		<option>9:00pm</option>
</select>
						</div>
						</div>
					</div>
											
					  
						<div class="row">
						<div class="col">
					<div class="form-group">
						<label class="text-black" for="lname"><strong>Return Date?</strong></label><br>
						<input type="date" name="back" class="form-control" required>
						</div>
						</div>
						
		                <div class="col">
						<div class="form-group">
						<label class="text-black" for="lname"><strong>TIME TO BACK?</strong></label><br>
						<select name="arrive" class="form-control" required>
							<option selected>Open this select menu</option>
	<option value="9:00pm">9:00am</option>
	<option>12:00pm</option>
	<option>3:00pm</option>
	<option value="6:00pm">6:00pm</option>
		<option>9:00pm</option>
</select>
						</div>
						</div>
					</div>
					
					<div class="row">
					<div class="col">
					<div class="form-group">
						<label class="text-black" for="lname">
	<strong>Adults Passenger?</strong></label><br>
						<select name="person" class="form-control" required>
							<option selected>Open this select menu</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option></select>
						</div>
						</div>
						
		               <div class="col">
						<div class="form-group">
						<label class="text-black" for="lname"><strong>Child(ren) Passenger?</strong></label><br>
						<select name="human" class="form-control" required>
							<option selected>Open this select menu</option>
		<option>1</option>
	<option>2</option>
	<option value="2">3</option>
	<option value="4">4</option>
	<option>5</option></select>
						</div>
						</div>
					
				</div>
					<div class="row">
						 <div class="col-12">
   <center> <button class="btn btn-primary" type="submit" name="mot" style="margin-bottom: 10px;" >Submit form</button></center>
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
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                <li class="email"><a href="#">mail@example.com</a></li>
                <li class="phone"><a href="#">+1 222 212 3819</a></li>
                <li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
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
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co" class="link-highlight">Untree.co</a> <!-- License information: https://untree.co/license/ --> Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a>
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
if(isset($_POST['mot'])){

$p1=$_POST['trip'];
$p2=$_POST['trav'];
$p3=$_POST['trato'];
$p4=$_POST['joun'];
$p41=$_POST['time'];
$p5=$_POST['back'];
$p51=$_POST['arrive'];
$p6=$_POST['person'];
$p7=$_POST['human'];

	
				   	$kool=$p6*$p11;
	$hood=$p7*$p12;
	$mood=$kool+$hood;
		
		$kook=$p6*$p14;
	$hook=$p7*$p15;
	$mooh=$kook+$hook;
				   
			   

	
		$insert = mysqli_query($connection,"UPDATE info SET trip='$p1' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trav='$p2' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET trato='$p3' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET joun='$p4' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET time='$p41' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET back='$p5' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET arrive='$p51' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET person='$p6' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET human='$p7' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
$insert = mysqli_query($connection,"UPDATE info SET total='$mood' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	$insert = mysqli_query($connection,"UPDATE info SET total_1='$mooh' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert)); 
	
	
	
	
	echo "<script>window.location.assign('nex.php')</script>";
	
}

?>
