<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$type = $_POST['type'];
		//$icon = $_POST['icon'];
		//$description = $_POST['description'];
		include "compressfunction.php";	
		$folder="../images/";
		// $filename1= compress($folder);
		$filename1 = image_png($folder);

		$date=date("Y-m-d h:i:s");	
		$insert = "INSERT INTO event_master ( event_name, event_img,event_description,  is_active , is_deleted, insert_at) VALUES('$name', '$filename1', '$type', 0 , 0 , '$date')";
			$run = mysqli_query($conn,$insert);
			// print_r($run);
			if ($run)
			{	
				$_SESSION['msg2']= "success";		
				header('Location: event_index.php?type='.$type);
			   
			} else 
			{
				$_SESSION['msg2']= "not success";
				header('Location: event_add.php?type='.$type);
			  
			}	
	}
?>