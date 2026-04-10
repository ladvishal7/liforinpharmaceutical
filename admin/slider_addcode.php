<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		
	$header = $_POST['header'] ?? '';
	$caption = $_POST['caption'] ?? '';;//json_encode($_POST['sub_heading']);
	// $description = $_POST['description'];
	$caption = $_POST['caption'] ?? '';
	$youtube = $_POST['youtube'] ?? '';
	
	include "compressfunction.php";	
	$folder = "../images/";
	$filename2= compress($folder);	
	// $filename2 = image_png($folder);
	//$source_path = $_FILES['file']['tmp_name'];
	//$filename2 = compress_png_image($source_path, $destination_path, 8);	
	
	
	$date=date("Y-m-d h:i:s");	
	$insert = "INSERT INTO slider_master ( img, header, caption  , link , is_active , is_deleted, insert_at,youtube) VALUES('$filename2', '$header', '$caption' , '$link', 0 , 0 , '$date','$youtube')";
			$run = mysqli_query($conn,$insert);
			// print_r($run);
			if ($run)
			{	
				$_SESSION['msg2']= "success";		
			//	header('Location: slider_index.php');
			    echo '<script>location.replace("slider_index.php");</script>';  
			} else 
			{
				$_SESSION['msg2']= "not success";
			//	header('Location: slider_add.php');
			   echo '<script>location.replace("slider_index.php");</script>';  
			}	
}
?>	
