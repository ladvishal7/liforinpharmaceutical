<?php
	session_start();
	include "connect.php";
	if(isset($_GET['id'])){
		$deleteid=$_GET['id'];
		$delete=mysqli_query($conn,"update sub_menu_master set is_active=1,is_deleted=1 where id='$deleteid'")or die(mysqli_error($conn));
	}
	
	header('Location: category_inex.php');
?>