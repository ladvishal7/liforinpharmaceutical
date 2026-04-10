<?php
session_start(); 
	include 'connect.php';
	if(!isset($_SESSION['a_id']))
	{
		header('Location: index.php');
	}
	
	if(isset($_POST['submit'])){
		$id = $_POST['gl_id'];
		$name = $_POST['name'];
		$type = $_SESSION['catid'];
		$description = $_POST['ab_description'];
	    if(empty($_FILES['file']['name'])){		
			$filename2 = $_POST['image'];
		}else{	
			include "compressfunction.php";	
			$folder="../images/";
			$filename2= compress($folder);
       }	
		//update query
				 $date=date("Y-m-d h:i:s");	
				$eve = "UPDATE image_master set name = '$name',description = '$description',img = '$filename2',type = '$type', is_active = '0' ,is_delete = 0 , insert_at = '$date' WHERE id= '".$id."'";
                $run = mysqli_query($conn,$eve)or die(mysqli_error($conn));
                // print_r($run);
                if ($run)
				{	
				   $_SESSION['msg']= "success";		
                   header('Location: gallery_index.php');
                   
				} else 
				{
                   $_SESSION['msg']= "not success";
				   header('Location: gallery_edit.php');
                  
				}	
}
		
?>	
