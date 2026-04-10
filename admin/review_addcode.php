<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		
	$name = $_POST['name'];
	$review_sub = $_POST['review_sub'] ?? null;
	$review = $_POST['review'] ?? null;

	include "compressfunction.php";	
	$folder="../images/testimonial/";
	$filename2= compress($folder);	
			
	$date=date("Y-m-d h:i:s");	
	$insert = "INSERT INTO review_master ( review_img, review_name , review_sub , review_text, is_active , is_deleted, insert_at) VALUES('$filename2', '$name' , '$review_sub','$review', 0 , 0 , '$date')";
			$run = mysqli_query($conn,$insert)or die(mysqli_error($conn));
			// print_r($run);
			if ($run)
			{	
				$_SESSION['msg2']= "success";		
				header('Location: review_index.php');
			    echo '<script>location.replace("review_index.php");</script>';  
			} else 
			{
				$_SESSION['msg2']= "not success";
				header('Location: review_add.php');
			  
			}	
}
?>