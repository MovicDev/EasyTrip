 
<?php 
if(isset($_POST['sub'])){

$name=$_POST['name'];
$image= basename($_FILES["image"]["name"]);
$adult=$_POST['adult'];
$jup=$_POST['jup'];
$top=$_POST['top'];
$seat=$_POST['seat'];
$status=$_POST['status'];


//$u_agree=$_POST['u_agree'];



include "connect.php";

				    
					{
					$code = "CAR".$randomString = substr(md5(microtime()), 0, 7);	
					
					   $insert = mysqli_query($connection,"insert into cars (name,image,adult,jup,top,seat,code,status) values ('$name','$image','$adult','$jup','$top','$seat','$code','$status')") or die ('Could not connect: ' .mysqli_error($connection));
					
					   
	 	 
			 $statusMsg = '';

$targetDir ="Uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

 if(isset($_POST["sub"]) && !empty($_FILES["image"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
     // Upload file to server
     if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
     // Insert image file name into database
     $insert = mysqli_query($connection,"INSERT into image (filename,input, uploaded_on) VALUES ('".$file1Name."','$image', NOW())");
 }}}

 
 	echo "<script>alert(' have being posted');window.location.assign('admin.php')</script>";
					}
		 }
		 

		 session_start(); 





$_SESSION['id'] = $id;
?>