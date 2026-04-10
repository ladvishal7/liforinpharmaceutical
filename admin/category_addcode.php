<?php
	session_start(); 
	include "connect.php";
	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$date=date("Y-m-d h:i:s");
		
		//insert query
		$query=mysqli_query($conn,"insert into sub_menu_master(name, menu_id, link,  is_active, is_deleted, insert_at) values('$title', 0, '', 0, 0, '$date')")or die(mysqli_error($conn));
		if($query)
		{	
			$_SESSION['msg1']= "success";
			header('location:category_index.php');
		} else 
		{
			$_SESSION['msg1']= "not success";
		}	
	}
?>	
