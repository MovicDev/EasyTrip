<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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
<!doctype html>
<html lang="en">
	<style>
		.cont{
			border: 1px solid gray;
		}
	
	
	</style>
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
        <a href="index.html" class="logo m-0">&#8592;Passenger Details <span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
          <li class="active"><a href="index.html">Home</a></li>
         
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
             <font color="red"><strong>NOTE:</strong></font><p class="text-white">  Provide details of other passengers you are booking for Enter First names before Last names.  </p><br><strong><font color="red"><h4>$<?php echo $p13;  ?></font>&nbsp;<font color="white">Is the Amount to pay for your ride</h4></font></strong>
           </div>
        </div>
      </div>
    </div>
  </div>
	
	<form action="ger1.php" method="post">
  <div class="container cont">
      <div class="row">
        <div class="col-lg-12">
          <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
        
              <div class="row">
				  <div class="col"><div class="form-group">
                    <label class="text-black" for="fname"><h3>Passenger 1 (Primary Contact)</h3></label>
                   <select name="name" class="form-control custom-select">
				   <option><?php  echo $name; ?></option>
				  </select>
                  </div>
                </div>
			  </div>
				  
				  <div class="row">
					  <div class="col">
                  <div class="form-group">
                 <select name="num" class="form-control custom-select">
				   <option><?php  echo $num; ?></option>
				  </select>
                  </div>
                </div>
				   <div class="col">
                  <div class="form-group">
                    <select name="nation" class="form-control custom-select">
				   <option><?php  echo $nation; ?></option>
				  </select>
                  </div>
                </div>
					  <div class="col">
                  <div class="form-group">
                   <select name="gender"  class="form-control custom-select" >
				  <option> <?php  echo $gender; ?></option>
				  </select>
                  </div>
                </div>
				  </div>
				  
				  <div class="row">
				   <div class="col">
                  <div class="form-group">
                  <select name="year" class="form-control custom-select">
				   <option><?php  echo $year; ?></option>
				  </select>
                  </div>
                </div>
					  <div class="col">
                  <div class="form-group">
                <select name="month" class="form-control custom-select"> 
				   <option><?php  echo $month; ?></option>
				  </select>
                  </div>
                </div>
					   <div class="col">
                  <div class="form-group">
                   <select name="day" class="form-control custom-select">
					<option><?php  echo $day; ?></option>
				  </select>
                  </div>
                </div>
				  </div>
				  
				  
	
				  
				  
			  
			 
				  <div class="row">
					  
						 <div class="col-12">
   <center><button class="btn btn-primary" type="submit" name="loin" style="margin-bottom: 20px;">Proceed</button></center> 
  </div>
						</div>	
				
					
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
	
	if(isset($_POST['loin'])){
$d1=$_POST['name_1'];
$d2=$_POST['nation_1'];
$d3=$_POST['gender_1'];
$d4=$_POST['year_1'];
$d5=$_POST['month_1'];
$d6=$_POST['day_1'];
$d11=$_POST['name_2'];
$d12=$_POST['nation_2'];
$d13=$_POST['gender_2'];
$d14=$_POST['year_2'];
$d15=$_POST['month_2'];
$d16=$_POST['day_2'];
$d111=$_POST['name_3'];
$d112=$_POST['nation_3'];
$d113=$_POST['gender_3'];
$d114=$_POST['year_3'];
$d115=$_POST['month_3'];
$d116=$_POST['day_3'];


		

		$insert = mysqli_query($connection,"UPDATE info SET name_1='$d1' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET nation_1='$d2' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET gender_1='$d3' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
				
		$insert = mysqli_query($connection,"UPDATE info SET year_1='$d4' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET month_1='$d5' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET day_1='$d6' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
          $insert = mysqli_query($connection,"UPDATE info SET name_2='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET nation_2='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET gender_2='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
				
		$insert = mysqli_query($connection,"UPDATE info SET year_2='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET month_2='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET day_2='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET name_3='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET nation_3='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET gender_3='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
				
		$insert = mysqli_query($connection,"UPDATE info SET year_3='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET month_3='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		$insert = mysqli_query($connection,"UPDATE info SET day_3='' where  num='$num'") or die ('Could not connect: ' .mysqli_error($connection,$insert));
		
		
		echo "<script>window.location.assign('payment.php')</script>";
		
			session_start();
$_SESSION['num']=$num;
		
		session_start();
					$_SESSION['name']=$name;
					$_SESSION['id']=$id;
					$_SESSION['code']=$code;
		
	}
	?>
