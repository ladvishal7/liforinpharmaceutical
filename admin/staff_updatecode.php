<?php
session_start(); 
	include 'connect.php';
	if(isset($_POST['submit'])){
		$id = $_POST['id'] ?? '';
		$staff_name = $_POST['staff_name'] ?? '';
		$staff_designation = $_POST['staff_designation'] ?? '';
		$staff_info = str_replace("'","&#39;",$_POST['staff_info'] ?? '');
		$facebook = $_POST['facebook'] ?? '';
		$twitter = $_POST['twitter'] ?? '';
		$linkedin = $_POST['linkedin'] ?? '';
		if(empty($_FILES['file']['name'])){
			 $filename1 = $_POST['image']?? '';
		}else{	
			include "compressfunction.php";	
    		$folder="../images/";
    		$filename1= compress($folder);
	  }
	//update query
			$date=date("Y-m-d h:i:s");	
			$eve = "UPDATE staff_master SET staff_name='$staff_name', staff_img ='$filename1', staff_designation='$staff_designation' , staff_info = '$staff_info' , facebook ='$facebook' , twitter = '$twitter' , linkedin = '$linkedin' , is_active = '0' , is_deleted = '0' , insert_at= '$date' WHERE id = '".$id."'";
			$run = mysqli_query($conn,$eve);
			// print_r($run);
			if($run){	
				$_SESSION['msg2']= "success";
			   //header('location: staff_index.php');
			   echo '<script>location.replace("staff_index.php");</script>';
			}else{
				$_SESSION['msg2']= "not success";
			   header('location: staff_update.php');
			  
			}	
	}
		
?>	
