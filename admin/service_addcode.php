<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		// $icon = $_POST['icon'];
		$description = $_POST['description'];
		
		include "compressfunction.php";	
		$folder="../images/";
		$filename1= compress($folder);

		$icon = icon($folder);

		$date=date("Y-m-d h:i:s");	
		$insert = "INSERT INTO news_master ( news_name, news_img,news_caption, news_description,is_active , is_deleted, insert_at) VALUES('$name', '$filename1','$icon' , '$description', 0 , 0 , '$date')";
			$run = mysqli_query($conn,$insert);
			// print_r($run);
			if ($run)
			{	
				$_SESSION['msg2']= "success";		
				header('Location: service_index.php');
			   
			} else 
			{
				$_SESSION['msg2']= "not success";
				header('Location: service_add.php');
			  
			}	
	}
?>