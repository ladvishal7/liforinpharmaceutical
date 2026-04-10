<?php
session_start(); 
include "connect.php";
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$icon = $_POST['icon'];
	$link = $_POST['link'];
	$date=date("Y-m-d h:i:s");
	
	//insert query
	$query=mysqli_query($conn,"insert into social_media_master(name, icon, link, is_active, is_deleted, insert_at) values('$name', '$icon', '$link', 0, 0, '$date')")or die(mysqli_error($conn));
	if($query)
	{	
		$_SESSION['msg1']= "success";
		header('location:social_media_index.php');
	} else 
	{
		$_SESSION['msg1']= "not success";
	}	
}
?>	
