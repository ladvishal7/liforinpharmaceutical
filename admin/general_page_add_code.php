<?php
	session_start(); 
	include "connect.php";
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$description = $_POST['ab_description'];
		$date=date("Y-m-d h:i:s");
		//insert query
		$query1=mysqli_query($conn,"insert into menu_master( name, link, is_active, is_deleted, insert_at) values('$name', 'general.php', 0, 0, '$date')")or die(mysqli_error($conn));
		
		$last = mysqli_query($conn, "SELECT MAX(id) as last_id FROM sub_menu_master");
		$last_fetch = mysqli_fetch_assoc($last);
		$last_id = $last_fetch['last_id'];

		$query2=mysqli_query($conn,"insert into general_pages(sub_menu_id, name, description, is_active, is_deleted, insert_at)values('$last_id', '$name','$description',0,0,'$date')")or die(mysqli_error($conn));
		
		if($query2 && $query1)
		{	
			$_SESSION['msg1']= "success";
			header('location:general_page_index.php');
		} else 
		{
			$_SESSION['msg1']= "not success";
		}	
	}
?>	
