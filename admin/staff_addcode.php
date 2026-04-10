<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		$name = $_POST['name'] ?? '';
		$designation = $_POST['designation'] ?? '';
		$staff_info = str_replace("'","&#39;",$_POST['staff_info'] ?? '');
		$facebook = $_POST['facebook'] ?? '';
		$twitter = $_POST['twitter'] ?? '';
		$linkedin = $_POST['linkedin'] ?? '';
		
		include "compressfunction.php";	
		$folder="../images/";
		$filename2= compress($folder);	
		// $filename2='';
				
		$date=date("Y-m-d h:i:s");	
		$insert = "INSERT INTO staff_master ( staff_name, staff_img, staff_designation , staff_info , facebook , twitter , linkedin , is_active , is_deleted, insert_at) VALUES('$name', '$filename2', '$designation' , '$staff_info' , '$facebook' , '$twitter' , '$linkedin' , 0 , 0 , '$date')";
		$run = mysqli_query($conn,$insert);
			if ($run)
			{	
			    $_SESSION['msg2']= "success";		
			//	header('Location: staff_index.php');
			    echo '<script>location.replace("staff_index.php");</script>';
			} else 
			{
				$_SESSION['msg2']= "not success";
				header('Location: staff_add.php');
			  
			}	
			echo '<script>location.replace("staff_index.php");</script>';
			
}
?>