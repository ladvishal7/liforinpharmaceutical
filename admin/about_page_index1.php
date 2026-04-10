<?php
	include "connect.php";
	session_start();
	// $id = $_SESSION['user_id'];
		$b=$_GET['id1'];
		$s_id=$_GET['s_id'];
	$query=mysqli_query($conn,"SELECT * FROM about_us_page WHERE id='$b'")or die(mysqli_error($conn));
	$array=mysqli_fetch_assoc($query);
			
		$i=$_SESSION['aid'];
		if($array['is_active'] == 0){
			$update1 = mysqli_query($conn,"UPDATE about_us_page SET is_active = 1 WHERE id = '".$b."'")or die(mysqli_error($conn));
			$update2 = mysqli_query($conn,"UPDATE sub_menu_master SET is_active = 1 WHERE id = '".$s_id."'")or die(mysqli_error($conn));
			
			//if($update1){
			// echo "suceess";
			header('location:about_page_index.php');
			// }else{
			 //echo "fail";
		//	}
				
		}else if($array['is_active'] == 1){
			$update1 = mysqli_query($conn,"UPDATE about_us_page SET is_active = 0 WHERE id = '".$b."'")or die(mysqli_error($conn));
			$update2 = mysqli_query($conn,"UPDATE sub_menu_master SET is_active = 0 WHERE id = '".$s_id."'")or die(mysqli_error($conn));
			 //if($update1){
				// echo "suceess";
				header('location:about_page_index.php');
				// }else{
				// echo "fail";
			// }
		}
?>