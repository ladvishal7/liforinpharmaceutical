<?php
	include "connect.php";
	session_start();
	// $id = $_SESSION['user_id'];
		$b=$_GET['id1'];
	 $query=mysqli_query($conn,"SELECT * FROM staff_master WHERE id='$b'")or die(mysqli_error($conn));
	 $array=mysqli_fetch_assoc($query);
			
			$i=$_SESSION['aid'];
			if($array['is_active'] == 0){
					$update1 = mysqli_query($conn,"UPDATE staff_master SET is_active = 1 WHERE id = '".$b."'")or die(mysqli_error($conn));
					
					//if($update1){
					// echo "suceess";
					header('location:staff_index.php');
					// }else{
					 //echo "fail";
				//	}
					
			}else if($array['is_active'] == 1){
				$update1 = mysqli_query($conn,"UPDATE staff_master SET is_active = 0 WHERE id = '".$b."'")or die(mysqli_error($conn));
				 //if($update1){
					// echo "suceess";
					header('location:staff_index.php');
					// }else{
					// echo "fail";
				// }
			}
?>