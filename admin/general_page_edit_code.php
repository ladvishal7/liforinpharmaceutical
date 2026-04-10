<?php
	session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$sm_id = $_POST['sm_id'];
		$name = $_POST['name'];
		$description = $_POST['ab_description'];
		
		$eve = "UPDATE general_pages set name = '$name', description = '$description' , is_active = '0' ,is_deleted = 0 WHERE sub_menu_id= '".$sm_id."'";
		$run = mysqli_query($conn,$eve)or die(mysqli_error($conn));
		
		$run1 = mysqli_query($conn,"UPDATE menu_master set name = '$name', is_active = '0' ,is_deleted = 0 WHERE id= '".$sm_id."'")or die(mysqli_error($conn));
		// print_r($run);
		if ($run && $run1)
		{	
			$_SESSION['msg1']= "success";
			header('location: general_page_index.php');
		   
		} else 
		{
			$_SESSION['msg1']= "not success";
			header('location: general_page_edit.php');
		  
		}	
	}
?>	
