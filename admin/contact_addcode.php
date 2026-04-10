<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		
	$name = $_POST['name'];
	$details = $_POST['details'];

	$date=date("Y-m-d h:i:s");	
	$insert = "INSERT INTO contact_master ( name, description, is_active , is_deleted, insert_at) VALUES( '$name', '$details', 0 , 0 , '$date')";
			$run = mysqli_query($conn,$insert)or die(mysqli_error($conn));
			// print_r($run);
			if ($run)
			{	
				$_SESSION['msg2']= "success";		
				header('Location: contact_index.php');
			   
			} else 
			{
				$_SESSION['msg2']= "not success";
				header('Location: contact_add.php');
			  
			}	
}
?>