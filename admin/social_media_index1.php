<?php
	include "connect.php";
	session_start();
	// $id = $_SESSION['user_id'];
		$b=$_GET['id1'];
	 $query=mysqli_query($conn,"SELECT * FROM social_media_master WHERE id='$b'")or die(mysqli_error($conn));
	 $array=mysqli_fetch_assoc($query);
			
			$i=$_SESSION['aid'];
			if($array['is_active'] == 0){
					$update1 = mysqli_query($conn,"UPDATE social_media_master SET is_active = 1 WHERE id = '".$b."'")or die(mysqli_error($conn));
					
					//if($update1){
					// echo "suceess";
					header('location:social_media_index.php');
					// }else{
					 //echo "fail";
				//	}
					
			}else if($array['is_active'] == 1){
				$update1 = mysqli_query($conn,"UPDATE social_media_master SET is_active = 0 WHERE id = '".$b."'")or die(mysqli_error($conn));
				 //if($update1){
					// echo "suceess";
					header('location:social_media_index.php');
					// }else{
					// echo "fail";
				// }
			}
?>