<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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

  <title>Easy Trip</title>
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
        <a href="index.html" class="logo m-0">Easy Trip <span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact Us</a></li>
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
            <h1 class="mb-0">Register With Us</h1>
        
          </div>
        </div>
      </div>
    </div>
  </div>

  <form action="elements.php" method="post">
  <div class="container">
	  <div class="row">
        <div class="col-lg-12">
          <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
            <h1 class="section-title">Registration Form</h1>
            <form class="contact-form bg-white">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black" for="fname">Full name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black" for="lname">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                </div>
              </div>
				<div class="row">
				<div class="col-md-6">
              <div class="form-group">
                <label class="text-black" for="email">Telephone address</label>
                <input type="text" name="num" class="form-control" id="num" required>
              </div>
				</div>
				<div class="col-md-6">
              <div class="form-group">
                <label class="text-black" for="Nationality">Nationality</label>
               <select name="nation" class="form-control custom-select" required>
				   <option value="">Destination</option>
					<option value="Nigeria">Nigeria</option>
					<option value="Canader">Canader</option>
					<option value="South Africa">South Africa</option>
					<option value="Algeria">Algeria</option>
					<option value="Mail">Mail</option>
				  </select>
              </div>
				</div>
					</div>
				<div class="row">
				<div class="col-md-6">
              <div class="form-group">
                <label class="text-black" for="Gender">Gender</label>
               <select name="gender"  class="form-control custom-select" required>
				   <option value="">Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option>
				  </select>
              </div>
				</div>
					 
            	  <div class="form-group">
					  <div class="row">	
				  <div class="col">
                <label class="text-black" >Date Of Birth</label>
               <input type="text" id="year" placeholder="Year" name="year" class="form-control" required>
					  </div>
					    <div class="form-group">
							  <label class="text-black">Month</label>
				  <div class="col">
                 <select name="month" class="form-control custom-select" required>
				   <option value="">Month</option>
					<option value="January">January</option>
					<option value="Febuary">Febuary</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
					
				  </select>
					  </div>
					  </div>
					    <div class="form-group">
					<label class="text-black" >Date</label>
				  <div class="col">
               <select name="day" class="form-control custom-select" required>
				   <option value="">Date</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				   <option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				   <option value="7">7</option>
				   <option value="8">8</option>
				   <option value="9">9</option>
				   <option value="10">10</option>
				   <option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
				   <option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
				   <option value="17">17</option>
				   <option value="18">18</option>
				   <option value="19">19</option>
				   <option value="20">20</option>
				   <option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
				   <option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
				   <option value="27">27</option>
				   <option value="28">28</option>
				   <option value="29">29</option>
				   <option value="30">30</option>
				   <option value="31">31</option>
				  
				  </select>
					  </div>
              </div>
				</div>
				</div>
				</div>
				</div>
<br>
<input type="checkbox" checked="checked" name="chu" value="yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>I Agree The Terms and Conditions</strong>
<br><br>
                   <button type="submit" name="sub" class="btn btn-primary">Submit</button>
              </div>
				</div>
	</div>
            </form>
          </div>
          

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
ini_set('display_errors','0');
?>
<?php 
$accpt_err = $er = $err1 = ""; $err1_ = $chk = $err2 = $err_msg = $err3 = $err3_ = $err4 = $err5 = $err6 = $err7 = $err8 = $err9 = $err10 = $err11 = $err12 = $err13 = $err4= $msg ="";
$accpt_err=""; $success = ""; $success1 = "";
if(isset($_POST['sub'])){

	
             

$name=$_POST['name'];
$password=$_POST['password'];
$num=$_POST['num'];
$nation=$_POST['nation'];
$gender=$_POST['gender'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$p1='';
$p2='';
$p3='';
$p4='';
$p5='';
$p6='';
$p7='';  
    $d1='';
	$d2='';
	$d3='';
	$d4='';
	$d5='';
	$d6='';
	$d11='';
	$d12='';
	$d13='';
	$d14='';
	$d15='';
	$d16='';
	$d111='';
	$d112=''; 
	$d113='';
	$d114='';
	$d115='';
	$d116='';
	$car='';
	$seat='';
	$image='';
$status="Not Approve";
//$u_agree=$_POST['u_agree'];

                        
include "connect.php";


 $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 $string_exp = "/^[A-Za-z .'-]+$/";

   
  if((!isset($_POST['chu'])) || $_POST['chu'] != 'yes')
 {
$accpt_err = '<font color="red">You have not agreed/accepted our rules</font>';

 } 
		$extract_user = mysqli_query($connection,"SELECT * FROM info WHERE num='$num'");
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			$chk = '<font color="red">Contact already exit</font>';
		                 }
	else
	{
					    
						$code = "DC".$randomString = substr(md5(microtime()), 0, 7);
						
					   $submit = mysqli_query($connection,"insert into info (code, name, password, num, nation, gender, year, month, day, trip, trav, trato, joun, time, person, total, name_1, nation_1, gender_1, year_1, month_1, day_1, name_2, nation_2, gender_2, year_2, month_2, day_2, name_3, nation_3, gender_3, year_3, month_3, day_3, car, seat,status,image) values ('$code', '$name', '$password', '$num', '$nation', '$gender', '$year', '$month', '$day','$p1','$p2','$p3', '$p4', '$p5', '$p6', '$p7', '$d1','$d2','$d3', '$d4', '$d5', '$d6','$d11','$d12','$d13', '$d14', '$d15', '$d16','$d111','$d112','$d113', '$d114', '$d115', '$d116','$car','$seat','$status','$image')") or die ('Could not connect: ' .mysqli_error($connection));
		
		
		
	
	}
	echo "<script>alert('Your information have been taken succefully');window.location.assign('index.php')</script>";


		session_start();
	$_SESSION['num']=$num;
	$_SESSION['name']=$name;
	$_SESSION['code']=$code;
	$_SESSION['id']=$id;
	
	$_SESSION['person']=$p6;
	$_SESSION['human']=$p7;
	
	$_SESSION['adult']=$p11;
	$_SESSION['child']=$p12;
	$_SESSION['adult_1']=$p14;
	$_SESSION['child_1']=$p15;

}
	
		
		
	?>