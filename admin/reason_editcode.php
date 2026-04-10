<?php
session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$id = $_POST['ab_id'];
		$heading = $_POST['heading'];
		$name = $_POST['name'];
		$description = $_POST['ab_description'];
		
		$eve = "UPDATE reason_master set heading = '$heading',name = '$name' , description = '$description' , is_active = '0' , is_deleted = 0 WHERE id= '".$id."'";
		$run = mysqli_query($conn,$eve)or die(mysqli_error($conn));
		// print_r($run);
		if ($run)
		{	
			$_SESSION['msg1']= "success";
			header('Location: reason_index.php');
		   
		} else 
		{
			$_SESSION['msg1']= "not success";
			header('Location: reason_edit.php');
		  
		}	
	}
?>	
