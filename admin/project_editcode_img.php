<?php
session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$id = $_POST['ab_id'];
		$heading = $_POST['heading'] ?? NULL;
		$description = $_POST['description'] ?? NULL;


		if(empty($_FILES['file']['name'])){
			$filename1 = $_POST['image'];
		}else{	
			include "compressfunction.php";	
			$folder="../images/";
			$filename1= compress($folder);
		}
		
		$eve = "UPDATE project_img set img = '$filename1', heading = '$heading' , description = '$description' , is_active = '0' , is_deleted = 0 WHERE id= '".$id."'";
		$run = mysqli_query($conn,$eve);
		// print_r($run);
		if ($run){	
			$_SESSION['msg1']= "success";
			header('Location: project_img.php');
            echo '<script>location.replace("project.php");</script>';  
		   
		}else{
			$_SESSION['msg1']= "not success";
			header('Location: project_img.php');
		  
		}	
	}
?>	
