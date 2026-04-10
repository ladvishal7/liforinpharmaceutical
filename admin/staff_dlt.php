<?php
session_start();
		include("connect.php");
		$a=$_GET['id'];
		$delete=mysqli_query($conn,"update staff_master set is_active=1,is_deleted=1 where id = '$a'")or die(mysqli_error($conn));
		header('Location: staff_index.php');
?>