<?php
	include "connect.php";
	session_start();
	// $id = $_SESSION['user_id'];
		$b=$_GET['id1'];
	$query=mysqli_query($conn,"SELECT * FROM project_master WHERE id='$b'")or die(mysqli_error($conn));
	$array=mysqli_fetch_assoc($query);
			
		$i=$_SESSION['aid'];
		if($array['is_active'] == 0){
			$update1 = mysqli_query($conn,"UPDATE project_master SET is_active = 1 WHERE id = '".$b."'")or die(mysqli_error($conn));
			
			//if($update1){
			// echo "suceess";
			header('location:project.php');
			// }else{
			//echo "fail";
		//	}
				
		}else if($array['is_active'] == 1){
			$update1 = mysqli_query($conn,"UPDATE project_master SET is_active = 0 WHERE id = '".$b."'")or die(mysqli_error($conn));
			 //if($update1){
				// echo "suceess";
				header('location:project.php');
				// }else{
				// echo "fail";
			// }
		}
?>