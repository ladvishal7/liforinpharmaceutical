<?php
	
	session_start(); 
	
	include 'connect.php';
        if(isset($_POST['submit'])){
		$id = $_POST['ab_id'];
		$s_id = $_POST['s_id'];
		$name = $_POST['name'];
		$description = str_replace("'","&#39;",$_POST['ab_description']);
		
		if(empty($_FILES['file']['name'])){																	
			$filename1 = $_POST['image'];
		}else{			
			include "compressfunction.php";																								
			$folder = "images/";
			$filename2 = compress($folder);
		}
		$eve = "UPDATE about_us_page set name = '$name', description = '$description' , img = '$filename2' , is_active = '0' ,is_deleted = 0 WHERE id = '".$id."'";													
		$run = mysqli_query($conn,$eve)or die(mysqli_error($conn));
		
		$eve1 = "UPDATE sub_menu_master set name = '$name', is_active = '0' ,is_deleted = 0 WHERE id= '".$s_id."'";
		$run1 = mysqli_query($conn,$eve1)or die(mysqli_error($conn));
		// print_r($run);																													
		if ($run && $run1)																														
		{	
		
			$_SESSION['msg1']= "success";																		
			header('Location: about_page_index.php');																							
		} else																		
		{	

			$_SESSION['msg1']= "not success";																			
			header('Location: about_page_edit.php');																									
		}																										
	}				
?>				
