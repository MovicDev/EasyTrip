<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php echo $chk;  ?>
	<?php echo $arr;  ?>
	<?php echo $accpt_err;?>
 <form method="post" action="reg.php">
<input type="text" name="name" placeholder="full name"><br><br>
	 <input type="password" name="password" placeholder="password"><br><br>
	  <input type="text" name="num" placeholder="telephone"><br><br>
	 Nationality
<select name="nation"><option>A</option>
	<option>B</option>
	<option>C</option>
	<option>D</option>
	<option>E</option></select><br><br>
Gender
	 <select name="gender"><option>Male</option>
	<option>Female</option></select><br><br>
	 
	DOB
	<select name="year"><option>2022</option>
	<option>2020</option></select>
	 <select name="month"><option>J</option>
	<option>F</option></select>
	 <select name="day"><option>1</option>
	<option>2</option></select><br><br>
	 <input type="checkbox" name="chu" value="yes">
	 <input type="submit" name="submit" value="submit">


Already have an account <a href="index.php">login</a>

</body>
</html>
<?php  
ini_set('display_errors','0');
?>
<?php 
$accpt_err = $er = $err1 = ""; $err1_ = $chk = $err2 = $err_msg = $err3 = $err3_ = $err4 = $err5 = $err6 = $err7 = $err8 = $err9 = $err10 = $err11 = $err12 = $err13 = $err4= $msg ="";
$accpt_err=""; $success = ""; $success1 = "";
if(isset($_POST['submit'])){

	
             

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
$p41='';
$p5='';
$p51='';
$p6='';
$p7='';  
	
$p11=4000;
$p12=3300;
$p13='';
$p14=3900;
$p15=3000;
$p16='';
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
						
					   $submit = mysqli_query($connection,"insert into info (code, name, password, num, nation, gender, year, month, day,trip, trav, trato, joun, time, back, arrive, person, human,adult, child,total,adult_1,child_1,total_1,name_1,nation_1,gender_1,year_1,month_1,day_1,name_2,nation_2,gender_2,year_2,month_2,day_2,name_3,nation_3,gender_3,year_3,month_3,day_3) values ('$code', '$name', '$password', '$num', '$nation', '$gender', '$year', '$month', '$day','$p1','$p2','$p3', '$p4', '$p41', '$p5','$p51', '$p6', '$p7','$p11','$p12','$p13', '$p14', '$p15', '$p16','$d1','$d2','$d3', '$d4', '$d5', '$d6','$d11','$d12','$d13', '$d14', '$d15', '$d16','$d111','$d112','$d113', '$d114', '$d115', '$d116')") or die ('Could not connect: ' .mysqli_error($connection));
		
		
		
	
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