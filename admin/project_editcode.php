<?php
session_start(); 
	include 'connect.php';
        if(isset($_POST['submit'])){
		$eid = $_POST['ab_id'] ?? null;
		$title = str_replace(' ','_',strtolower($_POST['heading']));
		$heading = ucwords($_POST['heading']);
		$category = $_POST['category'] ?? null;
		
		if(!empty($_POST['description'])){
			$text = str_replace("'","&#39;",$_POST['description'] ?? null);
		}else{
			$text = '';
		}
		$date = $_POST['date'] ?? '';
		$location = $_POST['location'] ?? '';
		$id = $_POST['id'] ?? '';
		$client_name = $_POST['client_name'] ?? '';
		$duration = $_POST['duration'] ?? '';
		$size = $_POST['size'] ?? '';
	
		if(empty($_FILES['file']['name'])){
			$filename1 = $_POST['image'];
		}else{	
			include "compressfunction.php";	
			$folder="../images/";
			$filename1= image_png($folder);
		}


		$eve = "UPDATE project_master set  name = '$title', heading = '$heading', description = '$text' , fichimg = '$filename1' , date = '$date' , location = '$location', client_name = '$client_name', category = '$category' , duration = '$duration' , size = '$size',is_active = '0' , is_deleted = 0 WHERE id= '".$id."'";
		// echo $eve; exit;
		$run = mysqli_query($conn,$eve);
		// print_r($run);
		if ($run)
		{	
			$_SESSION['msg1']= "success";
			header("Location: project.php?id=$id&type=$type");
		   
		} else 
		{
			$_SESSION['msg1']= "not success";
			header("Location: project.php?id=$id&type=$type");
		  
		}	
	}
?>	
