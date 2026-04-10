<?php
	session_start();
	include "connect.php";
	if(isset($_GET['id'])){
		$deleteid=$_GET['id'];
		$delete=mysqli_query($conn,"update menu_master set is_active=1,is_deleted=1 where id='$deleteid'")or die(mysqli_error($conn));
	}
	if(isset($_GET['id1']) && isset($_GET['status'])){	
		$bmid = $_GET['id1'];
		if($_GET['status'] == 0){
			$eve="update menu_master set is_active = 1  where id= '$bmid'";
		}else{
			$eve="update menu_master set is_active = 0  where id= '$bmid'";
		}
		$re = mysqli_query($conn, $eve);
	}
	header('Location: menu.php');
?>