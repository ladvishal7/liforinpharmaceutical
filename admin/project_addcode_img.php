<?php
session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$prid = $_SESSION['prid'] ?? 1;
		$heading = $_POST['heading'] ?? NULL;
		$description = $_POST['description'] ?? NULL;
		$img = $_POST['file'] ?? NULL;

		// include "compressfunction.php";	
		// $folder="../images/";
		// $filename1= compress($folder);

		$date=date("Y-m-d h:i:s");
		$eve = "INSERT INTO project_img (prid ,img , is_active , is_deleted , insert_at)VALUES('$prid', '$img'  , '0' , '0' , '$date') ";
		$run = mysqli_query($conn,$eve);
		// print_r($run);
		if ($run)
		{	
			$_SESSION['msg1']= "success";
		//	header('location: project_img.php');
				     echo '<script>location.replace("project_img.php");</script>';
		}else{
			$_SESSION['msg1']= "not success";
			header('location: project_img.php');
		  
		}	
	}
?>	
