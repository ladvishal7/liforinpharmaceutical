<?php
	include "connect.php";
	session_start();
	// $id = $_SESSION['user_id'];
		$b=$_GET['id1'];
	$query=mysqli_query($conn,"SELECT * FROM general_pages WHERE id='$b'")or die(mysqli_error($conn));
	$array=mysqli_fetch_assoc($query);
	$sm_id = $array['sub_menu_id'];
			
		$i=$_SESSION['aid'];
		if($array['is_active'] == 0){
			$update1 = mysqli_query($conn,"UPDATE general_pages SET is_active = 1 WHERE id = '".$b."'")or die(mysqli_error($conn));
			$update2 = mysqli_query($conn,"UPDATE menu_master SET is_active = 1 WHERE id = '".$sm_id."'")or die(mysqli_error($conn));
			
			//if($update1){
			// echo "suceess";
			header('location:general_page_index.php');
			// }else{
			 //echo "fail";
		//	}
				
		}else if($array['is_active'] == 1){
			$update1 = mysqli_query($conn,"UPDATE general_pages SET is_active = 0 WHERE id = '".$b."'")or die(mysqli_error($conn));
			$update2 = mysqli_query($conn,"UPDATE menu_master SET is_active = 0 WHERE id = '".$sm_id."'")or die(mysqli_error($conn));
			 //if($update1){
				// echo "suceess";
				header('location:general_page_index.php');
				// }else{
				// echo "fail";
			// }
		}
?>