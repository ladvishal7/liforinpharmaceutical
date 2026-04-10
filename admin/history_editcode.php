<?php
session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$year = $_POST['year'];
		$decription = $_POST['decription'];
		$date=date("Y-m-d h:i:s");
		
		include "compressfunction.php";	
		$folder="../images/";

		if(empty($_FILES['file']['name'])){
			$filename2 = $_POST['image'];
		}else{	
			$filename2= image_png($folder);
		}

		if(empty($_FILES['file2']['name'])){
			$icon = $_POST['image2'];
		}else{	
			$icon = file2($folder);
		}

		$eve = "UPDATE history set title = '$title', icon = '$icon' , year = '$year', decription = '$decription', img = '$filename2', is_active = '0' , is_deleted = 0 WHERE id= '".$id."'";
		$run = mysqli_query($conn,$eve)or die(mysqli_error($conn));
		// print_r($run); 
	
		if ($run)
		{	
			$_SESSION['msg1']= "success";
			header('Location: history_index.php');
		   
		} else 
		{
			$_SESSION['msg1']= "not success";
			header('Location: history_edit.php');
		  
		}	
	}
?>	
