<?php
session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$date=date("Y-m-d h:i:s");
		

		$eve = "UPDATE sub_menu_master set name = '$title', is_active = '0' , is_deleted = 0 WHERE id= '".$id."'";
		$run = mysqli_query($conn,$eve)or die(mysqli_error($conn));
		// print_r($run); 
	
		if ($run)
		{	
			$_SESSION['msg1']= "success";
			header('Location: category_index.php');
		   
		} else 
		{
			$_SESSION['msg1']= "not success";
			header('Location: category_edit.php');
		  
		}	
	}
?>	
