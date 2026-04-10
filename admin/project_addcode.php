<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		$heading = ucwords($_POST['heading']);
		$title = str_replace(' ','_',strtolower($_POST['heading']));
		$text = str_replace("'","&#39;",$_POST['description']?? 0);
		$duration = $_POST['duration'] ?? '';
		$location = $_POST['location'] ?? '';
		$id = $_POST['id'] ?? '';
		$date = $_POST['date'] ?? '';
		$category_id = $_POST['category'] ?? '';
		$client_name = $_POST['client_name'] ?? '';
		$size = $_POST['size'] ?? '';
		


		include "compressfunction.php";	
		$folder="../images/";
		$filename1= compress($folder);
		$date=date("Y-m-d h:i:s");

		
		$eve = "INSERT INTO project_master ( name, heading , description, location  ,  fichimg , category , date , duration , client_name , size, is_active , is_deleted , insert_at)VALUES('$title' , '$heading' , '$text' , '$location' ,   '$filename1' , '$category_id', '$date' , '$duration' , '$client_name', '$size', '0' , '0' , '$date') ";
		$run = mysqli_query($conn,$eve);
		
		if ($run)
		{	
			$_SESSION['msg1']= "success";
			header("Location: project.php?id=$id&type=$type");
		     // echo '<script>location.replace("project.php");</script>';
		} else 
		{
			$_SESSION['msg1']= "not success";
			header("Location: project.php?id=$id&type=$type");
		  
		}	
	}
?>	
