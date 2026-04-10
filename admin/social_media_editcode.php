<?php
session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$icon = $_POST['icon'];
		$link = $_POST['link'];
		
		$eve = "UPDATE social_media_master set name = '$name', icon = '$icon' , link = '$link' , is_active = '0' , is_deleted = 0 WHERE id= '".$id."'";
		$run = mysqli_query($conn,$eve)or die(mysqli_error($conn));
		// print_r($run);
		if ($run)
		{	
			$_SESSION['msg1']= "success";
			header('Location: social_media_index.php');
		   
		} else 
		{
			$_SESSION['msg1']= "not success";
			header('Location: social_mediay_edit.php');
		  
		}	
	}
?>	
